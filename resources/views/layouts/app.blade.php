<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, viewport-fit=cover"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <meta 
        name="user-authenticated"
        content="{{ auth()->check() ? 'true' : 'false' }}"
    >

    @auth
        <meta name="user-name" content="{{ auth()->user()->name }}">
        <meta name="user-email" content="{{ auth()->user()->email }}">
    @endauth

    

    <title>{{ $title ?? config('app.name', 'Studio Luh') }}</title>

    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Great+Vibes&display=swap" rel="stylesheet">


    

    <!-- Scripts -->

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body
    class="
        min-h-screen
        antialiased
        text-zinc-900
        bg-white
        font-body
        pb-[env(safe-area-inset-bottom)]
    "
>

    {{-- Header --}}
    <x-layout.header />

    {{-- Conteúdo --}}
    <main
        class="
        mt-20
            pb-24
            lg:pb-0
        "
    >
        {{ $slot }}
    </main>

   

</body>

</html>