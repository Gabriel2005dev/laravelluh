<section
    class="relative overflow-hidden

    before:pointer-events-none
    before:absolute
    before:inset-x-0
    before:top-0
    before:z-10
    before:h-24
    before:bg-gradient-to-b
    before:from-white
    before:to-transparent
    before:content-['']

    after:pointer-events-none
    after:absolute
    after:inset-x-0
    after:bottom-0
    after:z-10
    after:h-24
    after:bg-gradient-to-t
    after:from-white
    after:to-transparent
    after:content-['']">

    {{-- Mancha de fundo --}}
    <div
        class="absolute left-1/2 top-1/2 -z-10 h-[800px] w-[800px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-rose-400/40 blur-[100px]">
    </div>

    <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-16 lg:grid-cols-2">

        {{-- Texto --}}
        <div>

            <span class="font-semibold text-rose-500">
                ✨ Seu novo visual começa aqui
            </span>

            <h1 class="mt-4 text-6xl font-bold leading-tight">
                Beleza, autoestima e cuidado em um só lugar.
            </h1>

            <p class="mt-6 max-w-lg text-lg text-zinc-600">
                Agende seu horário de forma rápida e transforme sua experiência.
            </p>

            <div class="mt-8 flex gap-4">

                <a href="#" class="rounded-xl bg-rose-500 px-6 py-4 text-white transition hover:bg-rose-600">
                    Agendar
                </a>

                <a href="#" class="rounded-xl border border-zinc-300 px-6 py-4 transition hover:border-zinc-900">
                    Serviços
                </a>

            </div>

        </div>

        {{-- Imagem --}}
        <div
            class="relative flex h-[700px] items-center justify-center

            after:pointer-events-none
            after:absolute
            after:inset-y-0
            after:right-0
            after:w-40
            after:bg-gradient-to-l
            after:from-white
            after:via-white/80
            after:to-transparent
            after:content-['']">

            <img
                src="{{ asset('images/home/hero.png') }}"
                alt="Hero"
                class="h-full max-w-none">

        </div>

    </div>

</section>