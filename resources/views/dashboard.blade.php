<x-app-layout>
     <section class="relative overflow-hidden bg-gradient-to-b from-rose-50 via-white to-white px-4 py-10 sm:px-6 lg:px-8 lg:py-16">
        <div class="pointer-events-none absolute -right-24 top-10 h-72 w-72 rounded-full bg-rose-200/40 blur-3xl"></div>
        <div class="pointer-events-none absolute -left-24 bottom-0 h-72 w-72 rounded-full bg-orange-200/30 blur-3xl"></div>

          <div class="relative mx-auto max-w-7xl">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-3xl">
                    <span class="inline-flex rounded-full bg-white px-4 py-2 text-xs font-black uppercase tracking-[0.25em] text-rose-500 shadow-sm">
                        Painel do Cliente
                    </span>
                    <h1 class="mt-5 font-display text-4xl font-black leading-tight text-orange-950 sm:text-5xl lg:text-6xl">
                        Olá, {{ auth()->user()->name }}.
                    </h1>
                    <p class="mt-4 max-w-2xl text-base leading-7 text-zinc-600 sm:text-lg">
                        Acompanhe seus próximos horários, revise serviços já realizados e confira os detalhes completos de cada agendamento em um só lugar.
                    </p>
                </div>

                    <a href="{{ route('agendar') }}" class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-orange-950 px-7 py-4 text-sm font-black text-white shadow-xl shadow-orange-950/15 transition hover:-translate-y-1 hover:bg-orange-900 sm:w-auto">
                    <x-lucide-calendar-plus class="h-5 w-5" stroke-width="2" />
                    Novo agendamento
                </a>
            </div>

            <div class="mt-10 grid gap-4 md:grid-cols-3">
                <x-dashboard.summary-card
                    label="Total de agendamentos"
                    :value="$totalAppointments"
                    description="Todos os serviços vinculados à sua conta."
                    icon="lucide-calendar-check"
                />
                <x-dashboard.summary-card
                    label="Serviços realizados"
                    :value="$completedAppointments"
                    description="Atendimentos marcados como concluídos."
                    icon="lucide-sparkles"
                />
                <x-dashboard.summary-card
                    label="Próximo horário"
                    :value="$nextAppointment ? $nextAppointment->starts_at->format('d/m') : '—'"
                    :description="$nextAppointment ? $nextAppointment->starts_at->format('H:i').' • '.$nextAppointment->service_snapshot_name : 'Você ainda não tem um próximo agendamento.'"
                    icon="lucide-clock-3"
                />
            </div>
        </div>

         </section>

    <section class="bg-white px-4 pb-16 sm:px-6 lg:px-8">
        <div class="mx-auto grid max-w-7xl gap-10 xl:grid-cols-[1.1fr_0.9fr]">
            <div>
                <div class="mb-5 flex items-center justify-between gap-4">
                    <div>
                        <p class="text-sm font-black uppercase tracking-[0.2em] text-rose-500">Agenda</p>
                        <h2 class="mt-2 text-2xl font-black text-orange-950 sm:text-3xl">Próximos agendamentos</h2>
                    </div>
                    <span class="rounded-full bg-orange-950/5 px-4 py-2 text-sm font-bold text-orange-950">
                        {{ $upcomingAppointments->count() }} ativo(s)
                    </span>
                </div>

                <div class="space-y-4">
                    @forelse ($upcomingAppointments as $appointment)
                        <x-dashboard.appointment-card :appointment="$appointment" />
                    @empty
                        <x-dashboard.empty-state
                            title="Nenhum horário confirmado"
                            description="Quando você finalizar um agendamento pelo sistema, ele aparecerá automaticamente nesta área."
                            action-label="Escolher um serviço"
                            :action-href="route('agendar')"
                        />
                    @endforelse
                </div>
            </div>

            <aside>
                <div class="mb-5">
                    <p class="text-sm font-black uppercase tracking-[0.2em] text-rose-500">Histórico</p>
                    <h2 class="mt-2 text-2xl font-black text-orange-950 sm:text-3xl">Serviços realizados</h2>
                </div>

                <div class="space-y-4">
                    @forelse ($historyAppointments as $appointment)
                        <x-dashboard.appointment-card :appointment="$appointment" />
                    @empty
                        <x-dashboard.empty-state
                            title="Seu histórico ainda está vazio"
                            description="Agendamentos concluídos, cancelados ou passados serão organizados aqui para consulta futura."
                        />
                    @endforelse
                </div>
            </aside>
        </div>
    </section>

</x-app-layout>
