
<div class="flex flex-col h-screen pt-32 lg:pt-24">
    
    <div class="flex flex-col tracking-widest font-roboto mx-5 text-white items-center md:items-start md:w-11/12 md:mx-auto">
        <div class="text-lg">
            <a href=" {{ Route('home') }} ">Kezdőlap &gt; </a>
            <a href=" {{ Route('all_movie') }} ">Filmek &gt; </a>
            Összes
        </div>
        <x-cinema.category-filter />
    </div>

    <div class="text-4xl tracking-widest text-red-500 text-center">Összes film</div>
    <div class="grid grid-flow-row grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4 my-10 max-w-screen-2xl mx-auto">
        @foreach ($movies as $movie)
            <div class="p-3 rounded-lg hover:bg-gray-600 w-fit mx-auto">
                <a href="/filmek/{{ $movie->title }}" tabindex="-1">
                    <img class="mx-auto" src="{{ $movie->cover }}">

                    <div class="text-white py-2 text-start ">
                        <p>{{ $movie->title }}</p>
                        <p class="text-gray-300 text-sm truncate">{{ $movie->genre }}</p>
                        <p class="text-gray-300 text-sm">{{ $movie->year }}</p>
                    </div>

                    <button class="bg-yellow-500 rounded-md px-5 py-2 text-black tracking-wide w-full" tabindex="-1">
                        jegyek
                    </button>
                </a>
            </div>
        @endforeach
    </div>
    <x-cinema.footer />
</div>

