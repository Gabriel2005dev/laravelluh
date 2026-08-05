{{-- =========================================================
FLOATING CATEGORY MENU COMPONENT
========================================================= --}}

<div class="fixed inset-x-0 top-16 z-50 pointer-events-none sm:top-20">

<div class="mx-auto flex max-w-7xl justify-end px-6 py-3">

    <div @click.outside="active = null" class="pointer-events-auto flex items-center gap-3 rounded-full border border-zinc-300 bg-white p-1.5 shadow-sm backdrop-blur-xl">

        @php

        $categories = [

            [
                'id' => 'cabelo',
                'icon' => 'cabelo.svg',
                'name' => 'cabelo',

                'items' => [

                   
                    [
                        'id' => 'cabelo-hidratacao',
                        'name' => 'cabelo-hidratação',
                        'icon' => 'cabelo-hidratacao.svg'
                    ],

                      [
                        'id' => 'cabelo-alisamento',
                        'name' => 'cabelo-alisamento',
                        'icon' => 'cabelo-alisamento.svg'
                    ],

                    [
                        'id' => 'cabelo-coloracao',
                        'name' => 'cabelo-coloracao',
                        'icon' => 'cabelo-coloracao.svg'
                    ],

                    [
                        'id' => 'cabelo-finalizacao',
                        'name' => 'cabelo-finalização',
                        'icon' => 'cabelo-finalizacao.svg'
                    ],



                ]

            ],

            [
                'id' => 'unha',
                'icon' => 'unha.svg',
                'name' => 'unha',

                'items' => [

                    [
                        'id' => 'unha-manicure',
                        'name' => 'unha-manicure',
                        'icon' => 'unha-manicure.svg'
                    ],

                    [
                        'id' => 'unha-alongamento',
                        'name' => 'unha-alongamento',
                        'icon' => 'unha-alongamento.svg'
                    ],

                    [
                        'id' => 'unha-extras',
                        'name' => 'unha-extras',
                        'icon' => 'unha-extras.svg'
                    ]

                ]

            ],


        ];

        @endphp


        @foreach($categories as $category)

            <div class="relative">


                {{-- =====================================================
                    CATEGORIA PRINCIPAL
                ====================================================== --}}

                <button @click="active === '{{ $category['id'] }}' ? active = null : active = '{{ $category['id'] }}'" class="group flex h-8 w-8 items-center justify-center rounded-full transition-all duration-400 ease-out hover:scale-[1.04] hover:bg-rose-200 sm:h-9 sm:w-9 lg:h-10 lg:w-10">

                    <img src="{{ asset('images/icons/icons-category/'.$category['icon']) }}" alt="{{ $category['name'] }}" class="h-5 w-5  object-contain transition-transform duration-500 ease-out will-change-transform  sm:h-5 sm:w-5">

                </button>


                {{-- =====================================================
                    SUBMENU
                ====================================================== --}}

                <div x-show="active === '{{ $category['id'] }}'" x-cloak x-transition:enter="transition ease-out duration-400" x-transition:enter-start="opacity-0 -translate-y-2 scale-90" x-transition:enter-end="opacity-100 translate-y-0 scale-100" x-transition:leave="transition ease-in duration-250" x-transition:leave-start="opacity-100 translate-y-0 scale-100" x-transition:leave-end="opacity-0 -translate-y-1 scale-95" class="absolute left-1/2 top-12 -translate-x-1/2 transform will-change-transform sm:top-14">


                    <div class="flex flex-col items-center gap-3 rounded-full border border-zinc-300 bg-white p-1.5 shadow-lg">


                        @foreach($category['items'] as $item)

                            <button @click="categoriaSelecionada='{{ $category['id'] }}'; subcategoriaSelecionada='{{ $item['id'] }}'; active=null;" class="group flex h-8 w-8 items-center justify-center rounded-full transition-all duration-400 ease-out hover:scale-[1.04] hover:bg-rose-200  sm:h-9 sm:w-9 lg:h-10 lg:w-10">


                                <img src="{{ asset('images/icons/icons-subcategory/'.$item['icon']) }}" alt="{{ $item['name'] }}" class="h-5 w-5 object-contain transition-transform duration-500 ease-out will-change-transform group-hover:scale-[1.08] sm:h-5 sm:w-5">


                            </button>

                        @endforeach


                    </div>


                </div>


            </div>

        @endforeach


    </div>

</div>

</div>
