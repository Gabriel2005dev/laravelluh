@props([
    'navItems' => [],
])


<nav
    class="
        hidden
        items-center
        gap-2
        lg:flex
    "
>

    @foreach ($navItems as $item)

        <a
            href="{{ $item['href'] }}"
            class="
                group
                relative
                flex
                flex-col
                items-center
                justify-center
                px-4
                py-2
                text-sm
                font-medium
                text-orange-950
                transition-all
                duration-300
                hover:-translate-y-1
            "
        >

            {{-- Texto --}}
            <span>
                {{ $item['label'] }}
            </span>


            {{-- Asterisk --}}
            <span
                class="
                    pointer-events-none
                    absolute
                    -bottom-1
                    left-1/2
                    -translate-x-1/2
                    translate-y-2
                    scale-100
                    opacity-0
                    transition-all
                    duration-300
                    ease-out

                    group-hover:translate-y-0
                    group-hover:opacity-100

                    {{ $item['active']
                        ? 'translate-y-0 scale-100 opacity-100'
                        : '' }}
                "
            >

                <x-lucide-asterisk
                    class="h-4 w-4 text-orange-900"
                    stroke-width="2.5"
                />

            </span>

        </a>

    @endforeach

</nav>