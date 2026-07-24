{{-- Hero Principal --}}

<section class="relative">

    {{-- Área da Hero --}}
    <div class="relative isolate min-h-[680px] overflow-visible sm:min-h-[700px] lg:min-h-[850px]">

        {{-- Imagem de fundo --}}
        <div class="absolute inset-0 -z-20">

            <img
                src="{{ asset('images/home/image.png') }}"
                alt="Profissional realizando procedimento de beleza"
                class="h-full w-full object-cover object-[90%_center] sm:object-[85%_center] md:object-[80%_center] lg:object-center"
            />

        </div>


        {{-- Overlay Desktop --}}
        <div class="absolute inset-0 -z-10 hidden bg-gradient-to-r from-zinc-950 via-zinc-950/90 to-zinc-950/10 lg:block"></div>


        {{-- Overlay Tablet --}}
        <div class="absolute inset-0 -z-10 hidden bg-zinc-950/45 sm:block lg:hidden"></div>


        {{-- Overlay Mobile --}}
        <div class="absolute inset-0 -z-10 bg-zinc-950/40 sm:hidden"></div>


        {{-- Gradiente adicional Mobile --}}
        <div class="absolute inset-0 -z-10 bg-gradient-to-r from-zinc-950/55 via-zinc-950/35 to-transparent sm:hidden"></div>


        {{-- Gradiente inferior --}}
        <div class="pointer-events-none absolute inset-x-0 bottom-0 z-10 h-32 bg-gradient-to-t from-zinc-950/40 to-transparent"></div>


        {{-- Decoração --}}
        <div class="pointer-events-none absolute -right-32 -top-32 -z-10 h-96 w-96 rounded-full bg-orange-400/10 blur-3xl sm:-right-20 sm:-top-20"></div>


        {{-- Conteúdo da Hero --}}
        <div class="relative z-20 mx-auto flex min-h-[680px] w-full max-w-7xl items-center py-20 sm:min-h-[700px]  sm:py-24 lg:min-h-[850px] lg:py-28">

            {{-- Conteúdo da Hero --}}
            <div class="flex w-full max-w-xl flex-col items-start sm:max-w-2xl">

                {{-- Badge --}}
                <div class="fuzzy-bubbles-bold mb-5 inline-flex items-center gap-2 text-sm font-semibold tracking-wide text-orange-300 sm:mb-6 sm:text-base">

                    <x-lucide-sparkles class="h-4 w-4 shrink-0 stroke-[1.8] sm:h-5 sm:w-5" />

                    <span>
                        Studio de Beleza Premium
                    </span>

                </div>


                {{-- Título --}}
                <h1 class="max-w-2xl text-4xl font-semibold leading-[1.08] tracking-[-0.035em] text-white sm:text-5xl md:text-6xl lg:text-[4.25rem] xl:text-[4.5rem]">

                    Beleza que

                    <span class="font-serif font-normal italic text-rose-300">
                        valoriza
                    </span>

                    você.

                </h1>


                {{-- Descrição --}}
                <p class="mt-6 max-w-lg text-sm leading-7 text-zinc-200 sm:mt-7 sm:text-base sm:leading-8 lg:text-lg">

                    Um espaço pensado para você desacelerar, cuidar de si
                    e realçar a sua beleza através de experiências únicas
                    de cuidado e bem-estar.

                </p>


                {{-- Botão --}}
                <div class="mt-8 flex w-full flex-col items-stretch gap-4 sm:mt-9 sm:w-auto sm:flex-row sm:items-center">

                    <button
                        type="button"
                        class="fuzzy-bubbles-bold group inline-flex w-full items-center justify-center gap-3  bg-white px-4 py-2.5 text-md font-semibold shadow-lg shadow-orange-950/20 transition-all duration-300 hover:shadow-xl hover:shadow-orange-950/30 focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-400 focus-visible:ring-offset-2 focus-visible:ring-offset-zinc-950 active:scale-[0.98] sm:w-auto"
                    >

                        <span>
                            Agendar agora
                        </span>

                        <x-lucide-arrow-right class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" />

                    </button>

                </div>

            </div>

        </div>


        {{-- Card de Serviços --}}
        <div class="absolute bottom-0 left-1/2 z-30 w-[calc(100%-1rem)] max-w-7xl -translate-x-1/2 translate-y-1/2 sm:w-[calc(100%-2rem)] lg:w-[calc(100%-5rem)]">

            <div class="bg-white p-1 shadow-2xl shadow-zinc-950/20 backdrop-blur-xl sm:p-2 lg:p-3">

                <div class="grid grid-cols-4">


                    {{-- Serviço 1 --}}
                    <div class="group flex min-w-0 flex-col items-center justify-center px-1 py-2 text-center transition-all duration-300 hover:bg-rose-50/60 sm:px-3 sm:py-3 lg:px-5 lg:py-4">

                        <div class="flex h-6 w-6 shrink-0 items-center justify-center sm:h-8 sm:w-8 lg:h-10 lg:w-10">

                            <img
                                src="{{ asset('images/icons/manicure.png') }}"
                                alt="Manicure e Pedicure"
                                class="h-full w-full object-contain transition-transform duration-300 group-hover:scale-110"
                            />

                        </div>

                        <div class="mt-1 min-w-0 sm:mt-2">

                            <h3 class="fuzzy-bubbles-bold text-[8px] font-semibold leading-tight text-zinc-900 sm:text-xs lg:text-lg">
                                Manicure & Pedicure
                            </h3>

                            <p class="mt-1 hidden text-xs leading-tight text-zinc-500 lg:block">
                                Cuidado para suas unhas
                            </p>

                        </div>

                    </div>


                    {{-- Serviço 2 --}}
                    <div class="group flex min-w-0 flex-col items-center justify-center px-1 py-2 text-center transition-all duration-300 hover:bg-orange-50/60 sm:px-3 sm:py-3 lg:px-5 lg:py-4">

                        <div class="flex h-6 w-6 shrink-0 items-center justify-center sm:h-8 sm:w-8 lg:h-10 lg:w-10">

                            <img
                                src="{{ asset('images/icons/corte.png') }}"
                                alt="Cabelos"
                                class="h-full w-full object-contain transition-transform duration-300 group-hover:scale-110"
                            />

                        </div>

                        <div class="mt-1 min-w-0 sm:mt-2">

                            <h3 class=" fuzzy-bubbles-bold text-[8px] font-semibold leading-tight text-zinc-900 sm:text-xs lg:text-lg">
                                Cabelos
                            </h3>

                            <p class="mt-1 hidden text-xs leading-tight text-zinc-500 lg:block">
                                Beleza e transformação
                            </p>

                        </div>

                    </div>


                    {{-- Serviço 3 --}}
                    <div class="group flex min-w-0 flex-col items-center justify-center px-1 py-2 text-center transition-all duration-300 hover:bg-rose-50/60 sm:px-3 sm:py-3 lg:px-5 lg:py-4">

                        <div class="flex h-6 w-6 shrink-0 items-center justify-center sm:h-8 sm:w-8 lg:h-10 lg:w-10">

                            <img
                                src="{{ asset('images/icons/sobrancelhas.png') }}"
                                alt="Sobrancelhas"
                                class="h-full w-full object-contain transition-transform duration-300 group-hover:scale-110"
                            />

                        </div>

                        <div class="mt-1 min-w-0 sm:mt-2">

                            <h3 class="fuzzy-bubbles-bold text-[8px] font-semibold leading-tight text-zinc-900 sm:text-xs lg:text-lg">
                                Sobrancelhas
                            </h3>

                            <p class="mt-1 hidden text-xs leading-tight text-zinc-500 lg:block">
                                Realce sua beleza
                            </p>

                        </div>

                    </div>


                    {{-- Serviço 4 --}}
                    <div class="group flex min-w-0 flex-col items-center justify-center px-1 py-2 text-center transition-all duration-300 hover:bg-pink-50/60 sm:px-3 sm:py-3 lg:px-5 lg:py-4">

                        <div class="flex h-6 w-6 shrink-0 items-center justify-center sm:h-8 sm:w-8 lg:h-10 lg:w-10">

                            <img
                                src="{{ asset('images/icons/rosto.png') }}"
                                alt="Estética Facial"
                                class="h-full w-full object-contain transition-transform duration-300 group-hover:scale-110"
                            />

                        </div>

                        <div class="mt-1 min-w-0 sm:mt-2">

                            <h3 class=" fuzzy-bubbles-bold text-[8px] font-semibold leading-tight text-zinc-900 sm:text-xs lg:text-lg">
                                Estética Facial
                            </h3>

                            <p class="mt-1 hidden text-xs leading-tight text-zinc-500 lg:block">
                                Cuidado e bem-estar
                            </p>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>


    {{-- Espaço reservado para o card ultrapassar a Hero --}}
    <div class="h-14 sm:h-16 lg:h-20"></div>


</section>