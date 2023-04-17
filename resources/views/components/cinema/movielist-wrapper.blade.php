<section id="{{ $section_name }}">
    <div class="flex flex-col h-screen justify-around">
        <div class="text-4xl tracking-widest text-red-500 mt-48 text-center md:text-start md:ml-20">{{ $slider_heading }}
        </div>
        <section class="splide bg-dark w-full mx-auto mb-20">
            <div class="splide__track my-10">
                <ul class="splide__list">
                    @foreach ($moviesArray as $movie)
                        
                        {{-- Show all available movies --}}
                        @if ($filter_by == 'none')
                            <x-cinema.movielist :movieAttr="$movie" />
                            
                        {{-- Show movies which contains a specific genre --}}
                        @elseif (Str::contains($movie->genre,explode(',',$filter_by)))
                            <x-cinema.movielist :movieAttr="$movie" />
                        @endif

                    @endforeach
                </ul>
            </div>
            <div class="bg-gray-400 w-1/2 mx-auto">
                <div class="bg-yellow-400 h-0.5  transition-all w-0 my-carousel-progress-bar"></div>
            </div>
        </section>
    </div>
</section>
