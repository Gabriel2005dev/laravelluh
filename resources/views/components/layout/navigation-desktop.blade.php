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

       @continue(($item['auth'] ?? false) && auth()->guest())
       
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
                hover:text-white
         
                font-bold
            "
        >

            {{-- Bola Orange --}}
            <span
                class="
                    pointer-events-none
                    absolute
                    left-1/2
                    top-1/2
                    z-0
                    h-2
                    w-2
                    -translate-x-[70%]
                    -translate-y-1/2
                    rounded-full
                    bg-orange-950
                    opacity-0
                    transition-all
                    duration-200
                    ease-out
                    group-hover:h-12
                    group-hover:w-12
                    group-hover:opacity-100
                "
            ></span>

            {{-- Bola Rose --}}
            <span
                class="
                    pointer-events-none
                    absolute
                    left-1/2
                    top-1/2
                    z-0
                    h-2
                    w-2
                    translate-x-[5%]
                    -translate-y-1/2
                    rounded-full
                    bg-rose-400
                    opacity-0
                    transition-all
                    duration-500
                    ease-out
                    group-hover:h-10
                    group-hover:w-10
                    group-hover:opacity-100
                "
            ></span>

            {{-- Texto --}}
            <span
                class="
                    relative
                    z-10
                    transition-all
                    duration-300
                "
            >
                {{ $item['label'] }}
            </span>

        </a>

    @endforeach
</nav>