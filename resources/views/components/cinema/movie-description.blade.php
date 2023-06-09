@php
    
    $image_to_load = '';
    
    if ($singleMovie->age == 6) {
        $image_to_load = Vite::asset('resources/img/ratings/6.webp');
    } elseif ($singleMovie->age == 12) {
        $image_to_load = Vite::asset('resources/img/ratings/12.webp');
    } elseif ($singleMovie->age == 16) {
        $image_to_load = Vite::asset('resources/img/ratings/16.webp');
    } else {
        $image_to_load = Vite::asset('resources/img/ratings/18.webp');
    }
    
@endphp


<section id="movie_description"
    class="flex flex-col font-roboto tracking-widest max-w-screen-lg mx-auto space-y-5 flex-wrap min-h-screen text-xl items-center justify-center text-white pt-20 pb-10 md:pt-40 mt:pb-20 px-3 md:px-20">

    <x-cinema.flash />
    {{-- Előző oldalak --}}
    <div class="text-lg self-start tracking-widest">
        <a href=" {{ Route('home') }} ">Kezdőlap &gt; </a>
        <a href=" {{ Route('all_movie') }} ">Filmek &gt; </a>
        {{ $singleMovie->title }}
    </div>

    {{-- Film címe és foglalás gomb --}}
    <div class="flex flex-row flex-wrap space-y-5 sm:space-y-0 justify-center sm:justify-between w-full">
        <div class="flex flex-row  justify-around sm:space-x-2 sm:justify-start w-full sm:w-auto">
            <div class="font-cheeky text-5xl sm:w-max ">{{ $singleMovie->title }}</div>
            <img src="{{ $image_to_load }}" class="w-6 h-6 my-auto">
        </div>
        <a href="#screentimes" class="font-sans p-3 text-red-600 outline outline-2 outline-red-600 hover:bg-red-600 hover:text-white transition-all rounded-sm tracking-widest">Jegyfoglalás</a>
    </div>

    {{-- Előzetes videó --}}
    <iframe class="w-full  aspect-video" src="{{ $singleMovie->trailer }}" title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>

    <x-cinema.edit-delete-card :singleMovie="$singleMovie" />

    {{-- Leírás és ikonok --}}
    <div class="self-center font-cheeky text-4xl py-5">Leírás</div>

    {{-- Leírás szöveg --}}
    <div
        class="flex flex-row flex-wrap md:flex-nowrap justify-center space-y-5 md:space-y-0 md:justify-between md:space-x-5 lg:space-x-0 w-full">
        <div class="flex flex-col justify-evenly space-y-5 mx-5 md:mx-0">
            <div class="font-roboto-bold flex flex-row justify-between">
                <div>Játékidő: {{ $singleMovie->length }} perc</div>
                <div></div>
            </div>
            <p class="text-justify max-w-lg text-base">{{ $singleMovie->description }}</p>
            <table class="table-auto text-base max-w-lg">
                <tbody>
                    <tr>
                        <td>Eredeti cím:</td>
                        <td>{{ $singleMovie->title }}</td>
                    </tr>
                    <tr>
                        <td>Premier</td>
                        <td>{{ $singleMovie->premier }}</td>
                    </tr>
                    <tr>
                        <td>Műfaj</td>
                        <td>{{ $singleMovie->genre }}</td>
                    </tr>
                    <tr>
                        <td>Szereplők</td>
                        <td>{{ $singleMovie->cast }}</td>
                    </tr>
                    <tr>
                        <td>Rendező</td>
                        <td>{{ $singleMovie->director }}</td>
                    </tr>
                    <tr>
                        <td>Korhatár</td>
                        <td>{{ $singleMovie->age }}</td>
                    </tr>
                    <tr>
                        <td>Rendező</td>
                        <td>{{ $singleMovie->director }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <img src="{{ $singleMovie->cover_big ? asset('storage/' . $singleMovie->cover_big) : Vite::asset('resources/img/default.jpg') }}"
                class="m-auto">
        </div>
    </div>

    
</section>
<x-cinema.screentime-card :movie="$singleMovie" />
<x-cinema.footer />
