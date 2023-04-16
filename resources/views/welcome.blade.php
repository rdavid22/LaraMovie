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
    <section id="action_movies">
        <div class="flex flex-col h-screen justify-around">
            <div class="text-4xl tracking-widest text-red-500 mt-48 text-center md:text-start md:ml-20">Akció</div>

            <!-- Akciófilmek -->
            <section class="splide bg-dark w-full mx-auto mb-20">
                <div class="splide__track my-10">
                    <ul class="splide__list">
                        @foreach ($movies as $movie)
                            @if ($movie['genre'] == 'Akciófilm')
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
                <div class="bg-gray-400 w-1/2 mx-auto">
                    <div class="bg-yellow-400 h-0.5  transition-all w-0 my-carousel-progress-bar"></div>
                </div>
            </section>

        </div>
    </section>
</body>

</html>
