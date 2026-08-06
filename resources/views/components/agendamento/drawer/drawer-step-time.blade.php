<div class="flex flex-col gap-8">

    <div>

        <h3 class="font-title text-3xl text-zinc-900">Escolha um horário
        </h3>

        <p class="mt-2 text-sm leading-6 text-zinc-500">Agora selecione um horário disponível.
        </p>

    </div>

    <div class="rounded-3xl">

    <h4 class="mt-2 text-lg font-semibold leading-relaxed text-orange-950">
            <span x-text="dataSelecionadaFormatada()"></span>
            às
            <span x-show="drawer.horario" x-transition.opacity class="font-bold" x-text="drawer.horario"></span>
            <span x-show="!drawer.horario" x-transition.opacity class="italic text-rose-400">selecione um horário</span>
        </h4>
    </div>

    <div x-show="drawer.carregandoHorarios" class="rounded-3xl bg-zinc-100 p-5 text-sm text-zinc-500">
        Carregando horários disponíveis...
    </div>

    <div x-show="!drawer.carregandoHorarios && drawer.horarios.length === 0" class="rounded-3xl bg-rose-50 p-5 text-sm text-rose-700">
        Nenhum horário disponível para esta data. Escolha outro dia.
    </div>

    
    <div class="grid grid-cols-5 gap-4" x-show="!drawer.carregandoHorarios && drawer.horarios.length > 0">

        <template x-for="horario in drawer.horarios" :key="horario.time">

            <button
                :disabled="!horario.available"
                @click="horario.available && (drawer.horario = horario.time)" 
                class="rounded-full border border-zinc-200 px-4 py-2 text-center text-sm font-semibold transition-all duration-300"

                :class="
                    !horario.available
                        ? 'cursor-not-allowed border-zinc-200 bg-zinc-100 text-zinc-400 line-through'
                        : drawer.horario === horario.time
                            ? 'border-orange-950 bg-orange-950 text-white'
                            : 'bg-white text-zinc-700 hover:border-orange-950 hover:text-orange-950'
                "

                x-text="horario.time">
                
            </button>

        </template>
        
    </div>

</div>