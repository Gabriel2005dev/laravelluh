@props(['title', 'description', 'actionLabel' => null, 'actionHref' => null])

<div class="rounded-[2rem] border border-dashed border-orange-950/20 bg-orange-950/[0.03] p-8 text-center">
    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-white text-rose-500 shadow-sm">
        <x-lucide-calendar-heart class="h-6 w-6" stroke-width="2" />
    </div>

    <h3 class="mt-5 text-lg font-black text-orange-950">{{ $title }}</h3>
    <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-zinc-500">{{ $description }}</p>

    @if ($actionLabel && $actionHref)
        <a href="{{ $actionHref }}" class="mt-6 inline-flex items-center justify-center rounded-full bg-orange-950 px-6 py-3 text-sm font-bold text-white transition hover:-translate-y-0.5 hover:bg-orange-900">
            {{ $actionLabel }}
        </a>
    @endif
</div>