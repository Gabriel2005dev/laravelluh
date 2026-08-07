@props(['status'])

@php
    $value = $status instanceof \BackedEnum ? $status->value : (string) $status;

    $labels = [
        'scheduled' => 'Agendado',
        'completed' => 'Realizado',
        'cancelled' => 'Cancelado',
        'no_show' => 'Não compareceu',
    ];

    $classes = [
        'scheduled' => 'bg-amber-100 text-amber-800 ring-amber-200',
        'completed' => 'bg-emerald-100 text-emerald-800 ring-emerald-200',
        'cancelled' => 'bg-rose-100 text-rose-800 ring-rose-200',
        'no_show' => 'bg-zinc-100 text-zinc-700 ring-zinc-200',
    ];
    $badgeClass = $classes[$value] ?? 'bg-zinc-100 text-zinc-700 ring-zinc-200';
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex items-center rounded-full px-3 py-1 text-xs font-bold ring-1 '.$badgeClass]) }}>
    {{ $labels[$value] ?? ucfirst($value) }}
</span>