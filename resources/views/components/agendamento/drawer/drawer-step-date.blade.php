{{-- ===========================================================
| ETAPA 01
|--------------------------------------------------------------------------
| ESCOLHER DATA
|--------------------------------------------------------------------------
--}}

<div class="flex flex-col gap-8">

    {{-- =======================================================
        TÍTULO
    ======================================================== --}}

    <div>

        <h3 class="font-title text-3xl text-zinc-900">
            Escolha uma data
        </h3>

        <p class="mt-2 text-sm leading-6 text-zinc-500">
            Selecione o melhor dia para realizar seu atendimento.
        </p>

    </div>



    {{-- =======================================================
        MÊS
    ======================================================== --}}

    <div class="flex items-center justify-between">

        <button class="flex h-10 w-10 items-center justify-center rounded-full border border-zinc-200 text-zinc-500 transition-all duration-300 hover:border-orange-950 hover:text-orange-950">
            <x-fas-chevron-left class="w-5 h-5"/>
        </button>

        <h4 class="text-lg font-semibold text-zinc-900">
            Agosto 2026
        </h4>

        <button class="flex h-10 w-10 items-center justify-center rounded-full border border-zinc-200 text-zinc-500 transition-all duration-300 hover:border-orange-950 hover:text-orange-950">
            <x-fas-chevron-right class="w-5 h-5"/>
        </button>

    </div>



    {{-- =======================================================
        DIAS DA SEMANA
    ======================================================== --}}

    <div class="grid grid-cols-7 gap-2">

        @foreach (['Dom','Seg','Ter','Qua','Qui','Sex','Sáb'] as $dia)

            <div class="flex h-10 items-center justify-center text-xs font-semibold uppercase tracking-wider text-zinc-400">
                {{ $dia }}
            </div>

        @endforeach

    </div>



    {{-- =======================================================
        CALENDÁRIO
    ======================================================== --}}

    <div class="grid grid-cols-7 gap-2">

        {{-- Agosto/2026 começa no sábado --}}
        @for ($i = 0; $i < 6; $i++)
            <div class="aspect-square"></div>
        @endfor

        @for ($i = 1; $i <= 31; $i++)

            <div class="flex aspect-square items-center justify-center">

                <button

                    @click="drawer.data={{ $i }}"

                    class="flex h-9 w-9 items-center justify-center rounded-full text-sm font-medium transition-all duration-300"

                    :class="drawer.data=={{ $i }}
                        ? 'bg-orange-950 text-white shadow-md'
                        : 'text-zinc-700 hover:bg-rose-200 hover:text-orange-950'"

                >

                    {{ $i }}

                </button>

            </div>

        @endfor

    </div>



    {{-- =======================================================
        DATA ESCOLHIDA
    ======================================================== --}}

    <div
        x-show="drawer.data"
        x-transition
        class="rounded-xl  bg-zinc-200 p-5"
    >

        <p class="text-sm text-zinc-500">
            Data selecionada :
        </p>

        <p class="mt-2 text-xl  font-semibold">
            Dia
            <span x-text="drawer.data"></span>
            de Agosto
        </p>

    </div>

</div>