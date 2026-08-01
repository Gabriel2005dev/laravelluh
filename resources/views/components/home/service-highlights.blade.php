{{-- =========================
     SERVIÇOS
========================= --}}
<section id="services" class="relative w-full bg-white py-12 sm:py-12 lg:py-6">



    <div class="mx-auto max-w-7xl px-6">

        {{-- =========================
             CABEÇALHO
        ========================= --}}
        <div class="mb-20 flex items-center justify-center lg:justify-start">

            <h2 class="font-title text-xl font-bold tracking-tight text-orange-950 sm:text-3xl">
           Nossos Serviços
            </h2>

        </div>

        {{-- =========================
             GRID DE SERVIÇOS
        ========================= --}}
        <div class="mt-10 grid grid-cols-2 gap-x-6 gap-y-12 sm:gap-x-10 sm:gap-y-14 lg:grid-cols-4 lg:gap-12">

            {{-- Item 1 --}}
            <div class="flex flex-col items-center text-center">

                <div class="mb-4 flex h-40 w-40 items-center justify-center sm:h-44 sm:w-44 md:h-52 md:w-52 lg:h-64 lg:w-64">
                    <img
                        src="{{ asset('images/icons/beleza.png') }}"
                        alt="Beleza"
                        class="h-full w-full object-contain"
                    >
                </div>

                <h3 class="font-title text-base font-semibold tracking-tight text-zinc-900 sm:text-lg lg:text-2xl">
                    Beleza
                </h3>

                <p class="font-body mt-3 hidden max-w-sm text-sm leading-6 text-zinc-700 sm:block lg:text-[15px]">
                    Realce sua beleza natural com técnicas modernas, produtos de alta qualidade e um atendimento pensado para valorizar sua autoestima em cada detalhe.
                </p>

            </div>

            {{-- Item 2 --}}
            <div class="flex flex-col items-center text-center">

                <div class="mb-4 flex h-40 w-40 items-center justify-center sm:h-44 sm:w-44 md:h-52 md:w-52 lg:h-64 lg:w-64">
                    <img
                        src="{{ asset('images/icons/corte.png') }}"
                        alt="Corte de Cabelo"
                        class="h-full w-full object-contain"
                    >
                </div>

                <h3 class="font-title text-base font-semibold tracking-tight text-zinc-900 sm:text-lg lg:text-2xl">
                    Corte de Cabelo
                </h3>

                <p class="font-body mt-3 hidden max-w-sm text-sm leading-6 text-zinc-700 sm:block lg:text-[15px]">
                    Cortes femininos personalizados que acompanham seu estilo, valorizam seus traços e proporcionam um visual elegante e cheio de personalidade.
                </p>

            </div>

            {{-- Item 3 --}}
            <div class="flex flex-col items-center text-center">

                <div class="mb-4 flex h-40 w-40 items-center justify-center sm:h-44 sm:w-44 md:h-52 md:w-52 lg:h-64 lg:w-64">
                    <img
                        src="{{ asset('images/icons/manicure.png') }}"
                        alt="Manicure"
                        class="h-full w-full object-contain"
                    >
                </div>

                <h3 class="font-title text-base font-semibold tracking-tight text-zinc-900 sm:text-lg lg:text-2xl">
                    Manicure
                </h3>

                <p class="font-body mt-3 hidden max-w-sm text-sm leading-6 text-zinc-700 sm:block lg:text-[15px]">
                    Unhas impecáveis com acabamento profissional, esmaltação duradoura e cuidados especiais para manter suas mãos sempre bonitas.
                </p>

            </div>

            {{-- Item 4 --}}
            <div class="flex flex-col items-center text-center">

                <div class="mb-4 flex h-40 w-40 items-center justify-center sm:h-44 sm:w-44 md:h-52 md:w-52 lg:h-64 lg:w-64">
                    <img
                        src="{{ asset('images/icons/sobrancelha.png') }}"
                        alt="Design de Sobrancelhas"
                        class="h-full w-full object-contain"
                    >
                </div>

                <h3 class="font-title text-base font-semibold tracking-tight text-zinc-900 sm:text-lg lg:text-2xl">
                    Sobrancelha
                </h3>

                <p class="font-body mt-3 hidden max-w-sm text-sm leading-6 text-zinc-700 sm:block lg:text-[15px]">
                    Modelagem precisa para harmonizar seu rosto, destacar seu olhar e proporcionar um resultado natural, elegante e sofisticado.
                </p>

            </div>

        </div>

    </div>

</section>