<section
    class="relative overflow-hidden

    before:pointer-events-none
    before:absolute
    before:inset-x-0
    before:top-0
    before:z-10
    before:h-16
    before:bg-gradient-to-b
    before:from-white
    before:to-transparent
    before:content-['']

    after:pointer-events-none
    after:absolute
    after:inset-x-0
    after:bottom-0
    after:z-10
    after:h-16
    after:bg-gradient-to-t
    after:from-white
    after:to-transparent
    after:content-['']">


    {{-- Mancha de fundo --}}
    <div
        class="absolute left-1/2 top-1/2 -z-10
        h-[320px] w-[320px]
        md:h-[420px] md:w-[420px]
        lg:h-[500px] lg:w-[500px]
        -translate-x-1/2 -translate-y-1/2
        rounded-full
        bg-rose-500/50
        blur-[120px]
        lg:blur-[150px]">
    </div>


    <div
        class="mx-auto
        max-w-7xl
        grid
        grid-cols-1
        lg:grid-cols-2
        items-center

        gap-10
        md:gap-14
        lg:gap-16

        px-6
        md:px-8
        lg:px-0

        py-10
        md:py-14
        lg:py-0">


        {{-- Texto --}}
        <div
            class="max-w-xl
            mx-auto
            lg:mx-0
            text-center
            lg:text-left">


            <h1
                class="font-black
                leading-[0.92]
                tracking-[-0.05em]
                text-zinc-900

                text-4xl
                sm:text-5xl
                md:text-6xl
                lg:text-7xl">

                Realce a sua beleza<br>
                e autoestima com mais
                <span class="font-serif font-normal italic">
                    confiança.
                </span>

            </h1>


            <p
                class="mt-6
                md:mt-8

                max-w-md
                mx-auto
                lg:mx-0

                text-sm
                md:text-base

                leading-7
                md:leading-8

                text-zinc-700">

                Agende seu horário e descubra uma experiência exclusiva,
                criada para realçar sua beleza, renovar sua autoestima
                e fazer você se sentir ainda mais confiante, elegante
                e incrível em cada momento.

            </p>


            <div
                class="mt-8
                md:mt-10

                flex
                flex-col
                sm:flex-row

                gap-4">


                <a href="#"
                    class="group inline-flex
                    w-full sm:w-auto

                    items-center
                    justify-center

                    gap-2

                    rounded-full
                    border-2
                    border-orange-950

                    bg-orange-950

                    px-7
                    py-3

                    text-sm
                    font-semibold

                    text-white

                    transition-all
                    duration-300">


                    <span
                        class="transition-transform duration-300 group-hover:-translate-y-1">

                        Explore nossos serviços

                    </span>


                </a>



                <a href="#"
                    class="group inline-flex
                    w-full sm:w-auto

                    items-center
                    justify-center

                    gap-2

                    rounded-full

                    border-2
                    border-orange-950

                    px-7
                    py-3

                    text-sm
                    font-semibold

                    text-orange-950

                    transition-all
                    duration-300

                    hover:border-zinc-900">


                    <span
                        class="transition-transform duration-300 group-hover:-translate-y-1">

                        Veja o nosso trabalho

                    </span>


                </a>


            </div>


        </div>



        {{-- Imagem --}}
        <div
            class="relative

            order-last
            lg:order-none

            flex
            items-end
            justify-center


            h-[320px]
            sm:h-[420px]
            md:h-[520px]
            lg:h-[700px]


            -mx-6
            md:-mx-8
            lg:mx-0


            after:pointer-events-none

            after:absolute

            after:inset-y-0

            after:right-0

            after:w-20
            md:after:w-32
            lg:after:w-40


            after:bg-gradient-to-l

            after:from-white

            after:via-white/80

            after:to-transparent

            after:content-['']">


            <img
                src="{{ asset('images/home/hero.png') }}"
                alt="Hero"

                class="h-full
                w-full

                object-contain

                lg:w-auto
                lg:max-w-none">


        </div>


    </div>


</section>