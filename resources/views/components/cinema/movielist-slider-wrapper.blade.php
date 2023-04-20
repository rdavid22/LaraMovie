<section id="{{ $section_name }}">
    <div class="flex flex-col h-screen pt-32 lg:pt-24">
        
        @if (isset($homepage) == false)
            <div class="flex flex-col tracking-widest font-roboto mx-5 text-white items-center md:items-start md:w-11/12 md:mx-auto">
                <div class="text-lg">
                    <a href=" {{ Route('home') }} ">Kezdőlap &gt; </a>
                    <a href=" {{ Route('all_movie') }} ">Filmek &gt; </a>
                    <span>Kategória &gt;</span>
                    {{$slider_heading}} 
                </div>
                <x-cinema.category-filter />
            </div>
        @endif

        <div class="text-4xl self-center tracking-widest text-red-500 text-center">{{ $slider_heading }} </div>
        <section class="splide bg-dark w-full mx-auto mb-20">
            <div class="splide__track my-10">
                <ul class="splide__list">
                    @foreach ($moviesArray as $movie)
                        <x-cinema.movielist-slider :movieAttr="$movie" />
                    @endforeach
                </ul>
            </div>
            <div class="bg-gray-400 w-1/2 mx-auto">
                <div class="bg-yellow-400 h-0.5  transition-all w-0 my-carousel-progress-bar"></div>
            </div>
        </section>
    </div>
</section>
