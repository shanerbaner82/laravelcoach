<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <meta name="application-name" content="{{ config('app.name') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ config('app.name') }}</title>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Doto:wght@100..900&display=swap" rel="stylesheet">

        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/og.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <meta name="title" content="Laravel Coach – Level Up Your Laravel Skills">
        <meta name="description" content="Join Laravel Coach to enhance your Laravel skills, work through real-world projects, and get answers to your coding questions. Learn, build, and grow with a supportive community of junior developers.">
        <meta name="keywords" content="Laravel, Laravel coaching, junior developers, learn Laravel, PHP development, Laravel projects, Laravel tutorials, coding guidance, developer growth">
        <meta name="author" content="Laravel Coach">
        <meta name="robots" content="index, follow">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://laravelcoach.com/">
        <meta property="og:title" content="Laravel Coach – Level Up Your Laravel Skills">
        <meta property="og:description" content="Join Laravel Coach to enhance your Laravel skills, work through real-world projects, and get answers to your coding questions. Learn, build, and grow with a supportive community of junior developers.">
        <meta property="og:image" content="https://laravelcoach.com/og.png">
        <meta property="og:logo" content="https://laravelcoach.com/og.png" />


        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://laravelcoach.com/">
        <meta property="twitter:title" content="Laravel Coach – Level Up Your Laravel Skills">
        <meta property="twitter:description" content="Join Laravel Coach to enhance your Laravel skills, work through real-world projects, and get answers to your coding questions. Learn, build, and grow with a supportive community of junior developers.">
        <meta property="twitter:image" content="https://laravelcoach.com/og.png">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-7YTCMGTHKB"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-7YTCMGTHKB');
        </script>

        @filamentStyles
        @vite('resources/css/app.css')
    </head>

    <body class="antialiased font-sans dark bg-gradient-to-br from-indigo-600 from-30% via-sky-500 via-70% to-indigo-400 to-90%">
        {{ $slot }}

        @livewire('notifications')

        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>
