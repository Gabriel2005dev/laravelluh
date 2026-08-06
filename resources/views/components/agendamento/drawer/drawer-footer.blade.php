{{-- ===========================================================
| FOOTER DRAWER
|--------------------------------------------------------------------------
| Responsável pela navegação entre as etapas.
|--------------------------------------------------------------------------
| • Voltar
| • Continuar
| • Confirmar
|--------------------------------------------------------------------------
--}}

<footer

class="
sticky
bottom-0
border-t
border-zinc-200
bg-white
px-6
py-5
"

>

<div x-show="drawer.erro" x-transition class="mb-4 rounded-2xl bg-rose-50 px-4 py-3 text-sm font-semibold text-rose-700" x-text="drawer.erro"></div>


    <div

    class="
    flex
    items-center
    justify-between
    gap-4
    "

    >


        {{-- ===================================================
            BOTÃO VOLTAR
        ==================================================== --}}

        <button

        x-show="drawer.etapa > 1"

        @click="voltarEtapa()"

        class="
        flex
        items-center
        justify-center
        rounded-full
        border
        border-zinc-300
        px-6
        py-3
        text-sm
        font-semibold
        text-zinc-700
        transition-all
        duration-300
        hover:border-orange-950
        hover:bg-orange-950
        hover:text-white
        "

        >

            Voltar

        </button>



        {{-- ===================================================
            ESPAÇADOR
        ==================================================== --}}

        <div

        x-show="drawer.etapa===1"

        class="
        flex-1
        "

        ></div>



        {{-- ===================================================
            CONTINUAR
        ==================================================== --}}

        <button

        x-show="drawer.etapa < 4"

        @click="proximaEtapa()"

        :disabled="

            (drawer.etapa===1 && !drawer.data)

            ||

            (drawer.etapa===2 && !drawer.horario)

            ||

            (drawer.etapa===3 && !drawer.pagamento)

        "

        class="
        inline-flex
        items-center
        justify-center
        rounded-full
        bg-orange-950
        px-8
        py-3
        text-sm
        font-semibold
        text-white
        transition-all
        duration-300
        "

        :class="

            (drawer.etapa===1 && !drawer.data)

            ||

            (drawer.etapa===2 && !drawer.horario)

            ||

            (drawer.etapa===3 && !drawer.pagamento)

            ?

            'cursor-not-allowed opacity-40'

            :

            'hover:scale-[1.02] hover:bg-orange-900'

        "

        >

            Continuar

        </button>



        {{-- ===================================================
            CONFIRMAR
        ==================================================== --}}

        <button

        x-show="drawer.etapa===4"

        @click="confirmarAgendamento()"

        class="
        inline-flex
        items-center
        justify-center
        rounded-full
        bg-green-600
        px-8
        py-3
        text-sm
        font-semibold
        text-white
        transition-all
        duration-300
        hover:scale-[1.02]
        hover:bg-green-700
        "

        >

            Confirmar Agendamento

        </button>

    </div>

</footer>