@php

$mobileItems = [

    [
        'label' => 'Home',
        'icon' => 'home.png',
        'href' => route('home'),
        'active' => request()->routeIs('home'),
    ],

    [
        'label' => 'Serviços',
        'icon' => 'service.png',
        'href' => route('services'),
        'active' => request()->routeIs('services'),
    ],

    [
        'label' => 'Galeria',
        'icon' => 'gallery.png',
        'href' => url('/#galeria'),
        'active' => false,
    ],

    [
        'label' => 'Sobre',
        'icon' => 'about.png',
        'href' => url('/#sobre'),
        'active' => false,
    ],

    [
        'label' => 'Contato',
        'icon' => 'contact.png',
        'href' => url('/#contato'),
        'active' => false,
    ],

];

@endphp



<nav

    class="
        fixed

        inset-x-0

        bottom-0

        z-50


        border-t

        border-zinc-200


        bg-white/95


        px-2



        shadow-[0_-8px_24px_rgba(15,23,42,0.08)]


        backdrop-blur-md


        lg:hidden
    "

>



<div

    class="
        mx-auto

        grid

        h-14

        max-w-md

        grid-cols-5

        items-center

    "

>



@foreach($mobileItems as $item)


<a

    href="{{ $item['href'] }}"

    title="{{ $item['label'] }}"


    class="

        group

        relative

        flex

        h-14

        items-center

        justify-center


        transition-all

        duration-300


        {{
            $item['active']

            ? '-translate-y-2'

            : 'hover:-translate-y-2'

        }}

    "

>



{{-- Ícone --}}

<div

    class="

        flex

        h-12

        w-12

        items-center

        justify-center


        rounded-full


        bg-white


        transition-all

        duration-300


        {{
            $item['active']

            ? 'scale-110 shadow-lg'

            : 'group-hover:scale-110 group-hover:shadow-lg'

        }}

    "

>


<img

    src="{{ asset('images/icons/'.$item['icon']) }}"

    alt="{{ $item['label'] }}"


    class="

        h-6

        w-6

        object-contain

        transition-transform

        duration-300

    "

>


</div>
</a>


@endforeach



</div>



</nav>