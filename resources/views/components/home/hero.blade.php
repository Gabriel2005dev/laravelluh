<section class="relative overflow-hidden">

    {{-- Fade superior --}}
    <div class="pointer-events-none absolute inset-x-0 top-0 z-20 h-24 bg-gradient-to-b from-white to-transparent md:h-24 lg:h-32"></div>

    {{-- Fade inferior --}}
    <div class="pointer-events-none absolute inset-x-0 bottom-0 z-20 h-24 bg-gradient-to-t from-white to-transparent md:h-24 lg:h-32"></div>

    {{-- Mancha de fundo --}}
    <div class="absolute left-1/2 top-1/2 -z-10 h-[320px] w-[320px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-rose-500/50 blur-[120px] md:h-[420px] md:w-[420px] lg:h-[500px] lg:w-[500px] lg:blur-[150px]"></div>

    {{-- Grid principal --}}
    <div class="relative z-10 mx-auto grid max-w-7xl grid-cols-1 items-center gap-10 px-6 py-12 sm:py-12 md:gap-14 lg:grid-cols-2 lg:gap-0 lg:py-6">

        {{-- Texto --}}
        <div class="mx-auto max-w-xl text-center lg:mx-0 lg:text-left">

            <h1 class="font-title text-4xl font-bold leading-[0.92] tracking-[-0.04em] text-zinc-900 sm:text-5xl md:text-6xl lg:text-7xl">
                Realce a sua beleza<br>
                e autoestima com mais
                confiança.
            </h1>

            <p class="font-body mx-auto mt-6 max-w-md text-sm leading-7 text-zinc-700 md:mt-8 md:text-base md:leading-8 lg:mx-0">
                Agende seu horário e descubra uma experiência exclusiva, criada para realçar sua beleza, renovar sua autoestima e fazer você se sentir ainda mais confiante, elegante e incrível em cada momento.
            </p>

            {{-- Botões --}}
            <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:justify-center md:mt-10 lg:justify-start">

                {{-- Botão principal --}}
                <a href="#" class="group inline-flex w-full items-center justify-center rounded-full border border-orange-950 bg-orange-950 px-7 py-3 font-body text-sm font-semibold text-white transition-all duration-300 sm:w-auto">
                    <span class="transition-transform duration-300 group-hover:-translate-y-1">
                        Explore nossos serviços
                    </span>
                </a>

                {{-- Botão secundário --}}
                <a href="#" class="group inline-flex w-full items-center justify-center rounded-full border-2 border-orange-950 px-7 py-3 font-body text-sm font-semibold text-orange-950 transition-all duration-300 hover:border-zinc-900 sm:w-auto">
                    <span class="transition-transform duration-300 group-hover:-translate-y-1">
                        Veja o nosso trabalho
                    </span>
                </a>

            </div>

        </div>

        {{-- Imagem --}}
        <div class="relative z-50 -mx-6 flex h-[420px] items-end justify-center sm:h-[500px] md:-mx-8 md:h-[560px] lg:mx-0 lg:h-[700px]">

            <img
                src="{{ asset('images/home/ChatGPT Image 28 de jul. de 2026, 12_03_02.png') }}"
                alt="Hero"
                class="h-full w-auto max-w-none object-contain object-bottom"
            >

        </div>

    </div>

</section>