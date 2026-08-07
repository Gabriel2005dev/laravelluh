@props(['label', 'value', 'description' => null, 'icon' => null])

<div class="rounded-[2rem] border border-orange-950/10 bg-white p-5 shadow-sm shadow-orange-950/5">
    <div class="flex items-start justify-between gap-4">
        <div>
            <p class="text-sm font-semibold text-zinc-500">{{ $label }}</p>
            <p class="mt-2 text-3xl font-black text-orange-950">{{ $value }}</p>
        </div>

        @if ($icon)
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-rose-100 text-orange-950">
                <x-dynamic-component :component="$icon" class="h-5 w-5" stroke-width="2" />
            </div>
        @endif
    </div>

    @if ($description)
        <p class="mt-4 text-sm leading-6 text-zinc-500">{{ $description }}</p>
    @endif
</div>
