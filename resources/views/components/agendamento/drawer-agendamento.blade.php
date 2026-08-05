{{-- ===========================================================
| DRAWER DE AGENDAMENTO
|--------------------------------------------------------------------------
| Este componente é responsável por:
|
| • Controlar abertura e fechamento do Drawer
| • Controlar as etapas do agendamento
| • Armazenar os dados temporários do usuário
| • Renderizar os componentes de cada etapa
|
| Todo o estado do Drawer fica centralizado aqui.
|--------------------------------------------------------------------------
--}}

<div

@abrir-drawer.window="abrirDrawer($event.detail.service)"

x-show="drawer.aberto"

x-cloak

class="
fixed
inset-0
z-[70]
"

>


    {{-- ===========================================================
        OVERLAY
    ============================================================ --}}

    <div

        class="
        absolute
        inset-0
        bg-black/50
        backdrop-blur-[2px]
        "

        @click="drawer.aberto = false"

    ></div>



    {{-- ===========================================================
        DRAWER
    ============================================================ --}}

    <aside

        x-show="drawer.aberto"

        x-transition:enter="
        transition
        ease-out
        duration-300
        "

        x-transition:enter-start="
        translate-x-full
        "

        x-transition:enter-end="
        translate-x-0
        "

        x-transition:leave="
        transition
        ease-in
        duration-200
        "

        x-transition:leave-start="
        translate-x-0
        "

        x-transition:leave-end="
        translate-x-full
        "

        class="
        absolute
        right-0
        top-0

        flex
        h-screen
        w-full

        flex-col

        overflow-hidden

        bg-white

        shadow-2xl

        sm:max-w-[470px]
        "

    >


        {{-- ===========================================================
            HEADER
        ============================================================ --}}

        <x-agendamento.drawer.drawer-header />


        {{-- ===========================================================
            STEPS
        ============================================================ --}}

        <x-agendamento.drawer.drawer-steps />


        {{-- ===========================================================
            CONTEÚDO
        ============================================================ --}}

        <main

            class="
            flex-1
            overflow-y-auto
            px-6
            py-8
            "

        >


            {{-- =======================================================
                ETAPA 1
            ======================================================== --}}

            <template x-if="drawer.etapa === 1">

                <x-agendamento.drawer.drawer-step-date />

            </template>



            {{-- =======================================================
                ETAPA 2
            ======================================================== --}}

            <template x-if="drawer.etapa === 2">

                <x-agendamento.drawer.drawer-step-time />

            </template>



            {{-- =======================================================
                ETAPA 3
            ======================================================== --}}

            <template x-if="drawer.etapa === 3">

                <x-agendamento.drawer.drawer-step-payment />

            </template>



            {{-- =======================================================
                ETAPA 4
            ======================================================== --}}

            <template x-if="drawer.etapa === 4">

                <x-agendamento.drawer.drawer-step-confirm />

            </template>


        </main>



        {{-- ===========================================================
            FOOTER
        ============================================================ --}}

        <x-agendamento.drawer.drawer-footer />


    </aside>


</div>

