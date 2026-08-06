# Revisão arquitetural para o back-end de agendamentos

Este documento registra as decisões arquiteturais para transformar o front-end atual em um sistema de agendamento persistente, seguro e escalável, preservando a experiência visual existente em Blade + Alpine.js.

## Premissas do domínio

- Existe apenas uma profissional no salão.
- Toda disponibilidade pertence a uma única agenda operacional.
- O front-end pode manter estado temporário para experiência de uso, mas nunca deve ser fonte de verdade.
- Controllers devem ser finos: validar entrada, chamar camada de aplicação e retornar resposta.
- O núcleo do sistema é a disponibilidade, não o CRUD administrativo.

## Direção de arquitetura

A interface atual deve passar a consumir dados vindos do banco por meio de Eloquent, sem depender de `App\Data\Categories` ou `App\Data\Services` em runtime. Esses arrays devem ser tratados somente como referência de seed inicial.

A estrutura recomendada para o domínio é:

```text
app/
  Actions/
  DTOs/
  Enums/
  Http/
    Controllers/
    Requests/
  Models/
  Notifications/
  Observers/
  Policies/
  Repositories/
  Services/
```

## Modelo de catálogo

O catálogo deve seguir a hierarquia:

```text
Categoria
└── Subcategoria
    └── Serviço
```

### Categorias

Campos recomendados:

- `id`: inteiro interno.
- `name`: nome exibido.
- `slug`: identificador estável para URLs e filtros.
- `icon`: caminho ou nome do ícone administrável.
- `sort_order`: ordenação visual.
- `is_active`: controle de exibição.

### Subcategorias

Campos recomendados:

- `id`: inteiro interno.
- `category_id`: vínculo com categoria.
- `name`: nome exibido.
- `slug`: identificador estável para URLs e filtros.
- `icon`: caminho ou nome do ícone administrável.
- `sort_order`: ordenação visual.
- `is_active`: controle de exibição.

### Serviços

Campos recomendados:

- `id`: inteiro interno.
- `subcategory_id`: vínculo com subcategoria.
- `name`: nome exibido.
- `slug`: identificador para URLs e integrações.
- `description`: descrição curta.
- `image`: imagem do serviço.
- `duration_minutes`: duração numérica em minutos.
- `price_cents`: preço inteiro em centavos.
- `sort_order`: ordenação visual.
- `is_active`: controle de venda/agendamento.

A duração não deve ser armazenada como texto. A exibição como `40 min`, `1h20` ou `2h` deve ser responsabilidade da camada de apresentação, por accessor, presenter ou ViewModel.

O preço não deve ser armazenado como texto. O banco deve usar centavos e a exibição em reais deve ocorrer por accessor, cast ou presenter.

## Domínio de agendamento

O objeto temporário do Drawer deve corresponder ao agregado `Appointment` no back-end.

Campos recomendados para agendamento:

- `id`: inteiro interno.
- `user_id`: cliente autenticado, quando existir.
- `service_id`: serviço selecionado no momento da criação.
- `starts_at`: início real do atendimento.
- `ends_at`: fim real do atendimento.
- `status`: enum de status do agendamento.
- `payment_method`: enum de forma de pagamento.
- `payment_status`: enum independente do status do agendamento.
- `customer_name`, `customer_phone`, `customer_email`: dados necessários para contato, quando ainda não houver autenticação completa.
- `service_snapshot_name`: nome do serviço no momento da compra.
- `service_snapshot_duration_minutes`: duração no momento da compra.
- `service_snapshot_price_cents`: preço no momento da compra.
- `service_snapshot_category_name`: categoria no momento da compra.
- `service_snapshot_subcategory_name`: subcategoria no momento da compra.

O snapshot impede que edições futuras no cadastro de serviços alterem o histórico dos agendamentos já criados.

## Enums recomendados

### Status do agendamento

- `draft`: seleção ainda não confirmada, se o fluxo precisar reservar temporariamente.
- `scheduled`: agendamento confirmado.
- `cancelled`: cancelado pela cliente ou administradora.
- `completed`: atendimento concluído.
- `no_show`: cliente não compareceu.

### Forma de pagamento

- `pix`
- `card`
- `cash`

### Status do pagamento

- `pending`
- `paid`
- `cancelled`
- `refunded`

Forma de pagamento e status de pagamento não devem ser misturados no mesmo campo.

## Motor de disponibilidade

A disponibilidade deve ser calculada por uma camada própria, por exemplo `App\Services\Availability\AvailabilityService`, e nunca diretamente em Controllers ou componentes Blade.

A pergunta central dessa camada é:

> Quais horários estão disponíveis para este serviço nesta data?

Entradas mínimas:

- serviço solicitado;
- data solicitada;
- duração em minutos;
- fuso horário configurado da agenda;
- regras de funcionamento;
- agendamentos existentes;
- bloqueios e exceções.

Fontes de dados recomendadas:

- `business_hours`: expediente semanal padrão.
- `schedule_exceptions`: exceções por data, como expediente especial ou folga.
- `blocked_periods`: bloqueios parciais ou de dia inteiro.
- `appointments`: horários já ocupados.
- configuração de intervalo entre atendimentos, quando existir.

Saída esperada para a API:

```json
[
  "08:00",
  "08:30",
  "09:00"
]
```

A granularidade dos slots deve ser configurável, por exemplo 15 ou 30 minutos.

## Prevenção de conflitos

A criação do agendamento deve recalcular disponibilidade no servidor durante a confirmação. O horário enviado pelo navegador é apenas uma intenção.

Fluxo obrigatório:

```text
Cliente escolhe horário
↓
Backend recebe serviço, data e horário pretendido
↓
Backend recalcula disponibilidade usando o motor de disponibilidade
↓
Se o horário ainda estiver livre, cria o Appointment dentro de transação
↓
Se o horário foi ocupado, retorna erro de concorrência para a interface
```

A persistência deve usar transação e uma checagem contra sobreposição de horários antes de salvar. A regra de sobreposição deve considerar qualquer agendamento ativo com interseção entre `starts_at` e `ends_at`.

## APIs planejadas

Mesmo mantendo Blade, a interface deve consumir endpoints claros:

- `GET /api/categories`: lista categorias com subcategorias ativas.
- `GET /api/services`: lista serviços filtráveis por categoria e subcategoria.
- `GET /api/availability?service_id=1&date=YYYY-MM-DD`: retorna slots livres.
- `GET /api/calendar?service_id=1&month=YYYY-MM`: retorna dias disponíveis, bloqueados, sem expediente e indisponíveis.
- `POST /api/appointments`: valida, recalcula disponibilidade e cria agendamento.
- `GET /api/appointments/{appointment}/confirmation`: retorna dados de confirmação.

Essas APIs podem ser consumidas pelo Alpine.js sem transferir regras de negócio para o navegador.

## Calendário dinâmico

O calendário deve deixar de ser puramente visual e passar a receber do back-end metadados por data:

- dias disponíveis;
- dias bloqueados;
- dias sem expediente;
- datas lotadas;
- datas fora da janela de agendamento.

O componente Blade/Alpine deve apenas renderizar estados retornados pela API.

## Autenticação no fluxo do Drawer

A etapa de autenticação deve permanecer desacoplada da criação definitiva do agendamento. O back-end deve permitir validar ou identificar a cliente antes da confirmação, mas o `Appointment` só deve ser persistido após:

1. dados do serviço carregados do banco;
2. cliente identificada ou dados mínimos validados;
3. disponibilidade recalculada;
4. snapshot do serviço montado no servidor.

## Plano de implementação recomendado

1. Criar migrations e models do catálogo: categorias, subcategorias e serviços.
2. Criar seeders a partir dos arrays atuais, convertendo duração para minutos e preço para centavos.
3. Criar presenters/accessors para duração e preço formatados.
4. Alterar a página de agendamento para receber ViewModels vindos do banco, mantendo o HTML e classes atuais.
5. Criar migrations e models de agenda: expediente, exceções, bloqueios e agendamentos.
6. Implementar `AvailabilityService` com testes unitários cobrindo duração, expediente, bloqueios e conflitos.
7. Criar Requests, Actions e Controllers finos para disponibilidade e criação de agendamentos.
8. Conectar Alpine.js às APIs sem mover regra de negócio para o front-end.
9. Criar área administrativa para categorias, subcategorias, serviços, bloqueios e exceções.
10. Adicionar Policies, Notifications e Jobs conforme o fluxo operacional evoluir.

## Critérios de aceite arquitetural

- Nenhum Controller calcula horários disponíveis.
- Nenhum dado de preço ou duração é salvo como texto.
- Nenhum agendamento depende do estado atual do cadastro do serviço para exibir histórico.
- Nenhum horário enviado pelo front-end é salvo sem validação no servidor.
- Categorias e subcategorias possuem IDs inteiros internamente e slugs apenas para URLs, filtros e compatibilidade visual.
- Alpine.js controla somente estado visual e dados temporários.