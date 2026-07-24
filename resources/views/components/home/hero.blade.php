{{-- Hero Principal --}}
<section
    class="
    relative
    overflow-hidden
    "
>

    {{-- Decoração de fundo --}}
    <div
        class="
        absolute
        -top-40
        right-0
        h-96
        w-96
        rounded-full
        bg-rose-100/60
        blur-3xl
        "
    ></div>


   {{-- Container --}}
<div
    class="
    mx-auto
    grid
    min-h-[700px]
    max-w-7xl
    grid-cols-1
    items-center
    py-16
    px-6
    lg:grid-cols-[35%_65%]
    "
>


        {{-- Conteúdo --}}
        <div
            class="
            relative
            z-10
          
            "
        >


            {{-- Badge --}}
            <span
                class="
                inline-flex
                items-center
                rounded-full
                bg-rose-100
                px-5
                py-2
                text-sm
                font-semibold
                text-rose-600
                "
            >
                Studio de Beleza Premium
            </span>



            {{-- Título --}}
            <h1
                class="
                mt-6
                max-w-2xl
                text-4xl
                font-bold
                leading-[1.1]
                tracking-tight
                text-zinc-900
                sm:text-5xl
                lg:text-6xl
                "
            >
                Beleza,
                cuidado e autoestima
                em um só lugar
            </h1>




            {{-- Texto --}}
            <p
                class="
                mt-6
                max-w-lg
                text-lg
                leading-relaxed
                text-zinc-600
                "
            >
                Transformamos cada atendimento em uma experiência
                única de beleza, conforto e bem-estar.
                Agende seu momento especial no Studio Luh.
            </p>




            {{-- Botões --}}
            <div
                class="
                mt-8
                flex
                flex-wrap
                gap-4
                "
            >

                <a
                    href="{{ route('services') }}"
                    class="
                    rounded-xl
                    bg-rose-600
                    px-8
                    py-3.5
                    font-semibold
                    text-white
                    shadow-lg
                    shadow-rose-600/30
                    transition
                    hover:bg-rose-700
                    "
                >
                    Agendar agora
                </a>


                <a
                    href="#galeria"
                    class="
                    rounded-xl
                    border
                    border-zinc-300
                    bg-white
                    px-8
                    py-3.5
                    font-semibold
                    text-zinc-700
                    transition
                    hover:bg-zinc-50
                    "
                >
                    Ver trabalhos
                </a>


            </div>


        </div>






        {{-- Imagem --}}
        <div
            class="
            relative
            flex
            justify-center
            lg:justify-end
            "
        >





            {{-- Imagem --}}
            <img
                src="{{ asset('images/home/fundo-hero.png') }}"
                alt="Profissional realizando manicure"
                class="
                relative
                z-10
                h-full
                w-full
                max-w-full
                object-cover
                "
            />
        </div>


    </div>


</section>