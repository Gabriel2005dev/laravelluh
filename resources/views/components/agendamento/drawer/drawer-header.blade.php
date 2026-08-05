{{-- ===========================================================
| HEADER DRAWER
|--------------------------------------------------------------------------
| Exibe:
| • Botão fechar
| • Nome do serviço
| • Subtítulo da etapa atual
|--------------------------------------------------------------------------
--}}

<header

class="
sticky
top-0
z-20
border-b
border-zinc-200
bg-white
px-6
py-5
"

>

    {{-- =======================================================
        TOPO
    ======================================================== --}}

    <div

    class="
    flex
    items-start
    justify-between
    gap-4
    "

    >

        {{-- ==============================================
            TÍTULO
        =============================================== --}}

        <div>

            <p

            class="
            text-xs
            font-semibold
            uppercase
            tracking-[0.25em]
            text-orange-700
            "

            >

                Agendamento

            </p>


            {{-- ==========================================
                NOME DO SERVIÇO
            =========================================== --}}

            <h2

            class="
            mt-2
            font-title
            text-3xl
            leading-tight
            text-zinc-900
            "

            x-text="drawer.servico?.name"

            >

            </h2>

        </div>



        {{-- ==============================================
            BOTÃO FECHAR
        =============================================== --}}

        <button

        @click="fecharDrawer()"

        class="
        flex
        h-11
        w-11
        items-center
        justify-center
        rounded-full
        border
        border-zinc-200
        text-zinc-500
        transition-all
        duration-300
        hover:border-orange-950
        hover:bg-orange-950
        hover:text-white
        "

        >

            <svg

            xmlns="http://www.w3.org/2000/svg"

            fill="none"

            viewBox="0 0 24 24"

            stroke-width="1.8"

            stroke="currentColor"

            class="
            h-5
            w-5
            "

            >

                <path

                stroke-linecap="round"

                stroke-linejoin="round"

                d="M6 18L18 6M6 6l12 12"

                />

            </svg>

        </button>

    </div>



    {{-- =======================================================
        SUBTÍTULO
    ======================================================== --}}

    <p

    class="
    mt-5
    text-sm
    leading-6
    text-zinc-500
    "

    >

        <span x-show="drawer.etapa===1">

            Escolha uma data disponível para realizar seu atendimento.

        </span>

        <span x-show="drawer.etapa===2">

            Agora selecione o melhor horário disponível.

        </span>

        <span x-show="drawer.etapa===3">

            Escolha a forma de pagamento.

        </span>

        <span x-show="drawer.etapa===4">

            Confira todas as informações antes de confirmar.

        </span>

    </p>

</header>