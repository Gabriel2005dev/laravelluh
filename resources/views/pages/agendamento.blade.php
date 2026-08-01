<x-app-layout>


<div

x-data="
{
    categoriaSelecionada:'hair',
    subcategoriaSelecionada:'hair-cut',
    servicoSelecionado:null
}

"

class="relative min-h-screen bg-zinc-50"


>


<x-agendamento.menu-categoria />


<x-agendamento.catalogo-service />


<x-agendamento.drawer-agendamento />


</div>


</x-app-layout>