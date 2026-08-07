@php
    $navItems = [
        [
            'label'  => 'Home',
            'href'   => route('home'),
            'active' => request()->routeIs('home'),
        ],

        [
            'label'  => 'Sobre',
            'href'   => url('/#sobre'),
            'active' => false,
        ],

        [
            'label'  => 'Serviços',
            'href'   => url('#services'),
            'active' => false,
        ],

        [
            'label'  => 'Galeria',
            'href'   => url('/#galeria'),
            'active' => false,
        ],

        [
            'label'  => 'Contato',
            'href'   => url('/#contato'),
            'active' => false,
        ],

        [
            'label'  => 'Agendar',
            'href'   => route('agendar'),
            'active' => request()->routeIs('agendar'),
        ],

        [
            'label'  => 'Meu Painel',
            'href'   => route('dashboard'),
            'active' => request()->routeIs('dashboard'),
            'auth'   => true,
        ],
    ];
@endphp

<div
    x-data="{ open: false }"
    class="relative"
>

    {{-- ================================================= --}}
    {{-- HEADER --}}
    {{-- ================================================= --}}

    <header
        class="fixed inset-x-0 top-0 z-50 bg-white transition-all duration-300"
    >

        <div
            class="relative mx-auto flex h-16 sm:h-18 lg:h-20 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8"
        >

            {{-- Logo --}}
            <div class="shrink-0 z-10">
                <x-application-logo />
            </div>

            {{-- Navegação Desktop --}}
            <div
                class="absolute left-1/2 hidden -translate-x-1/2 lg:block"
            >
                <x-layout.navigation-desktop
                    :nav-items="$navItems"
                />
            </div>

            <div class="z-10 flex items-center gap-2 sm:gap-3">

                {{-- Ações Desktop --}}
                <x-layout.auth-actions />

                {{-- Botão Hambúrguer --}}
                <button
                    type="button"
                    @click="open = true"
                    aria-label="Abrir menu"
                    :aria-expanded="open"
                    class="flex h-10 w-10 sm:h-11 sm:w-11 items-center justify-center rounded-full text-orange-950 transition-all duration-300 hover:bg-orange-950/5 lg:hidden"
                >
                    <x-lucide-menu
                        class="h-5 w-5 sm:h-6 sm:w-6"
                        stroke-width="2"
                    />
                </button>

            </div>

        </div>

    </header>

    {{-- ================================================= --}}
    {{-- MENU LATERAL MOBILE / TABLET --}}
    {{-- ================================================= --}}

    <x-layout.mobile-drawer
        :nav-items="$navItems"
    />

</div>