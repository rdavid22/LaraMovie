<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-red-500 antialiased h-screen ">
    <x-cinema.header />
    <section id="login_register_form" class="flex bg-default-image h-[calc(100vh-92px)] overflow-auto">
        <div class="flex flex-col justify-center items-center pt-6 sm:pt-0 m-auto">
            <div>
                <a href="/">
                    <x-application-logo class="h-10 sm:h-16" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden">
                {{ $slot }}
            </div>
        </div>
    </section>
</body>

</html>
