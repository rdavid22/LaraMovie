<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/movieslider.js'])
</head>


<body class="antialiased bg-black">
    <x-cinema.hero />
    <section id="body" class="min-h-screen md:p-10">
        <div class="flex flex-col items-center text-center mb-10">
            <div class="text-4xl tracking-widest text-red-500 my-10">Filmek</div>

            {{-- Akciófilmek --}}
            <section class="splide bg-dark max-w-screen-lg mx-auto">
                <div class="splide__track my-10">
                    <ul class="splide__list">
                        @foreach ($movies as $movie)
                            @if ($movie['genre'] == 'Akció')
                            <x-cinema.movielist>
                                <x-slot name="cover">{{ $movie['cover'] }}</x-slot>
                                <x-slot name="title">{{ $movie['title'] }}</x-slot>
                                <x-slot name="genre">{{ $movie['genre'] }}</x-slot>
                                <x-slot name="year">{{ $movie['year'] }}</x-slot>
                            </x-cinema.movielist>
                            @endif
                        @endforeach
                    </ul>
                </div>

                <!-- Add the progress bar element -->
                <div class="bg-gray-400">
                    <div class="bg-yellow-400 h-0.5  transition-all w-0 my-carousel-progress-bar"></div>
                </div>
            </section>

        </div>
    </section>
</body>

</html>
