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
    class="flex flex-col tracking-widest max-w-screen-lg mx-auto space-y-5 flex-wrap min-h-screen text-xl items-center justify-center text-red-600 pt-20 px-20">

    {{-- Előző oldalak --}}
    <div class="text-lg self-start tracking-widest">
        <a href=" {{ Route('home') }} ">Kezdőlap &gt; </a>
        <a href=" {{ Route('all_movie') }} ">Filmek &gt; </a>
        {{ $singleMovie->title }}
    </div>

    {{-- Film címe és vásárlás gomb --}}
    <div class="flex flex-row justify-between w-full">
        <div class="flex flex-row space-x-2">
            <div class="text-5xl">{{ $singleMovie->title }}</div>
            <img src="{{ $image_to_load }}" class="w-6 h-6 my-auto">
        </div>
        <button class="p-3 text-red-500 outline outline-2 outline-red-500 hover:bg-red-600 hover:text-white transition-all rounded-sm tracking-wider">Jegyvásárlás</button>
    </div>

    {{-- Előzetes videó --}}
    <iframe class="w-full  aspect-video" src="{{ $singleMovie->trailer }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    {{-- Leírás és ikonok --}}
    <div class="self-start text-4xl py-5">Leírás: {{ $singleMovie->title }}</div>

    {{-- Leírás szöveg --}}
    <div class="flex flex-row flex-wrap justify-between w-full">
        <div class="flex flex-col">
            <div class="flex flex-row justify-between">
              <div>Játékidő: {{$singleMovie->length}} perc</div>
              <div></div>
            </div>
            <div>asd</div>
            <table class="table-auto">
                <tbody>
                    <tr>
                        <td>Eredeti cím:</td>
                        <td>{{ $singleMovie->title }}</td>
                    </tr>
                    <tr>
                        <td>Évszám</td>
                        <td>{{ $singleMovie->year }}</td>
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
        <div class="">
            <img src="{{ $singleMovie->cover_big }}">
        </div>
    </div>
</section>
