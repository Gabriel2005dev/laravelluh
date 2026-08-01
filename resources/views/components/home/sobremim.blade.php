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

        gap-12
        lg:gap-16

        px-6
        py-12
        lg:py-6
    ">

        {{-- Imagem --}}
        <div class="relative mx-auto flex w-full justify-center lg:justify-start">

            <div
                class="
                relative
                flex
                h-[380px]
                sm:h-[450px]
                md:h-[520px]
                lg:h-[500px]

                items-end
                justify-center
                lg:justify-start
                z-10
            ">

                <img
                    src="{{ asset('images/home/luana.png') }}"
                    alt="Sobre mim"
                    class="h-full w-auto object-contain"
                >

                {{-- Overlay sutil --}}
                <div class="absolute inset-0 bg-gradient-to-t from-orange-950/30 via-transparent to-transparent"></div>

            </div>

        </div>

        {{-- Conteúdo --}}
        <div class="text-center lg:text-left">

            {{-- Título --}}
            <div class="mb-8 flex justify-center lg:justify-start">

                <h2 class="font-title text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Sobre mim
                </h2>

            </div>

            {{-- Texto --}}
            <p
                class="
                font-body

                mx-auto
                max-w-2xl

                text-sm
                leading-7

                text-white

                sm:text-base
                sm:leading-8

                lg:mx-0
            "
            >
                Meu propósito é transformar cada atendimento em uma experiência única, onde beleza, cuidado e bem-estar caminham lado a lado. Acredito que cada pessoa possui uma beleza singular e merece um atendimento personalizado, pensado para valorizar sua essência, elevar sua autoestima e proporcionar momentos de confiança e satisfação.

                <br><br>

                Mais do que oferecer um serviço de beleza, busco criar um ambiente acolhedor e uma experiência especial em cada detalhe. Do primeiro contato ao resultado final, tudo é realizado com carinho, dedicação e profissionalismo, para que você se sinta ainda mais bonita, confiante e feliz a cada visita.
            </p>

        </div>

    </div>

</section>