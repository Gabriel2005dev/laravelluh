@props(['appointment'])

@php
    $startsAt = $appointment->starts_at;
    $price = 'R$'.number_format($appointment->service_snapshot_price_cents / 100, 0, ',', '.');
    $paymentMethodLabels = [
        'pix' => 'Pix',
        'card' => 'Cartão',
        'cash' => 'Dinheiro',
    ];
    $paymentStatusLabels = [
        'pending' => 'Pendente',
        'paid' => 'Pago',
        'cancelled' => 'Cancelado',
        'refunded' => 'Reembolsado',
    ];
    $paymentMethod = $appointment->payment_method instanceof \BackedEnum ? $appointment->payment_method->value : $appointment->payment_method;
    $paymentStatus = $appointment->payment_status instanceof \BackedEnum ? $appointment->payment_status->value : $appointment->payment_status;
@endphp

<article class="group rounded-[2rem] border border-orange-950/10 bg-white p-5 shadow-sm shadow-orange-950/5 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-orange-950/10 sm:p-6">
    <div class="flex flex-col gap-5 lg:flex-row lg:items-start lg:justify-between">
        <div class="min-w-0 flex-1">
            <div class="flex flex-wrap items-center gap-2">
                <x-dashboard.status-badge :status="$appointment->status" />
                <span class="rounded-full bg-orange-950/5 px-3 py-1 text-xs font-bold text-orange-950">
                    {{ $appointment->service_snapshot_category_name }} • {{ $appointment->service_snapshot_subcategory_name }}
                </span>
            </div>

            <h3 class="mt-4 text-xl font-black text-orange-950 sm:text-2xl">
                {{ $appointment->service_snapshot_name }}
            </h3>

            <div class="mt-4 grid gap-3 text-sm text-zinc-600 sm:grid-cols-2 xl:grid-cols-4">
                <div class="flex items-center gap-2">
                    <x-lucide-calendar-days class="h-4 w-4 text-rose-500" stroke-width="2" />
                    <span>{{ $startsAt->translatedFormat('d/m/Y') }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <x-lucide-clock class="h-4 w-4 text-rose-500" stroke-width="2" />
                    <span>{{ $startsAt->format('H:i') }} às {{ $appointment->ends_at->format('H:i') }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <x-lucide-hourglass class="h-4 w-4 text-rose-500" stroke-width="2" />
                    <span>{{ $appointment->service_snapshot_duration_minutes }} min</span>
                </div>
                <div class="flex items-center gap-2">
                    <x-lucide-badge-dollar-sign class="h-4 w-4 text-rose-500" stroke-width="2" />
                    <span>{{ $price }}</span>
                </div>
            </div>
        </div>

        <div class="rounded-3xl bg-orange-950/[0.04] p-4 text-sm text-zinc-600 lg:min-w-64">
            <p class="font-bold text-orange-950">Detalhes do atendimento</p>
            <dl class="mt-3 space-y-2">
                <div class="flex justify-between gap-4">
                    <dt>Cliente</dt>
                    <dd class="text-right font-semibold text-zinc-800">{{ $appointment->customer_name }}</dd>
                </div>
                <div class="flex justify-between gap-4">
                    <dt>Pagamento</dt>
                    <dd class="text-right font-semibold text-zinc-800">{{ $paymentMethodLabels[$paymentMethod] ?? $paymentMethod }}</dd>
                </div>
                <div class="flex justify-between gap-4">
                    <dt>Status pgto.</dt>
                    <dd class="text-right font-semibold text-zinc-800">{{ $paymentStatusLabels[$paymentStatus] ?? $paymentStatus }}</dd>
                </div>
            </dl>
        </div>
    </div>
</article>