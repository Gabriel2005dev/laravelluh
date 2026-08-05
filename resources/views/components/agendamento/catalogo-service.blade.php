{{-- =====================================================
    CATÁLOGO DE SERVIÇOS
====================================================== --}}


@php

use App\Data\Services;

$services = Services::all();

@endphp



<section class="pb-20">


<div class="mx-auto max-w-7xl px-2">



<h1 class="p-5 text-center text-3xl font-semibold text-zinc-900">

Escolha seu serviço

</h1>




<div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-2">



@foreach($services as $service)



<div

x-show="

(
    !categoriaSelecionada

    ||

    categoriaSelecionada === '{{ $service['category'] }}'

)

&&

(

    !subcategoriaSelecionada

    ||

    subcategoriaSelecionada === '{{ $service['subcategory'] }}'

)

"

x-transition

>


<x-agendamento.card-service

    :service="$service"

/>


</div>



@endforeach



</div>



</div>


</section>