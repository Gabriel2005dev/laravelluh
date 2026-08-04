<div
    class="
        relative
        mt-10
        overflow-visible
        rounded-3xl
        bg-white
        transition-all
        duration-300
    "
>

@php

    /*
    |--------------------------------------------------------------------------
    | ÍCONES DAS SUBCATEGORIAS
    |--------------------------------------------------------------------------
    |
    | O ícone é definido automaticamente de acordo com a subcategoria
    | recebida pelo serviço.
    |
    */

    $subcategoryIcons = [

        'hair-cut' => 'cabelo-corte.svg',

        'hair-brush' => 'cabelo-prancha.svg',

        'eyelashes' => 'olho-cilios.svg',

        'eyebrow' => 'olho-sobrancelha.svg',

        'nails-polish' => 'unha-esmalte.svg',

        'make-social' => 'makeup-brush.svg',

    ];

    $serviceIcon = $subcategoryIcons[$service['subcategory']] ?? null;

@endphp


{{-- =====================================================
    ÍCONE DA SUBCATEGORIA
====================================================== --}}

<div
    class="
        absolute
        left-1/2
        top-0
        z-20
        flex
        h-16
        w-16
        -translate-x-1/2
        -translate-y-1/2
        items-center
        justify-center
        rounded-full

        bg-white
    "
>

    @if($serviceIcon)

        <img
            src="{{ asset('images/icons/' . $serviceIcon) }}"
            alt="Ícone de {{ $service['name'] }}"
            class="
                h-8
                w-8
                object-contain
            "
        >

    @endif

</div>


{{-- =====================================================
    CONTEÚDO PRINCIPAL DO CARD
====================================================== --}}

<div class="grid grid-cols-2 gap-3">


    {{-- =====================================================
        IMAGEM
    ====================================================== --}}

    <div
        class="
            h-90
            overflow-hidden
            rounded-3xl
            border
            border-rose-200
            bg-rose-200
        "
    >

        <img
            src="{{ asset('images/home/bannerhero.png') }}"
            alt="{{ $service['name'] }}"
            class="
                h-full
                w-full
                rounded-l-3xl
                object-cover
            "
        >

    </div>


    {{-- =====================================================
        CONTEÚDO
    ====================================================== --}}

    <div class="rounded-3xl bg-zinc-100">

        <div class="flex h-full flex-col p-4">


            {{-- =====================================================
                CABEÇALHO
            ====================================================== --}}

            <div class="flex items-center justify-end gap-4">

                {{-- Duração --}}

                <span
                    class="
                        shrink-0
                        rounded-full
                        border
                        border-zinc-300
                        px-2
                        py-1
                        text-sm
                        font-medium
                        text-zinc-500
                    "
                >
                    {{ $service['time'] }}
                </span>

            </div>


            {{-- =====================================================
                CONTEÚDO
            ====================================================== --}}

            <div class="mt-6">

                {{-- Título --}}

                <h4
                    class="
                        font-title
                        text-3xl
                        font-semibold
                        leading-tight
                        text-zinc-900
                    "
                >
                    {{ $service['name'] }}
                </h4>


                {{-- Descrição --}}

                <p
                    class="
                        mt-2
                        text-sm
                        leading-6
                        text-zinc-600
                    "
                >
                    {{ $service['description'] }}
                </p>

            </div>


            {{-- =====================================================
                RODAPÉ
            ====================================================== --}}

            <div
                class="
                    mt-auto
                    flex
                    items-end
                    justify-between
                    gap-4
                    pt-8
                "
            >

                {{-- =================================================
                    BOTÃO AGENDAR
                ================================================== --}}

                <a
                    @click="servicoSelecionado = {{ Js::from($service) }}"
                    class="
                        group
                        inline-flex
                        items-center
                        justify-center
                        rounded-full
                        border-2
                        border-orange-950
                        bg-orange-950
                        px-6
                        py-2
                        text-xs
                        font-semibold
                        text-white
                        transition-all
                        duration-300
                    "
                >

                    <span
                        class="
                            transition-transform
                            duration-300
                            group-hover:-translate-y-1
                        "
                    >
                        Agendar agora
                    </span>

                </a>


                {{-- =================================================
                    PREÇO
                ================================================== --}}

                <span
                    class="
                        flex
                        flex-col
                        items-center
                        justify-center
                        font-bold
                        text-orange-950
                    "
                >

                    <span class="text-2xl">
                        R$
                    </span>

                    <span class="text-2xl">
                        {{ str_replace('R$', '', $service['price']) }}
                    </span>

                </span>

            </div>

        </div>

    </div>

</div>

</div>
