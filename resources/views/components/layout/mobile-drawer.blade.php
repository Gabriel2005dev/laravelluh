@props([
    'navItems' => [],
])


{{-- ========================================================= --}}
{{-- OVERLAY --}}
{{-- ========================================================= --}}

<div
    x-show="open"
    x-cloak
    @click="open = false"
    x-transition:enter="transition-opacity ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition-opacity ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="
        fixed
        inset-0
        z-[60]
        bg-zinc-950/50
        backdrop-blur-[2px]
        lg:hidden
    "
></div>


{{-- ========================================================= --}}
{{-- DRAWER --}}
{{-- ========================================================= --}}

<aside
    x-show="open"
    x-cloak
    x-transition:enter="transform transition ease-out duration-300"
    x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transform transition ease-in duration-250"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="translate-x-full"
    class="
        fixed
        inset-y-0
        right-0
        z-[70]
        flex
        h-dvh
        w-[85%]
        max-w-sm
        flex-col
        overflow-hidden
        bg-white
        shadow-2xl
        lg:hidden
    "
>


    {{-- ===================================================== --}}
    {{-- CABEÇALHO --}}
    {{-- ===================================================== --}}

    <div
        class="
            flex
            h-20
            shrink-0
            items-center
            justify-between
            border-b
            border-orange-950/10
            px-5
            sm:px-6
        "
    >

        {{-- Logo --}}
        <div class="min-w-0 shrink">

            <x-application-logo />

        </div>


        {{-- Botão Fechar --}}
        <button
            type="button"
            @click="open = false"
            aria-label="Fechar menu"
            class="
                flex
                h-11
                w-11
                shrink-0
                cursor-pointer
                items-center
                justify-center
                rounded-full
                text-orange-950
                transition-all
                duration-300
                hover:bg-orange-950/5
            "
        >

            <x-lucide-x
                class="h-6 w-6"
                stroke-width="2"
                pointer-events="none"
            />

        </button>

    </div>


    {{-- ===================================================== --}}
    {{-- CONTEÚDO --}}
    {{-- ===================================================== --}}

    <div
        class="
            flex-1
            overflow-y-auto
            px-5
            py-6
            sm:px-6
        "
    >

        {{-- Navegação --}}
        <x-layout.navigation-mobile
            :nav-items="$navItems"
        />


        {{-- Divisor --}}
        <div
            class="
                my-6
                h-px
                bg-orange-950/10
            "
        ></div>


        {{-- Login / Cadastro / Perfil --}}
        <x-layout.auth-actions-mobile />

    </div>

</aside>