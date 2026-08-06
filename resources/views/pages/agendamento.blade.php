<x-app-layout>

<meta 
    name="user-authenticated"
    content="{{ auth()->check() ? 'true' : 'false' }}"
>


<div
    x-data="catalogoFiltro"
    class="relative"
>
    <x-agendamento.menu-categoria :categories="$categories" />

    <x-agendamento.catalogo-service :services="$services" />

</div>


<div
    x-data="drawerAgendamento"
>
    <x-agendamento.drawer-agendamento />

</div>


</x-app-layout>