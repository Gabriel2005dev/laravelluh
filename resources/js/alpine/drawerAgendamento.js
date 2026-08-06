export default () => ({

    drawer: {

        aberto: false,

        etapa: 1,

        autenticado: false,

        servico: null,

        data: null,

        horario: null,

        horarios: [],

        pagamento: null,

        carregando: false,

        carregandoHorarios: false,

        erro: null,

        concluido: false,

    },

    /*
    |--------------------------------------------------------------------------
    | DRAWER
    |--------------------------------------------------------------------------
    */

    abrirDrawer(servico) {

        this.drawer.servico = servico;

        this.atualizarAutenticacao();

        this.drawer.aberto = true;

        this.drawer.etapa = 1;

        this.drawer.data = null;

        this.drawer.horario = null;

        this.drawer.horarios = [];

        this.drawer.pagamento = null;

        this.drawer.erro = null;

        this.drawer.concluido = false;

        document.body.classList.add('overflow-hidden');

    },

    fecharDrawer() {

        this.drawer.aberto = false;

        document.body.classList.remove('overflow-hidden');

    },

    resetDrawer() {

        this.drawer = {

            aberto: false,

            etapa: 1,

            autenticado: false,

            servico: null,

            data: null,

            horario: null,

            horarios: [],

            pagamento: null,

            carregando: false,

            carregandoHorarios: false,

            erro: null,

            concluido: false,

        };

    },

    salvarEstadoDrawer() {

    sessionStorage.setItem(
        'drawer-agendamento',
        JSON.stringify({

            servico: this.drawer.servico,

            data: this.drawer.data,

            horario: this.drawer.horario,

            pagamento: this.drawer.pagamento,

            etapa: 5,

        })
    );

},

restaurarEstadoDrawer() {

    const estado = sessionStorage.getItem('drawer-agendamento');

    if (!estado) {
        return;
    }

    const drawer = JSON.parse(estado);

    this.drawer.servico = drawer.servico;

    this.drawer.data = drawer.data;

    this.drawer.horario = drawer.horario;

    this.drawer.pagamento = drawer.pagamento;

    this.drawer.etapa = drawer.etapa;

    this.drawer.aberto = true;

    document.body.classList.add('overflow-hidden');

},

limparEstadoDrawer() {

    sessionStorage.removeItem('drawer-agendamento');

},limparEstadoDrawer() {

    sessionStorage.removeItem('drawer-agendamento');

},

    /*
    |--------------------------------------------------------------------------
    | AUTENTICAÇÃO
    |--------------------------------------------------------------------------
    */

    verificarLogin() {

        return document
            .querySelector('meta[name="user-authenticated"]')
            ?.content === 'true';

    },

    atualizarAutenticacao() {

        this.drawer.autenticado = this.verificarLogin();

    },

    irParaLogin() {

        sessionStorage.setItem(
            'drawerAgendamento',
            JSON.stringify({
                servico: this.drawer.servico,
                data: this.drawer.data,
                horario: this.drawer.horario,
                pagamento: this.drawer.pagamento,
            })
        );

        window.location.href = "/login";

    },

    irParaCadastro() {

    this.salvarEstadoDrawer();

    window.location.href = "/register";

},
    /*
    |--------------------------------------------------------------------------
    | DATA
    |--------------------------------------------------------------------------
    */

    selecionarData(data) {

        this.drawer.data = data;

        this.drawer.horario = null;

        this.carregarHorarios();

    },

    async carregarHorarios() {

        if (!this.drawer.servico?.id || !this.drawer.data) {
            return;
        }

        this.drawer.carregandoHorarios = true;

        this.drawer.erro = null;

        try {

            const params = new URLSearchParams({

                service_id: this.drawer.servico.id,

                date: this.drawer.data,

            });

            const response = await fetch(`/api/availability?${params.toString()}`, {

                headers: {

                    Accept: 'application/json',

                },

            });

            if (!response.ok) {

                throw new Error('Não foi possível carregar os horários.');

            }

            const horarios = await response.json();

            console.log('Status:', response.status);

            console.log('Resposta:', horarios);

            this.drawer.horarios = horarios;

        } catch (error) {

            this.drawer.erro = error.message;

            this.drawer.horarios = [];

        } finally {

            this.drawer.carregandoHorarios = false;

        }

    },

    dataSelecionadaFormatada() {

        if (!this.drawer.data) {

            return '';

        }

        return new Intl.DateTimeFormat('pt-BR', {

            day: '2-digit',

            month: 'long',

            year: 'numeric',

            timeZone: 'UTC',

        }).format(new Date(`${this.drawer.data}T00:00:00Z`));

    },

    /*
    |--------------------------------------------------------------------------
    | NAVEGAÇÃO
    |--------------------------------------------------------------------------
    */

    proximaEtapa() {

    if (!this.podeAvancar()) {
        return;
    }

    /*
    |--------------------------------------------------------------------------
    | Etapa 1 → 2 → 3
    |--------------------------------------------------------------------------
    */

    if (this.drawer.etapa < 3) {

        this.drawer.etapa++;

        return;

    }

    /*
    |--------------------------------------------------------------------------
    | Antes de abrir a etapa de autenticação,
    | verifica se o usuário já está logado.
    |--------------------------------------------------------------------------
    */

    this.atualizarAutenticacao();

    if (this.drawer.autenticado) {

        this.drawer.etapa = 5;

        return;

    }

    /*
    |--------------------------------------------------------------------------
    | Usuário não autenticado
    |--------------------------------------------------------------------------
    */

    this.drawer.etapa = 4;

},

    continuarAutenticacao() {

    this.atualizarAutenticacao();

    if (this.drawer.autenticado) {

        this.drawer.etapa = 5;

        return;

    }

    },

    voltarEtapa() {

    this.atualizarAutenticacao();

    if (this.drawer.etapa === 5 && this.drawer.autenticado) {

        this.drawer.etapa = 3;

        return;

    }

    if (this.drawer.etapa > 1) {

        this.drawer.etapa--;

    }

},

    podeAvancar() {

        switch (this.drawer.etapa) {

            case 1:

                return this.drawer.data !== null;

            case 2:

                return this.drawer.horario !== null;

            case 3:

                return this.drawer.pagamento !== null;

            default:

                return true;

        }

    },

        /*
    |--------------------------------------------------------------------------
    | CONFIRMAR AGENDAMENTO
    |--------------------------------------------------------------------------
    */

    async confirmarAgendamento() {

        this.atualizarAutenticacao();

        if (!this.drawer.autenticado) {

            this.drawer.etapa = 4;

            return;

        }

 

        this.drawer.carregando = true;

        this.drawer.erro = null;

        try {

            const response = await fetch('/api/appointments', {

                method: 'POST',

                headers: {

                    'Accept': 'application/json',

                    'Content-Type': 'application/json',

                    'X-CSRF-TOKEN':
                        document.querySelector('meta[name="csrf-token"]')?.content ?? '',

                },

                body: JSON.stringify({

                    service_id: this.drawer.servico.id,

                    date: this.drawer.data,

                    time: this.drawer.horario,

                    payment_method: this.drawer.pagamento,

                    customer_name:
                        document.querySelector('meta[name="user-name"]')?.content ||
                        'Cliente do site',

                    customer_email:
                        document.querySelector('meta[name="user-email"]')?.content ||
                        null,

                }),

            });

            const payload = await response.json();

            if (!response.ok) {

                throw new Error(

                    payload?.message ||

                    payload?.errors?.time?.[0] ||

                    'Não foi possível confirmar o agendamento.'

                );

            }

            this.drawer.concluido = true;

        } catch (error) {

            this.drawer.erro = error.message;

            console.error(error);

        } finally {

            this.drawer.carregando = false;

        }

    },

    init() {

    this.atualizarAutenticacao();

    if (this.drawer.autenticado) {

        this.restaurarEstadoDrawer();

    }

},

});