<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="antialiased bg-black min-h-screen">
    <section id="admin_panel" class="flex flex-row min-h-screen w-full bg-gray-200 font-roboto ">

        {{-- Side panel --}}
        <div
            class="bg-gray-800 w-0 invisible lg:w-1/5 lg:visible text-white py-8 transition-all duration-300 text-center">
            <div class="text-lg text-gray-400 mb-1">Vezérlőpult </div>
            <div class="text-2xl text-yellow-300">Üdvözöljük, {{ Auth::user()->name }}! </div>
            <hr class="my-2 mt-6">

            <a href="{{ Route('home') }}"
                class="block w-3/4 mx-auto cursor-pointer my-4 p-2 transition duration-500 text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500">
                Kezdőlap
            </a>
            <a href="{{Route('admin.finances')}}"
                class="block w-3/4 mx-auto cursor-pointer my-4 p-2 transition duration-500 text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500">
                Pénzügyek
            </a>
            <a href="{{Route('admin.users')}}"
                class="block w-3/4 mx-auto cursor-pointer my-4 p-2 transition duration-500 text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500">
                Felhasználók
            </a>
            <a href="#!"
                class="block w-3/4 mx-auto cursor-pointer my-4 p-2 transition duration-500 text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500">
                Filmek
            </a>
            <a href="#!"
                class="block w-3/4 mx-auto cursor-pointer my-4 p-2 transition duration-500 text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500">
                Vetítések
            </a>
            <a href="#!"
                class="block w-3/4 mx-auto cursor-pointer my-4 p-2 transition duration-500 text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500">
                Fiókom
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="{{ route('logout') }}"
                    class="block w-3/4 mx-auto cursor-pointer my-4 p-2 transition duration-500 text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500"
                    onclick="event.preventDefault();
                            this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
        </div>

        {{-- Dashboard screen --}}
        <div class="w-full lg:w-4/5 mx-auto">
            <div class="text-xl text-start lg:py-8 h-0 invisible lg:visible lg:h-auto bg-white  shadow-lg px-5">
                <a href="{{ Route('home') }}">Kezdőlap</a> &gt;
                <a href="{{ Route('admin.index') }}">vezérlőpult</a>
            </div>

            @yield('content')
        </div>
    </section>
</body>
</html>
