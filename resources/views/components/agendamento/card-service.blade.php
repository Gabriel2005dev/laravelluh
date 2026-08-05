<div class="relative mt-10 overflow-visible rounded-3xl bg-white transition-all duration-300">


@php

$subcategoryIcons = [

    'cabelo-finalizacao' => 'cabelo-prancha.svg',
    'cabelo-tratamentos' => 'cabelo-hidratacao.svg',
    'cabelo-coloracao' => 'cabelo-coloracao.svg',
    'cabelo-alisamento' => 'cabelo-alisamento.svg',

    'unha-manicure' => 'unha-manicure.svg',
    'unha-alongamento' => 'unha-alongamento.svg',
    'unha-extras' => 'unha-extras.svg',

];

$serviceIcon = $subcategoryIcons[$service['subcategory']] ?? null;

@endphp



{{-- ÍCONE --}}

<div class="absolute left-1/2 top-0 z-20 flex h-12 w-12 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white sm:h-14 sm:w-14 lg:h-16 lg:w-16">

@if($serviceIcon)

<img
src="{{ asset('images/icons/'.$serviceIcon) }}"
alt="{{ $service['name'] }}"
class="h-6 w-6 object-contain sm:h-7 sm:w-7 lg:h-8 lg:w-8"
>

@endif

</div>




{{-- CARD INTERNO --}}

<div class="grid grid-cols-2 gap-2 sm:gap-3">



{{-- IMAGEM --}}

<div class="h-50 overflow-hidden rounded-3xl border border-rose-200 bg-rose-200 sm:h-72 lg:h-80">

<img
src="{{ asset('images/home/bannerhero.png') }}"
alt="{{ $service['name'] }}"
class="h-full w-full rounded-l-3xl object-cover object-center transition-transform duration-500 hover:scale-105"
>

</div>




{{-- INFORMAÇÕES --}}

<div class="rounded-3xl bg-zinc-100">


<div class="flex h-full flex-col p-3 sm:p-4 lg:p-5">



{{-- TEMPO --}}

<div class="flex justify-end">

<span class="rounded-full border border-zinc-300 px-2 py-1 text-[10px] font-medium text-zinc-500 sm:px-3 sm:text-xs lg:text-sm">

{{ $service['time'] }}

</span>

</div>




{{-- TEXTO --}}

<div class="mt-3 sm:mt-5 lg:mt-6">


<h4 class="font-title text-base font-semibold leading-tight text-zinc-900 sm:text-xl lg:text-3xl">

{{ $service['name'] }}

</h4>



<p class="mt-2 line-clamp-3 text-[11px] leading-4 text-zinc-600 sm:text-sm sm:leading-6">

{{ $service['description'] }}

</p>


</div>




{{-- FOOTER --}}

<div class="mt-auto flex flex-col gap-3 pt-4 sm:flex-row sm:items-end sm:justify-between sm:pt-6">



{{-- BOTÃO --}}

<a

@click="$dispatch(
    'abrir-drawer',
    {
        service: {{ Js::from($service) }}
    }
)"

class="group flex cursor-pointer items-center justify-center rounded-full border-2 border-orange-950 bg-orange-950 px-3 py-2 text-[10px] font-semibold text-white transition-all duration-300 hover:bg-transparent hover:text-orange-950 sm:px-4 sm:text-xs lg:px-6"

>

<span class="transition-transform duration-300 group-hover:-translate-y-1">

Agendar

</span>

</a>




{{-- PREÇO --}}

<div class="flex flex-col items-center font-bold text-orange-950">


<span class="text-xs sm:text-xs">

A partir de

</span>


<span class="text-xs leading-none sm:text-xl lg:text-xl">

{{ $service['price'] }}

</span>


</div>



</div>


</div>


</div>


</div>


</div>