export default () => ({


    /* ==========================================================
        DRAWER
    ========================================================== */


    drawer:{


        aberto:false,


        etapa:1,


        servico:null,


        data:null,


        horario:null,


        pagamento:null,


        carregando:false,


        concluido:false,


    },





    /* ==========================================================
        ABRIR DRAWER
    ========================================================== */


    abrirDrawer(servico){


        this.drawer.servico = servico;


        this.drawer.aberto = true;


        document.body.classList.add('overflow-hidden');


    },





    /* ==========================================================
        FECHAR DRAWER
    ========================================================== */


    fecharDrawer(){


        this.drawer.aberto = false;


        document.body.classList.remove('overflow-hidden');


    },





    /* ==========================================================
        RESET
    ========================================================== */


    resetDrawer(){


        this.drawer = {


            aberto:false,


            etapa:1,


            servico:null,


            data:null,


            horario:null,


            pagamento:null,


            carregando:false,


            concluido:false,


        };


    },





    /* ==========================================================
        ETAPAS
    ========================================================== */


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





    /* ==========================================================
        VALIDAÇÃO
    ========================================================== */


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





    /* ==========================================================
        CONFIRMAÇÃO
    ========================================================== */


    confirmarAgendamento(){


        this.drawer.carregando = true;



        console.log({


            servico:this.drawer.servico,


            data:this.drawer.data,


            horario:this.drawer.horario,


            pagamento:this.drawer.pagamento,


        });



        setTimeout(()=>{


            this.drawer.carregando = false;


            this.drawer.concluido = true;



        },800);


    },


});