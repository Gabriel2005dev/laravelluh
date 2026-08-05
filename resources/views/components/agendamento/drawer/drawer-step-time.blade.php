{{-- ===========================================================
| ETAPA 02
|--------------------------------------------------------------------------
| ESCOLHER HORÁRIO
|--------------------------------------------------------------------------
| Futuramente:
| • Horários serão carregados conforme a data escolhida
| • Horários ocupados ficarão desabilitados
| • Atualização automática via AJAX/Livewire
|--------------------------------------------------------------------------
--}}

@php

$horarios = [
    '08:00','08:30','09:00','09:30',
    '10:00','10:30','11:00','11:30',
    '13:00','13:30','14:00','14:30',
    '15:00','15:30','16:00','16:30',
    '17:00','17:30',
];

@endphp

<div class="flex flex-col gap-8">

    {{-- =======================================================
        TÍTULO
    ======================================================== --}}

    <div>

        <h3 class="font-title text-3xl text-zinc-900">
            Escolha um horário
        </h3>

        <p class="mt-2 text-sm leading-6 text-zinc-500">
            Agora selecione um horário disponível.
        </p>

    </div>



    {{-- =======================================================
        DATA + HORÁRIO SELECIONADOS
    ======================================================== --}}

    <div class="rounded-3xl">

    <h4 class="mt-2 text-lg font-semibold leading-relaxed text-orange-950">

        Dia
        <span x-text="drawer.data"></span>
        de Agosto
        às

        <span
            x-show="drawer.horario"
            x-transition.opacity
            class="font-bold"
            x-text="drawer.horario"
        ></span>

        <span
            x-show="!drawer.horario"
            x-transition.opacity
            class="italic text-rose-400"
        >
            selecione um horário
        </span>

    </h4>

</div>



    {{-- =======================================================
        HORÁRIOS
    ======================================================== --}}

    <div class="grid grid-cols-5 gap-4">

        @foreach($horarios as $horario)

            <button
                @click="drawer.horario='{{ $horario }}'"
                class="rounded-full border border-zinc-200 px-4 py-2 text-center text-sm font-semibold transition-all duration-300"
                :class="drawer.horario=='{{ $horario }}'
                    ? 'border-orange-950 bg-orange-950 text-white'
                    : 'bg-white text-zinc-700 hover:border-orange-950 hover:text-orange-950'"
            >
                {{ $horario }}
            </button>

        @endforeach

    </div>

</div>