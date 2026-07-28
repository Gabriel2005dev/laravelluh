@props([
    'navItems' => [],
])


<nav
    class="
        flex
        flex-col
        gap-1
    "
>

    @foreach ($navItems as $item)

        <a
            href="{{ $item['href'] }}"
            @click="open = false"
            class="
                group
                flex
                items-center
                justify-between
                rounded-full
                px-4
                py-4
                text-base
                font-medium
                text-orange-950
                transition-all
                duration-200
                hover:bg-orange-950/5
            "
        >

            {{-- Nome --}}
            <span>
                {{ $item['label'] }}
            </span>


            {{-- Seta --}}
            <x-lucide-chevron-right
                class="
                    h-5
                    w-5
                    text-orange-900/50
                    transition-transform
                    duration-300
                    group-hover:translate-x-1
                "
            />

        </a>

    @endforeach

</nav>