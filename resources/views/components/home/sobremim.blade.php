{{-- Seção Sobre Mim --}}
<section id="sobre" class="relative overflow-hidden bg-orange-950">

    {{-- Container principal --}}
    <div
        class="
            mx-auto
            max-w-7xl

            grid
            grid-cols-1
            lg:grid-cols-2

            items-center

            gap-10
            md:gap-14
            lg:gap-16

            px-6
            py-12
            md:py-16
            lg:py-6
        "
    >

        {{-- Imagem --}}
        <div
            class="
                order-1
                relative
                mx-auto
                flex
                w-full
                justify-center
                lg:order-none
                lg:justify-start
            "
        >

            <div
                class="
                    relative
                    z-50

                    flex
                    items-end
                    justify-center

                    h-[360px]
                    sm:h-[450px]
                    md:h-[540px]
                    lg:h-[500px]
                "
            >

                <img
                    src="{{ asset('images/home/luana.png') }}"
                    alt="Sobre mim"
                    class="h-full w-auto object-contain"
                >

                {{-- Overlay --}}
                <div class="absolute inset-0 bg-gradient-to-t from-orange-950/30 via-transparent to-transparent"></div>

            </div>

        </div>

        {{-- Conteúdo --}}
        <div
            class="
                order-2
                flex
                flex-col
                items-center
                text-center
                lg:items-start
                lg:text-left
            "
        >

            {{-- Título --}}
            <h2
                class="
                    font-title
                    text-3xl
                    font-bold
                    tracking-tight
                    text-white

                    sm:text-4xl
                "
            >
                Sobre mim
            </h2>

            {{-- Texto --}}
            <p
                class="
                    font-body

                    mt-8

                    max-w-xl

                    text-sm
                    leading-7
                    text-white

                    sm:text-base
                    sm:leading-8
                "
            >
                Meu propósito é transformar cada atendimento em uma experiência única, onde beleza, cuidado e bem-estar caminham lado a lado. Acredito que cada pessoa possui uma beleza singular e merece um atendimento personalizado, pensado para valorizar sua essência, elevar sua autoestima e proporcionar momentos de confiança e satisfação.

                <br><br>

                Mais do que oferecer um serviço de beleza, busco criar um ambiente acolhedor e uma experiência especial em cada detalhe. Do primeiro contato ao resultado final, tudo é realizado com carinho, dedicação e profissionalismo, para que você se sinta ainda mais bonita, confiante e feliz a cada visita.
            </p>

        </div>

    </div>

</section>...