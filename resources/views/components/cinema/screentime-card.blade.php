<div id="screentimes"
    class="flex flex-col max-w-screen-xl mx-auto text-white font-roboto text-sm sm:text-md md:text-lg  tracking-widest px-5 pb-5">
    <div class="text-center px-5 pb-5 text-white text-4xl font-cheeky">Vetítések</div>
    @if (count($movie->screenTimes) != 0)
        @foreach ($movie->screenTimes as $screen_time)
            <div class="flex flex-row p-1  justify-around text-center bg-slate-700 rounded-md shadow-lg my-2">
                <div class="flex flex-col">
                    <p class="font-bold text-red-500 text-md sm:text-md md:text-lg">Dátum</p>
                    <p>{{ $screen_time->date }}</p>
                </div>
                <div class="flex flex-col">
                    <p class="font-bold text-red-500 text-md sm:text-md md:text-lg">Szabad ülőhelyek</p>
                    @if ($screen_time->seats != 0)
                        <p>{{ $screen_time->seats }} db.</p>
                    @else
                        <p class="text-red-500">Elfogyott!</p>
                    @endif
                </div>
                <div class="flex flex-col">
                    <p class="font-bold text-red-500 text-md sm:text-md md:text-lg">Vetítés típusa</p>
                    <p>{{ $screen_time->presentation_type }}</p>
                </div>
                <div class="flex flex-col">
                    <p class="font-bold text-red-500 text-md sm:text-md md:text-lg">Ár</p>
                    <p>{{ $screen_time->price }} Ft.</p>
                </div>
                <div class="my-auto">
                    @if ($screen_time->seats != 0)
                        <form method="POST" action="{{ Route('reservations.store') }}">
                            @csrf
                            <input type="text" name="screentime_id" value="{{ $screen_time->id }}" hidden>
                            <button
                                class="transition duration-150 ease-in-out hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 p-1 font-bold text-red-500">Foglalás</button>
                        </form>
                    @else
                        <button disabled data-te-toggle="tooltip" title="A szabad ülőhelyek elfogytak!"
                            class="transition duration-150 ease-in-out hover:line-through p-1 font-bold text-red-500">Foglalás</button>
                    @endif
                </div>
            </div>
        @endforeach
    @else
        <div class="text-center text-red-500">Nem áll rendelkezésre jegy!</div>
    @endif
</div>
