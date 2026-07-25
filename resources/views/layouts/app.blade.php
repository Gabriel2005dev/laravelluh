<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta 
        name="viewport" 
        content="width=device-width, initial-scale=1, viewport-fit=cover"
    >

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ $title ?? config('app.name', 'Studio Luh') }}</title>


    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600;700&display=swap"
        rel="stylesheet"
    />


    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link 
        rel="preconnect" 
        href="https://fonts.gstatic.com" 
        crossorigin
    >

    <link 
        href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@400;700&display=swap" 
        rel="stylesheet"
    >


    <!-- Scripts -->

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>


<body 

    class="
        min-h-screen
        font-sans
        antialiased
        text-gray-900
        pb-[env(safe-area-inset-bottom)]
    "

>


    {{-- Header --}}

    <x-layout.header />



    {{-- Conteúdo --}}

    <main 

        class="
            pb-24
            lg:pb-0
        "

    >

        {{ $slot }}

    </main>



    <x-layout.footer />


    <x-layout.bottom-navigation />


</body>

</html>