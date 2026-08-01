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

    {{-- Footer --}}
    <x-layout.footer />

</body>

</html>