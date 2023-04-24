<x-cinema.navigation />
<section class="text-white bg-fixed relative overflow-hidden bg-no-repeat bg-cover"
    style="
        background-position: 50%;
        background-image: url('{{ Vite::asset('resources/img/default.webp') }}');
        height: 100vh;
        ">
    <x-cinema.flash />
    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed">
        <!-- Hero text -->
        <div id="heroText"
            class="flex flex-col w-screen text-center justify-center items-center h-full text-7xl md:text-8xl lg:text-9xl font-bold tracking-normal">
            <!-- LaraMovie text -->
            <span class="py-10  tracking-widest">Lara<span class="text-red-600">Movie</span></span>

            <!-- Animated text -->
            <div class="h-auto w-auto">
                <div class=" h-full w-full text-4xl md:text-5xl lg:text-6xl ">
                    <span id="typedTextLandingPage">A TE mozid</span>
                </div>
            </div>
        </div>

        <!-- Bouncy arrow -->
        <div class="absolute flex justify-center w-screen bottom-14">

            @if (Route::is('all_movie'))
                <a href="#movies">
                    <svg class="relative inline-block animate-bounce w-10 h-10" fill="none" viewBox="0 0 24 24"
                        strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M15.75 17.25L12 21m0 0l-3.75-3.75M12 21V3" />
                    </svg>
                </a>
            @elseif(Route::is('home'))
                <a href="#family_movies">
                    <svg class="relative inline-block animate-bounce w-10 h-10" fill="none" viewBox="0 0 24 24"
                        strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M15.75 17.25L12 21m0 0l-3.75-3.75M12 21V3" />
                    </svg>
                </a>
            @endif
        </div>
    </div>
</section>
