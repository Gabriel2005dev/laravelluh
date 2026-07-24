<x-app-layout>

    {{-- 
        Conteúdo principal da Home
        O Header, Footer e Bottom Navigation
        já vêm pelo layout app.blade.php
    --}}


    {{-- Banner Principal --}}
    <section
        class="
        relative
        flex
        min-h-[600px]
        items-center
        justify-center
        overflow-hidden
        "
    >

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="max-w-3xl">


                <h1
                    class="
                    text-4xl
                    font-bold
                    text-zinc-900
                    md:text-6xl
                    "
                >
                    Beleza,
                    cuidado e autoestima
                    em um só lugar
                </h1>



                <p
                    class="
                    mt-6
                    text-lg
                    text-zinc-600
                    "
                >
                    Agende seu horário e tenha uma experiência
                    exclusiva no Studio Luh.
                </p>



                <a
                    href="{{ route('services') }}"
                    class="
                    mt-8
                    inline-flex
                    rounded-xl
                    bg-rose-600
                    px-6
                    py-3
                    font-semibold
                    text-white
                    transition
                    hover:bg-rose-700
                    "
                >
                    Agendar agora
                </a>


            </div>

        </div>


    </section>





    {{-- Sobre --}}
    <section
        id="sobre"
        class="
        py-20
        "
    >

        <div
            class="
            mx-auto
            max-w-7xl
            px-6
            lg:px-8
            "
        >

            <h2
                class="
                text-3xl
                font-bold
                text-zinc-900
                "
            >
                Sobre nós
            </h2>


            <p
                class="
                mt-4
                max-w-2xl
                text-zinc-600
                "
            >
                Um espaço pensado para cuidar
                da sua beleza com conforto e qualidade.
            </p>


        </div>

    </section>






    {{-- Galeria --}}
    <section
        id="galeria"
        class="
        bg-zinc-50
        py-20
        "
    >

        <div
            class="
            mx-auto
            max-w-7xl
            px-6
            "
        >

            <h2
                class="
                text-3xl
                font-bold
                "
            >
                Galeria
            </h2>


            {{-- Fotos entram aqui --}}


        </div>


    </section>






    {{-- Depoimentos --}}
    <section
        id="depoimentos"
        class="
        py-20
        "
    >

        <div
            class="
            mx-auto
            max-w-7xl
            px-6
            "
        >

            <h2
                class="
                text-3xl
                font-bold
                "
            >
                Depoimentos
            </h2>


        </div>


    </section>






    {{-- Contato --}}
    <section
        id="contato"
        class="
        bg-zinc-50
        py-20
        "
    >

        <div
            class="
            mx-auto
            max-w-7xl
            px-6
            "
        >

            <h2
                class="
                text-3xl
                font-bold
                "
            >
                Contato
            </h2>


        </div>


    </section>


</x-app-layout>