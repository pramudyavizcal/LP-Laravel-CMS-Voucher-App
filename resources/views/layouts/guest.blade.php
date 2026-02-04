<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta_title', $settings['site_name'] ?? config('app.name', 'Laravel'))</title>
    <meta name="description"
        content="@yield('meta_description', $settings['site_description'] ?? 'Top up voucher premium murah dan terpercaya.')">
    <meta name="keywords" content="{{ $settings['site_keywords'] ?? 'voucher, premium, topup, murah' }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('meta_title', $settings['site_name'] ?? config('app.name', 'Laravel'))">
    <meta property="og:description"
        content="@yield('meta_description', $settings['site_description'] ?? 'Top up voucher premium murah dan terpercaya.')">
    <meta property="og:image"
        content="{{ isset($settings['site_logo']) ? asset('storage/' . $settings['site_logo']) : asset('logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title"
        content="@yield('meta_title', $settings['site_name'] ?? config('app.name', 'Laravel'))">
    <meta property="twitter:description"
        content="@yield('meta_description', $settings['site_description'] ?? 'Top up voucher premium murah dan terpercaya.')">
    <meta property="twitter:image"
        content="{{ isset($settings['site_logo']) ? asset('storage/' . $settings['site_logo']) : asset('logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
</body>

</html>