<nav id="heromenu"
    class="fixed z-50 top-0 flex w-full items-center justify-between text-white focus:text-yellow-300 md:flex-wrap md:justify-start bg-black shadow-lg"
    data-te-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between m-5">

        <!-- Hamburger icon -->
        <div class="flex items-center h-6 w-6 justify-center hamburger-icon lg:hidden m-2" id="burgir"
            data-te-collapse-init data-te-target="#navbarSupportedContentX" aria-controls="navbarSupportedContentX"
            aria-expanded="false" aria-label="Toggle navigation">
            <div class="icon-1" id="a"></div>
            <div class="icon-2" id="b"></div>
            <div class="icon-3" id="c"></div>
            <div class="clear"></div>
        </div>
        <!-- Hamburger icon -->

        <!-- Links -->
        <div class="!visible hidden grow basis-[100%] items-center lg:!flex lg:basis-auto mt-5 lg:mt-0 md:justify-center"
            id="navbarSupportedContentX" data-te-collapse-item>
            <ul class="flex flex-col lg:flex-row text-3xl lg:space-x-2 lg:space-y-0 space-y-3 " data-te-navbar-nav-ref>
                <li data-te-nav-item-ref>
                    <a href="{{ url('/') }}"
                        class="block transition duration-150 ease-in-out text-xl text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 p-2"
                        data-te-nav-link-ref data-te-ripple-init>
                        Kezdőlap
                    </a>
                </li>
                <li data-te-nav-item-ref>
                    <a href="{{ route('all_movie') }}"
                        class="block transition duration-150 ease-in-out text-xl text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 p-2"
                        data-te-nav-link-ref data-te-ripple-init>
                        Filmek
                    </a>
                </li>
                @if (Auth::check() && Auth::user()->is_admin)
                    <li data-te-nav-item-ref>
                        <a href="{{ Route('admin.index') }}"
                            class="block transition duration-150 ease-in-out text-xl text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 p-2"
                            data-te-nav-link-ref data-te-ripple-init>
                            Vezérlőpult
                        </a>
                    </li>
                @endif
                @if (Auth::check())
                    @if (Auth::user()->is_admin == false)
                        <li data-te-nav-item-ref>
                            <a href="{{ route('reservations.index') }}"
                                class="block transition duration-150 ease-in-out text-xl text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 p-2"
                                data-te-nav-link-ref data-te-ripple-init>
                                Foglalásaim
                            </a>
                        </li>
                        <li data-te-nav-item-ref>
                            <a href="{{ route('profile.edit') }}"
                                class="block transition duration-150 ease-in-out text-xl text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 p-2"
                                data-te-nav-link-ref data-te-ripple-init>
                                Fiókom
                            </a>
                        </li>
                    @endif
                    <li data-te-nav-item-ref>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                class="block transition duration-150 ease-in-out text-xl text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 p-2"
                                data-te-nav-link-ref data-te-ripple-init
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                @else
                    <li data-te-nav-item-ref>
                        <a href="{{ route('login') }}"
                            class="block transition duration-150 ease-in-out text-xl text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 p-2"
                            data-te-nav-link-ref data-te-ripple-init>
                            Bejelentkezés
                        </a>
                    </li>
                    <li data-te-nav-item-ref>
                        <a href="{{ route('register') }}"
                            class="block transition duration-150 ease-in-out text-xl text-white hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 p-2"
                            data-te-nav-link-ref data-te-ripple-init>
                            Regisztráció
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
