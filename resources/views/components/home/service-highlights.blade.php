{{-- Seção de Serviços --}}
<section class="relative w-full bg-white py-10 sm:py-14 lg:py-20">

    <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- 
            Grid Responsivo:
            Celular: 2 colunas
            Tablet: 4 colunas
            Desktop: 4 colunas
        --}}
        <div class="grid grid-cols-2 gap-y-10 gap-x-4 sm:grid-cols-4 sm:gap-5 md:gap-8 lg:gap-10">

            {{-- Item 1 --}}
            <div class="flex min-w-0 flex-col items-center text-center">

                {{-- Imagem --}}
                <div class="mb-3 flex h-14 w-14 items-center justify-center sm:mb-4 sm:h-16 sm:w-16 md:h-20 md:w-20 lg:h-20 lg:w-24">
                    <img
                        src="{{ asset('images/icons/glowing-skin.png') }}"
                        alt="Qualidade"
                        class="h-full w-full object-contain"
                    >
                </div>

                {{-- Título --}}
                <h3 class="font-serif text-xs font-bold italic text-zinc-900 sm:text-sm md:text-base lg:text-lg">
                    Qualidade
                </h3>

                {{-- Descrição --}}
                <p class="mt-1 max-w-[130px] text-[10px] leading-snug text-zinc-500 sm:max-w-[120px] sm:text-[10px] md:max-w-[150px] md:text-xs lg:max-w-[180px] lg:text-sm">
                    Cuidado e excelência em cada detalhe.
                </p>

            </div>


            {{-- Item 2 --}}
            <div class="flex min-w-0 flex-col items-center text-center">

                {{-- Imagem --}}
                <div class="mb-3 flex h-14 w-14 items-center justify-center sm:mb-4 sm:h-16 sm:w-16 md:h-20 md:w-20 lg:h-20 lg:w-20">
                    <img
                        src="{{ asset('images/icons/hairdressing.png') }}"
                        alt="Atendimento"
                        class="h-full w-full object-contain"
                    >
                </div>

                {{-- Título --}}
                <h3 class="font-serif text-xs font-bold italic text-zinc-900 sm:text-sm md:text-base lg:text-lg">
                    Atendimento
                </h3>

                {{-- Descrição --}}
                <p class="mt-1 max-w-[130px] text-[10px] leading-snug text-zinc-500 sm:max-w-[120px] sm:text-[10px] md:max-w-[150px] md:text-xs lg:max-w-[180px] lg:text-sm">
                    Um atendimento acolhedor e personalizado.
                </p>

            </div>


            {{-- Item 3 --}}
            <div class="flex min-w-0 flex-col items-center text-center">

                {{-- Imagem --}}
                <div class="mb-3 flex h-14 w-14 items-center justify-center sm:mb-4 sm:h-16 sm:w-16 md:h-20 md:w-20 lg:h-20 lg:w-20">
                    <img
                        src="{{ asset('images/icons/manicure.png') }}"
                        alt="Experiência"
                        class="h-full w-full object-contain"
                    >
                </div>

                {{-- Título --}}
                <h3 class="font-serif text-xs font-bold italic text-zinc-900 sm:text-sm md:text-base lg:text-lg">
                    Experiência
                </h3>

                {{-- Descrição --}}
                <p class="mt-1 max-w-[130px] text-[10px] leading-snug text-zinc-500 sm:max-w-[120px] sm:text-[10px] md:max-w-[150px] md:text-xs lg:max-w-[180px] lg:text-sm">
                    Profissionalismo para valorizar sua beleza.
                </p>

            </div>


            {{-- Item 4 --}}
            <div class="flex min-w-0 flex-col items-center text-center">

                {{-- Imagem --}}
                <div class="mb-3 flex h-14 w-14 items-center justify-center sm:mb-4 sm:h-16 sm:w-16 md:h-20 md:w-20 lg:h-20 lg:w-20">
                    <img
                        src="{{ asset('images/icons/eyebrow-pencil.png') }}"
                        alt="Agendamento"
                        class="h-full w-full object-contain"
                    >
                </div>

                {{-- Título --}}
                <h3 class="font-serif text-xs font-bold italic text-zinc-900 sm:text-sm md:text-base lg:text-lg">
                    Agendamento
                </h3>

                {{-- Descrição --}}
                <p class="mt-1 max-w-[130px] text-[10px] leading-snug text-zinc-500 sm:max-w-[120px] sm:text-[10px] md:max-w-[150px] md:text-xs lg:max-w-[180px] lg:text-sm">
                    Agende seu horário de forma simples e prática.
                </p>

            </div>

        </div>

    </div>

</section>