{{-- Floating Category Menu Component --}}

<div 
    class="fixed inset-x-0 top-16 sm:top-20 z-50 pointer-events-none"
>


<div 

class="
mx-auto 
flex 
max-w-7xl 
justify-end 
px-6 
py-3
"

>


<div

x-data="{ active:null }"

@click.outside="active=null"


class="
pointer-events-auto
flex
items-center
gap-3
rounded-full
border
border-zinc-300
bg-white/90
p-1.5
backdrop-blur-xl
shadow-sm
"


>


@php

$categories = [


[
'id'=>'hair',
'icon'=>'cabelo.svg',
'name'=>'Cabelo',

'items'=>[

[
'id'=>'hair-cut',
'name'=>'Corte',
'icon'=>'cabelo-corte.svg'
],

[
'id'=>'hair-brush',
'name'=>'Escova',
'icon'=>'cabelo-prancha.svg'
]

]

],



[
'id'=>'eyes',
'icon'=>'olho.svg',
'name'=>'Olhos',

'items'=>[

[
'id'=>'eyelashes',
'name'=>'Cílios',
'icon'=>'olho-cilios.svg'
],

[
'id'=>'eyebrow',
'name'=>'Sobrancelha',
'icon'=>'olho-sobrancelha.svg'
]

]

],



[
'id'=>'nails',
'icon'=>'unha.svg',
'name'=>'Unhas',

'items'=>[

[
'id'=>'nails-polish',
'name'=>'Esmaltação',
'icon'=>'unha-esmalte.svg'
]

]

],



[
'id'=>'makeup',
'icon'=>'makeup-brush.svg',
'name'=>'Maquiagem',

'items'=>[

[
'id'=>'make-social',
'name'=>'Social',
'icon'=>'makeup-brush.svg'
]

]

]


];


@endphp




@foreach($categories as $category)


<div class="relative">



{{-- Categoria principal --}}

<button


@click="
active === '{{ $category['id'] }}'
?
active=null
:
active='{{ $category['id'] }}'
"


class="
group
flex
h-8
w-8
sm:h-9
sm:w-9
lg:h-10
lg:w-10
items-center
justify-center
rounded-full
transition-all
duration-300
hover:bg-orange-50
hover:scale-105
"


>


<img

src="{{asset('images/icons/'.$category['icon'])}}"

class="
h-5
w-5
sm:h-6
sm:w-6
object-contain
transition-transform
duration-300
group-hover:scale-110
"


alt=""

>


</button>





{{-- Submenu --}}

<div


x-show="
active === '{{ $category['id'] }}'
"


x-transition


x-cloak


class="
absolute
left-1/2
top-12
sm:top-14
-translate-x-1/2
"


>



<div

class="
flex
flex-col
items-center
gap-3
rounded-full
border
border-zinc-300
bg-white
p-1.5
shadow-lg
"


>



@foreach($category['items'] as $item)



<button


@click="

categoriaSelecionada='{{ $category['id'] }}';

subcategoriaSelecionada='{{ $item['id'] }}';

active=null;

"


class="
group
flex
h-8
w-8
sm:h-9
sm:w-9
lg:h-10
lg:w-10
items-center
justify-center
rounded-full
transition-all
duration-300
hover:bg-orange-50
hover:scale-105
"


>


<img


src="{{asset('images/icons/'.$item['icon'])}}"


class="
h-5
w-5
sm:h-6
sm:w-6
object-contain
transition-transform
duration-300
group-hover:scale-110
"


alt="{{ $item['name'] }}"


>


</button>



@endforeach



</div>



</div>



</div>



@endforeach



</div>



</div>


</div>