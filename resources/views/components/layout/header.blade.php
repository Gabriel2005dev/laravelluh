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
            'href'   => url('/#agendar'),
            'active' => false,
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
    class="
        fixed
        inset-x-0
        top-0
        z-50
        transition-all
        duration-300
        bg-white
    "
>

       <div
    class="
        relative
        mx-auto
        flex
        h-20
        max-w-7xl
        items-center
        justify-between
        px-6
    "
>

    {{-- Logo --}}
    <div class="shrink-0 z-10">
        <x-application-logo />
    </div>

    {{-- Navegação Desktop --}}
    <div
        class="
            absolute
            left-1/2
            -translate-x-1/2
            hidden
            lg:block
        "
    >
        <x-layout.navigation-desktop
            :nav-items="$navItems"
        />
    </div>

    <div class="flex items-center gap-3 z-10">

        {{-- Ações Desktop --}}
        <x-layout.auth-actions />

        {{-- Botão Hambúrguer --}}
        <button
            type="button"
            @click="open = true"
            aria-label="Abrir menu"
            :aria-expanded="open"
            class="
                flex
                h-11
                w-11
                shrink-0
                items-center
                justify-center
                rounded-full
                text-orange-950
                transition-all
                duration-300
                hover:bg-orange-950/5
                lg:hidden
            "
        >
            <x-lucide-menu
                class="h-6 w-6"
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