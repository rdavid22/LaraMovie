<div class="splide__slide hover:bg-gray-600 p-3 rounded-lg">
    <a href="{{ '/filmek/' . $movieAttr->title }}">
        <img class="mx-auto" src="{{ $movieAttr->cover }}">

        <div class="text-white py-2 text-start ">
            <p>{{ $movieAttr->title }}</p>
            <p class="text-gray-300 text-sm truncate">{{ $movieAttr->genre }}</p>
            <p class="text-gray-300 text-sm">{{ $movieAttr->year }}</p>
        </div>

        <button class="bg-yellow-500 rounded-md px-5 py-2 text-black tracking-wide w-full">
            jegyek
        </button>
    </a>
</div>
