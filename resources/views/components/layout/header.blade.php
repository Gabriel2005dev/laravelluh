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
        sticky
        inset-x-0
        top-0
        z-50
        backdrop-blur-xl
        transition-all
        duration-300
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
                            opacity-0
                            scale-100
                            transition-all
                            duration-300
                            ease-out

                            group-hover:translate-y-0
                            group-hover:opacity-100
                            group-hover:scale-100

                            {{ $item['active']
                                ? 'translate-y-0 opacity-100 scale-100'
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
                        group
                        inline-flex
                        items-center
                        justify-center
                        rounded-full
                        border-2
                        border-orange-950
                        bg-orange-950
                        px-7
                        py-2
                        text-sm
                        font-semibold
                        text-white
                        transition-all
                        duration-300
                    "
                >

                    <span
                        class="
                            transition-transform
                            duration-300
                            group-hover:-translate-y-1
                        "
                    >
                        Entrar
                    </span>

                </a>

                @if (Route::has('register'))
                    {{-- Botão Cadastro --}}
                    <a
                        href="{{ route('register') }}"
                        class="
                            group
                            inline-flex
                            items-center
                            justify-center
                            rounded-full
                            border-2
                            border-orange-950
                            px-7
                            py-2
                            text-sm
                            font-semibold
                            text-orange-950
                            transition-all
                            duration-300
                        "
                    >

                        <span
                            class="
                                transition-transform
                                duration-300
                                group-hover:-translate-y-1
                            "
                        >
                            Criar conta
                        </span>

                    </a>
                @endif

            @endguest

            @auth

                {{-- Avatar + Dropdown --}}
                <x-layout.profile-dropdown />

            @endauth

        </div>

    </div>
</header>