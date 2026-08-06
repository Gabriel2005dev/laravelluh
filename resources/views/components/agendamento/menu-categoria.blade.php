@props(['categories'])


<div class="fixed inset-x-0 top-16 z-50 pointer-events-none sm:top-20">


<div class="mx-auto flex max-w-7xl justify-end px-6 py-3">


<div

x-data="{ active:null }"

@click.outside="active=null"

class="pointer-events-auto flex items-center gap-3 rounded-full border border-zinc-300 bg-white p-1.5 shadow-sm backdrop-blur-xl"

>

{{-- =====================================================
    CATEGORIAS
===================================================== --}}


@foreach($categories as $category)


<div class="relative">



{{-- =====================================================
    CATEGORIA PRINCIPAL
===================================================== --}}


<button

@click="

active === '{{ $category->slug }}'

? active=null

: active='{{ $category->slug }}';

selecionarCategoria('{{ $category->slug }}');
"

class="group flex h-8 w-8 items-center justify-center rounded-full transition-all duration-300 hover:scale-[1.04] hover:bg-rose-200 sm:h-9 sm:w-9 lg:h-10 lg:w-10"

>


<img

src="{{ asset('images/icons/icons-category/'.$category['icon']) }}"

alt="{{ $category->name }}"

class="h-5 w-5 object-contain transition-transform duration-500 group-hover:scale-[1.08]"

>


</button>






{{-- =====================================================
    SUBCATEGORIAS
===================================================== --}}


<div

x-show="active === '{{ $category->slug }}'"
x-cloak

x-transition:enter="transition ease-out duration-300"

x-transition:enter-start="opacity-0 -translate-y-2 scale-90"

x-transition:enter-end="opacity-100 translate-y-0 scale-100"

x-transition:leave="transition ease-in duration-200"

x-transition:leave-start="opacity-100 translate-y-0 scale-100"

x-transition:leave-end="opacity-0 -translate-y-1 scale-95"

class="absolute left-1/2 top-12 -translate-x-1/2 transform sm:top-14"

>


<div class="flex flex-col items-center gap-3 rounded-full border border-zinc-300 bg-white p-1.5 shadow-lg">



@foreach($category->subcategories as $item)

<button

@click="

selecionarSubcategoria(
    '{{ $category->slug }}',
    '{{ $item->slug }}'
);

active=null;

"

class="group flex h-8 h-8 w-8 items-center justify-center rounded-full transition-all duration-300 hover:scale-[1.04] hover:bg-rose-200 sm:h-9 sm:w-9 lg:h-10 lg:w-10"

>


<img

src="{{ asset('images/icons/icons-subcategory/'.$item['icon']) }}"

alt="{{ $item->name }}"

class="h-5 w-5 object-contain transition-transform duration-500 group-hover:scale-[1.08]"

>


</button>



@endforeach





</div>


</div>



</div>



@endforeach

{{-- =====================================================
    LIMPAR FILTRO
===================================================== --}}


<button

@click="
limparFiltro();
active=null;
"

class="flex h-8 w-8 items-center justify-center rounded-full transition-all duration-300 hover:scale-105 hover:bg-orange-100 sm:h-9 sm:w-9 lg:h-10 lg:w-10"

title="Mostrar todos"

>

<span class="text-sm font-semibold text-zinc-700">

✕

</span>


</button>



</div>


</div>


</div>