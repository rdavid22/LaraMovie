<section id="{{ $section_name }}">
    <div class="flex flex-col  pt-32 lg:pt-24">
        
        @if (isset($homepage) == false)
            <div class="flex flex-col tracking-widest font-roboto mx-5 text-white items-center md:items-start md:w-11/12 md:mx-auto">
                <div class="text-lg">
                    <a href=" {{ Route('home') }} ">Kezdőlap &gt; </a>
                    <a href=" {{ Route('all_movie') }} ">Filmek &gt; </a>
                    @if(isset($count_of_result) == false)
                        <span>Kategória &gt;</span>
                    @endif
                    {{$slider_heading}} 
                </div>
                
                <div class="flex flex-col md:flex-row md:space-x-5 flex-wrap items-center">
                    <x-cinema.category-filter />
                    <x-cinema.search-bar />
                </div>

                @if(isset($count_of_result))
                    <p class="my-5">Eredmény: {{$count_of_result}} találat</p>
                @endif
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
