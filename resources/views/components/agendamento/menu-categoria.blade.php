{{-- =========================================================
FLOATING CATEGORY MENU COMPONENT
========================================================= --}}

<div class="fixed inset-x-0 top-16 z-50 pointer-events-none sm:top-20">

<div class="mx-auto flex max-w-7xl justify-end px-6 py-3">

    <div x-data="{ active: null }" @click.outside="active = null" class="pointer-events-auto flex items-center gap-3 rounded-full border border-zinc-300 bg-white p-1.5 shadow-sm backdrop-blur-xl">

        @php

        $categories = [

            [
                'id' => 'hair',
                'icon' => 'cabelo.svg',
                'name' => 'Cabelo',

                'items' => [

                    [
                        'id' => 'hair-cut',
                        'name' => 'Corte',
                        'icon' => 'cabelo-corte.svg'
                    ],

                    [
                        'id' => 'hair-brush',
                        'name' => 'Escova',
                        'icon' => 'cabelo-prancha.svg'
                    ]

                ]

            ],

            [
                'id' => 'eyes',
                'icon' => 'olho.svg',
                'name' => 'Olhos',

                'items' => [

                    [
                        'id' => 'eyelashes',
                        'name' => 'Cílios',
                        'icon' => 'olho-cilios.svg'
                    ],

                    [
                        'id' => 'eyebrow',
                        'name' => 'Sobrancelha',
                        'icon' => 'olho-sobrancelha.svg'
                    ]

                ]

            ],

            [
                'id' => 'nails',
                'icon' => 'unha.svg',
                'name' => 'Unhas',

                'items' => [

                    [
                        'id' => 'nails-polish',
                        'name' => 'Esmaltação',
                        'icon' => 'unha-esmalte.svg'
                    ]

                ]

            ],

            [
                'id' => 'makeup',
                'icon' => 'makeup-brush.svg',
                'name' => 'Maquiagem',

                'items' => [

                    [
                        'id' => 'make-social',
                        'name' => 'Social',
                        'icon' => 'makeup-brush.svg'
                    ]

                ]

            ]

        ];

        @endphp


        @foreach($categories as $category)

            <div class="relative">


                {{-- =====================================================
                    CATEGORIA PRINCIPAL
                ====================================================== --}}

                <button @click="active === '{{ $category['id'] }}' ? active = null : active = '{{ $category['id'] }}'" class="group flex h-8 w-8 items-center justify-center rounded-full transition-all duration-400 ease-out hover:scale-[1.04] hover:bg-rose-400 sm:h-9 sm:w-9 lg:h-10 lg:w-10">

                    <img src="{{ asset('images/icons/'.$category['icon']) }}" alt="{{ $category['name'] }}" class="h-5 w-5  object-contain transition-transform duration-500 ease-out will-change-transform  sm:h-5 sm:w-5">

                </button>


                {{-- =====================================================
                    SUBMENU
                ====================================================== --}}

                <div x-show="active === '{{ $category['id'] }}'" x-cloak x-transition:enter="transition ease-out duration-400" x-transition:enter-start="opacity-0 -translate-y-2 scale-90" x-transition:enter-end="opacity-100 translate-y-0 scale-100" x-transition:leave="transition ease-in duration-250" x-transition:leave-start="opacity-100 translate-y-0 scale-100" x-transition:leave-end="opacity-0 -translate-y-1 scale-95" class="absolute left-1/2 top-12 -translate-x-1/2 transform will-change-transform sm:top-14">


                    <div class="flex flex-col items-center gap-3 rounded-full border border-zinc-300 bg-white p-1.5 shadow-lg">


                        @foreach($category['items'] as $item)

                            <button @click="categoriaSelecionada='{{ $category['id'] }}'; subcategoriaSelecionada='{{ $item['id'] }}'; active=null;" class="group flex h-8 w-8 items-center justify-center rounded-full transition-all duration-400 ease-out hover:scale-[1.04] hover:bg-rose-400  sm:h-9 sm:w-9 lg:h-10 lg:w-10">


                                <img src="{{ asset('images/icons/'.$item['icon']) }}" alt="{{ $item['name'] }}" class="h-5 w-5 object-contain transition-transform duration-500 ease-out will-change-transform group-hover:scale-[1.08] sm:h-5 sm:w-5">


                            </button>

                        @endforeach


                    </div>


                </div>


            </div>

        @endforeach


    </div>

</div>

</div>
