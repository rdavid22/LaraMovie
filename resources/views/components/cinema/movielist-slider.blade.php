<div class="splide__slide hover:bg-gray-600 p-3 rounded-lg">
    <a href="{{ '/filmek/' . $movieAttr->title }}">
        <img class="mx-auto" src="{{ $movieAttr->cover ? asset('storage/' . $movieAttr->cover) : Vite::asset('resources/img/default.jpg') }}">

        <div class=" text-white py-2 text-sm text-start w-48 truncate" id="splide_movie_description">
            <p class="font-roboto text-lg truncate" >{{ $movieAttr->title }}</p>
            <p class="font-roboto text-sm truncate">{{ $movieAttr->genre }}</p>
            <p class=" text-sm">Premier: {{ $movieAttr->premier }}</p>
        </div>

        <button class="bg-yellow-500 rounded-md px-5 py-2 text-black tracking-wide w-full">
            jegyek
        </button>
    </a>
</div>
