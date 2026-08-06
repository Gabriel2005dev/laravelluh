export default () => ({

    drawer:{

        aberto:false,
        etapa:1,
        servico:null,
        data:null,
        horario:null,
        horarios:[],
        pagamento:null,
        carregando:false,
        carregandoHorarios:false,
        erro:null,
        concluido:false,

    },

    abrirDrawer(servico){

        this.drawer.servico = servico;
        this.drawer.aberto = true;
        this.drawer.etapa = 1;
        this.drawer.data = null;
        this.drawer.horario = null;
        this.drawer.horarios = [];
        this.drawer.erro = null;
        document.body.classList.add('overflow-hidden');
    },

    fecharDrawer(){

        this.drawer.aberto = false;
        document.body.classList.remove('overflow-hidden');

    },

    resetDrawer(){

        this.drawer = {

            aberto:false,
            etapa:1,
            servico:null,
            data:null,
            horario:null,
            horarios:[],
            pagamento:null,
            pagamento:null,
            carregando:false,
            carregandoHorarios:false,
            erro:null,
            concluido:false,

        };
    },

    selecionarData(data){
        this.drawer.data = data;
        this.drawer.horario = null;
        this.carregarHorarios();
    },

    async carregarHorarios(){
        if(!this.drawer.servico?.id || !this.drawer.data){
            return;
        }

        this.drawer.carregandoHorarios = true;
        this.drawer.erro = null;

        try{
            const params = new URLSearchParams({
                service_id: this.drawer.servico.id,
                date: this.drawer.data,
            });
            const response = await fetch(`/api/availability?${params.toString()}`, {
                headers: { 'Accept': 'application/json' },
            });

            if(!response.ok){
                throw new Error('Não foi possível carregar os horários.');
            }

            this.drawer.horarios = await response.json();
        }catch(error){
            this.drawer.erro = error.message;
            this.drawer.horarios = [];
        }finally{
            this.drawer.carregandoHorarios = false;
        }
    },

    dataSelecionadaFormatada(){
        if(!this.drawer.data){
            return '';
        }
        return new Intl.DateTimeFormat('pt-BR', {
            day: '2-digit',
            month: 'long',
            year: 'numeric',
            timeZone: 'UTC',
        }).format(new Date(`${this.drawer.data}T00:00:00Z`));
    },

    proximaEtapa(){

        if(!this.podeAvancar()){
            return;
        }

        if(this.drawer.etapa < 4){
            this.drawer.etapa++;
        }

    },

    voltarEtapa(){

        if(this.drawer.etapa > 1){
            this.drawer.etapa--;
        }

    },

    podeAvancar(){

        switch(this.drawer.etapa){
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



    async confirmarAgendamento(){

        this.drawer.carregando = true;
                this.drawer.erro = null;

        try{
            const response = await fetch('/api/appointments', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content ?? '',
                },
                body: JSON.stringify({
                    service_id: this.drawer.servico.id,
                    date: this.drawer.data,
                    time: this.drawer.horario,
                    payment_method: this.drawer.pagamento,
                    customer_name: document.querySelector('meta[name="user-name"]')?.content || 'Cliente do site',
                    customer_email: document.querySelector('meta[name="user-email"]')?.content || null,
                }),
            });

            const payload = await response.json();

            if(!response.ok){
                throw new Error(payload?.message || payload?.errors?.time?.[0] || 'Não foi possível confirmar o agendamento.');
            }

            this.drawer.concluido = true;


        }catch(error){
            this.drawer.erro = error.message;
        }finally{
            this.drawer.carregando = false;
        }
    },

});