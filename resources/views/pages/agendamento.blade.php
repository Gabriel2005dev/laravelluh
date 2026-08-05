<x-app-layout>


<div
    x-data="catalogoFiltro"
    class="relative"
>


    <x-agendamento.menu-categoria />

    <x-agendamento.catalogo-service />


</div>




<div
    x-data="drawerAgendamento"
>


    <x-agendamento.drawer-agendamento />


</div>


</x-app-layout>