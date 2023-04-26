<div class="visible lg:invisible lg:h-0 bg-black">
    <div class="text-gray-400 text-center pt-2">Gyorslinkek</div>
    <div class="flex flex-row justify-center flex-wrap">
        <a href="{{ Route('home') }}"
            class="block cursor-pointer my-4 p-2 mt-0 transition duration-500 text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500">
            Kezdőlap
        </a>
        <a href="{{Route('admin.finances')}}"
            class="block cursor-pointer my-4 p-2 mt-0 transition duration-500 text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500">
            Pénzügyek
        </a>
        <a href="#!"
            class="block cursor-pointer my-4 p-2 mt-0 transition duration-500 text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500">
            Felhasználók
        </a>
        <a href="#!"
            class="block cursor-pointer my-4 p-2 mt-0 transition duration-500 text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500">
            Filmek
        </a>
        <a href="#!"
            class="block cursor-pointer my-4 p-2 mt-0 transition duration-500 text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500">
            Vetítések
        </a>
        <a href="#!"
            class="block cursor-pointer my-4 p-2 mt-0 transition duration-500 text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500">
            Fiókom
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="{{ route('logout') }}"
                class="block cursor-pointer my-4 p-2 mt-0 transition duration-500 text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500"
                onclick="event.preventDefault();
                        this.closest('form').submit();">
                {{ __('Log Out') }}
            </a>
        </form>
    </div>
</div>
