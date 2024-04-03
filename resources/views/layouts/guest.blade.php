<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script defer src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@700&display=swap" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- OpenGraph meta tags -->
        <meta property="og:title" content="RSC Media - Website Development & Support">
        <meta property="og:description" content="Discover the power of RSC Media for comprehensive web solutions. From development to hosting, consultancy, and copywriting, we've got you covered. Elevate your digital presence today!">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://rscmedia.co.uk">
        <meta property="og:image" content="https://rscmedia.co.uk/assets/images/facebook-cover.jpg">
        <meta property="og:image:alt" content="RSC Media Logo">
        <meta property="og:site_name" content="RSC Media">

        <!-- Twitter Card meta tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="RSC Media - Website Development & Support">
        <meta name="twitter:description" content="Unlock the potential of your online presence with RSC Media. Web development, hosting, consultancy, and copywriting - we're your one-stop shop for digital success!">
        <meta name="twitter:image" content="https://rscmedia.co.uk/assets/images/facebook-cover.jpg">

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="antialiased">
            {{ $slot }}
        </div>
        <x-footer />
        @include('whatsappbutton')
        @livewireScripts
    </body>
</html>
