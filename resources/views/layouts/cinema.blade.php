<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/movieslider.js')
    @vite('resources/js/hamburger.js')
</head>

<body class="antialiased bg-black min-h-screen">
    @yield('content')
</body>

</html>
