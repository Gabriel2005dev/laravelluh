@php
    $navItems = [
        [
            'label'  => 'Home',
            'href'   => route('home'),
            'active' => request()->routeIs('home'),
        ],

        [
            'label'  => 'Serviços',
            'href'   => route('services'),
            'active' => request()->routeIs('services'),
        ],

        [
            'label'  => 'Galeria',
            'href'   => url('/#galeria'),
            'active' => false,
        ],

        [
            'label'  => 'Sobre',
            'href'   => url('/#sobre'),
            'active' => false,
        ],

        [
            'label'  => 'Contato',
            'href'   => url('/#contato'),
            'active' => false,
        ],
    ];
@endphp


<header
    class="
        inset-x-0
        top-0
        z-50
        border-b
        border-white/10
        bg-transparent
    "
>
    <div
        class="
            mx-auto
            flex
            h-20
            max-w-7xl
            items-center
            justify-between
            px-6
            lg:px-8
        "
    >

        {{-- Logo --}}
        <x-application-logo />


        {{-- Navegação Desktop --}}
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
                        px-4
                        py-4
                        text-sm
                        font-medium
                    
                        transition-all
                        duration-300
                        hover:-translate-y-1
                        
                    "
                >

                    <span>
                        {{ $item['label'] }}
                    </span>

                    {{-- Indicador do item ativo --}}
                    <span
                        class="
                            absolute
                            bottom-2
                            left-1/2
                            h-0.5
                            w-0
                            -translate-x-1/2
                            rounded-full
                            bg-orange-300
                            transition-all
                            duration-300
                            group-hover:w-1/2
                            {{ $item['active'] ? 'w-1/2' : '' }}
                        "
                    ></span>

                </a>

            @endforeach

        </nav>


        {{-- Ações Desktop --}}
        <div
            class="
                flex
                items-center
                gap-3
            "
        >

            @guest

                {{-- Botão Login --}}
                <a
                    href="{{ route('login') }}"
                   class="fuzzy-bubbles-bold group inline-flex w-full items-center justify-center gap-3  bg-white px-4 py-2.5 text-md font-semibold shadow-lg shadow-orange-950/20 transition-all duration-300 hover:shadow-xl hover:shadow-orange-950/30 focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-400 focus-visible:ring-offset-2 focus-visible:ring-offset-zinc-950 active:scale-[0.98] sm:w-auto">
                    Entrar
                     <x-lucide-arrow-right class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" />
</a>

            @endguest


            @auth

                {{-- Avatar + Dropdown --}}
                <x-layout.profile-dropdown />

            @endauth

        </div>

    </div>
</header>