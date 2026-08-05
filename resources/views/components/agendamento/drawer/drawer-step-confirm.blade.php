{{-- ===========================================================
| ETAPA 04
|--------------------------------------------------------------------------
| CONFIRMAÇÃO DO AGENDAMENTO
|--------------------------------------------------------------------------
| Última etapa antes do envio ao backend.
|--------------------------------------------------------------------------
--}}

<div

class="
flex
flex-col
gap-8
"

>

    {{-- =======================================================
        TÍTULO
    ======================================================== --}}

    <div>

        <h3

        class="
        font-title
        text-3xl
        text-zinc-900
        "

        >

            Confirmar agendamento

        </h3>

        <p

        class="
        mt-2
        text-sm
        leading-6
        text-zinc-500
        "

        >

            Confira todas as informações antes de finalizar seu agendamento.

        </p>

    </div>



    {{-- =======================================================
        RESUMO
    ======================================================== --}}

    <div

    class="
    overflow-hidden
    rounded-3xl
    border
    border-zinc-200
    bg-white
    shadow-sm
    "

    >

        {{-- ===================================================
            CABEÇALHO
        ==================================================== --}}

        <div

        class="
        border-b
        border-zinc-200
        bg-orange-950
        p-6
        text-white
        "

        >

            <h4

            class="
            font-title
            text-2xl
            "

            >

                Resumo do pedido

            </h4>

        </div>



        {{-- ===================================================
            CONTEÚDO
        ==================================================== --}}

        <div

        class="
        space-y-6
        p-6
        "

        >

            {{-- Serviço --}}

            <div class="flex items-center justify-between">

                <span class="text-zinc-500">

                    Serviço

                </span>

                <span

                class="
                font-semibold
                text-zinc-900
                "

                x-text="drawer.servico?.name"

                >

                </span>

            </div>



            {{-- Duração --}}

            <div class="flex items-center justify-between">

                <span class="text-zinc-500">

                    Duração

                </span>

                <span

                class="
                font-semibold
                text-zinc-900
                "

                x-text="drawer.servico?.time"

                >

                </span>

            </div>



            {{-- Data --}}

            <div class="flex items-center justify-between">

                <span class="text-zinc-500">

                    Data

                </span>

                <span

                class="
                font-semibold
                text-zinc-900
                "

                >

                    Dia

                    <span x-text="drawer.data"></span>

                </span>

            </div>



            {{-- Horário --}}

            <div class="flex items-center justify-between">

                <span class="text-zinc-500">

                    Horário

                </span>

                <span

                class="
                font-semibold
                text-zinc-900
                "

                x-text="drawer.horario"

                >

                </span>

            </div>



            {{-- Pagamento --}}

            <div class="flex items-center justify-between">

                <span class="text-zinc-500">

                    Pagamento

                </span>

                <span

                class="
                font-semibold
                text-zinc-900
                "

                x-text="drawer.pagamento"

                >

                </span>

            </div>



            {{-- Valor --}}

            <div class="flex items-center justify-between">

                <span class="text-zinc-500">

                    Valor

                </span>

                <span

                class="
                text-2xl
                font-bold
                text-orange-950
                "

                x-text="drawer.servico?.price"

                >

                </span>

            </div>

        </div>

    </div>



    {{-- =======================================================
        AVISO
    ======================================================== --}}

    <div

    class="
    rounded-3xl
    border
    border-amber-200
    bg-amber-50
    p-5
    "

    >

        <h5

        class="
        font-semibold
        text-amber-900
        "

        >

            Antes de confirmar

        </h5>

        <p

        class="
        mt-2
        text-sm
        leading-6
        text-amber-800
        "

        >

            Após confirmar seu agendamento, nossa equipe irá validar a disponibilidade do horário selecionado. Caso ocorra qualquer alteração, entraremos em contato.

        </p>

    </div>

</div>