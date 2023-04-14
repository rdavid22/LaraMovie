<div class="flex flex-col fixed top-0 left-0 right-0 tracking-widest">
    <div class="text-center p-8 bg-black">
        @auth
            <a href="{{ url('/home') }}"
                class="text-xl text-white hover:text-red-500 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
        @else
            <a href="{{ route('login') }}"
                class="text-xl text-white hover:text-red-500 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Bejelentkezés</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 text-xl text-white hover:text-red-500 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Regisztráció</a>
            @endif
        @endauth
    </div>

    <div class="bg-yellow-500">
        <div class="max-w-md mx-auto flex justify-around text-lg text-black">
            <a href="#" class="border-x border-l-black border-r-black my-2.5 p-2.5 hover:text-white">Ajánló</a>
            <a href="#" class="border-x border-l-black border-r-black my-2.5 p-2.5 hover:text-white">Legújabbak</a>
            <a href="#" class="border-x border-l-black border-r-black my-2.5 p-2.5 hover:text-white">IMAX</a>
            <a href="#" class="border-x border-l-black border-r-black my-2.5 p-2.5 hover:text-white">5D</a>
        </div>
    </div>
</div>
