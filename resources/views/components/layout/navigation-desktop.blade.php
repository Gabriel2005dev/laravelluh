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


    

        </a>

    @endforeach

</nav>