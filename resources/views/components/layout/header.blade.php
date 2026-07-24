@php
    $navItems = [
        [
            'label'  => 'Home',
            'href'   => route('home'),
            'icon'   => asset('images/icons/home.png'),
            'active' => request()->routeIs('home'),
        ],

        [
            'label'  => 'Serviços',
            'href'   => route('services'),
            'icon'   => asset('images/icons/service.png'),
            'active' => request()->routeIs('services'),
        ],

        [
            'label'  => 'Galeria',
            'href'   => url('/#galeria'),
            'icon'   => asset('images/icons/gallery.png'),
            'active' => false,
        ],

        [
            'label'  => 'Sobre',
            'href'   => url('/#sobre'),
            'icon'   => asset('images/icons/about.png'),
            'active' => false,
        ],

        [
            'label'  => 'Contato',
            'href'   => url('/#contato'),
            'icon'   => asset('images/icons/contact.png'),
            'active' => false,
        ],
    ];
@endphp

<header
    class="
        sticky
        top-0
        z-50
        border-b
        border-zinc-200
        backdrop-blur-md
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
                        flex
                        flex-col
                        items-center
                        gap-1
                        px-4
                        py-4
                        font-medium
                        transition-all
                        duration-300
                        hover:-translate-y-1
                        {{ $item['active'] ? '' : 'text-zinc-700' }}
                    "
                >
                    {{-- Ícone + Texto --}}
                    <div
                        class="
                            flex
                            items-center
                            gap-2
                            text-sm
                        "
                    >
                        <img
                            src="{{ $item['icon'] }}"
                            alt="{{ $item['label'] }}"
                            class="
                                h-6
                                w-6
                                object-contain
                                transition-all
                                duration-300
                                group-hover:scale-110
                            "
                        >

                        <span>{{ $item['label'] }}</span>
                    </div>

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
                    class="
                        rounded-xl
                        border
                        border-zinc-300
                        px-5
                        py-2.5
                        text-sm
                        font-medium
                        text-zinc-700
                        transition
                        hover:bg-zinc-100
                    "
                >
                    Entrar
                </a>

                {{-- Botão Agendar --}}
                <a
                    href="{{ route('services') }}"
                    class="
                        rounded-xl
                        bg-rose-600
                        px-5
                        py-2.5
                        text-sm
                        font-semibold
                        text-white
                        transition
                        hover:bg-rose-700
                    "
                >
                    Agendar Agora
                </a>
            @endguest

            @auth
                {{-- Avatar + Dropdown --}}
                <x-layout.profile-dropdown />
            @endauth
        </div>
    </div>
</header>