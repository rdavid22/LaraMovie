<div class="flex flex-col tracking-widest">
    <div class="text-center p-8 bg-black">
        @auth
            <a href="{{ url('/home') }}"
                class="text-xl text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 p-2">Home</a>
        @else
            <a href="{{ route('login') }}"
                class="text-xl text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 p-2">Bejelentkezés</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 text-xl text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 p-2">Regisztráció</a>
            @endif
        @endauth
    </div>

    {{-- <div class="bg-yellow-500">
        <div class="max-w-md mx-auto flex justify-around text-lg text-black ">
            <a href="/filmek/osszes" class="border-x border-l-black border-r-black my-2.5 px-2 hover:text-white">Összes</a>
            <a href="#" class="border-x border-l-black border-r-black my-2.5 px-2 hover:text-white">Legújabbak</a>
            <a href="#" class="border-x border-l-black border-r-black my-2.5 px-2 hover:text-white">IMAX</a>
            <a href="#" class="border-x border-l-black border-r-black my-2.5 px-2 hover:text-white">5D</a>
        </div>
    </div> --}}
</div>
