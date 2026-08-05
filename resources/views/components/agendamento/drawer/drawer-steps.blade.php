<div class="border-b border-zinc-200 bg-white px-6 py-5">

    <div class="relative">

        {{-- LINHA BASE --}}
        <div class="absolute left-[5%] right-[5%] top-5 h-[2px] bg-zinc-200"></div>


        {{-- LINHA PROGRESSO --}}
        <div
            class="absolute left-[5%] top-5 h-[2px] bg-orange-950 transition-all duration-500"
            :style="`width: ${drawer.etapa === 1 ? 0 : ((drawer.etapa - 1) / 3) * 90}%`"
        ></div>


        {{-- ETAPAS --}}
        <div class="relative grid grid-cols-4">


            <template x-for="step in [
                { numero: 1, titulo: 'Data' },
                { numero: 2, titulo: 'Horário' },
                { numero: 3, titulo: 'Pagamento' },
                { numero: 4, titulo: 'Confirmação' }
            ]" :key="step.numero">


                <div class="flex flex-col items-center gap-2">


                    {{-- CÍRCULO --}}
<div
    class="relative z-10 flex h-10 w-10 items-center justify-center rounded-full border-2 transition-all duration-300"
    :class="drawer.etapa > step.numero
        ? 'border-orange-950 bg-orange-950 text-white'
        : 'border-orange-950 bg-white text-orange-950'"
>


    {{-- CHECK DOS PASSOS CONCLUÍDOS --}}
    <template x-if="drawer.etapa > step.numero">

        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="2.5"
            stroke="currentColor"
            class="h-5 w-5"
        >

            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M5 13l4 4L19 7"
            />

        </svg>

    </template>


    {{-- NÚMERO DO PASSO --}}
    <template x-if="drawer.etapa <= step.numero">

        <span
            class="text-sm font-semibold"
            x-text="step.numero"
        ></span>

    </template>


</div>


                    {{-- TEXTO --}}
                    <span
                        class="text-sm font-medium whitespace-nowrap"
                        :class="drawer.etapa >= step.numero ? 'text-orange-950' : 'text-zinc-400'"
                        x-text="step.titulo"
                    ></span>


                </div>


            </template>


        </div>

    </div>

</div>