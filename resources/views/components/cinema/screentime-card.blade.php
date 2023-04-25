<div class="flex flex-col max-w-screen-xl mx-auto text-white font-roboto text-sm sm:text-md md:text-lg  tracking-widest p-5">
    <div class="text-center p-5 text-white text-5xl font-cheeky">Vetítések</div>
    @foreach ($movie->screenTimes as $screen_time)
        <div class="flex flex-row p-1  justify-around text-center bg-slate-700 rounded-md shadow-lg my-2">
            <div class="flex flex-col">
                <p class="font-bold text-red-500 text-md sm:text-lg md:text-xl">Dátum</p>
                <p>{{ $screen_time->date }}</p>
            </div>
            <div class="flex flex-col">
                <p class="font-bold text-red-500 text-md sm:text-lg md:text-xl">Szabad ülőhelyek</p>
                <p>{{ $screen_time->seats }}</p>
            </div>
            <div class="flex flex-col">
                <p class="font-bold text-red-500 text-md sm:text-lg md:text-xl">Vetítés típusa</p>
                <p>{{ $screen_time->presentation_type }}</p>
            </div>
            <div class="flex flex-col">
                <p class="font-bold text-red-500 text-md sm:text-lg md:text-xl">Ár</p>
                <p>{{ $screen_time->price }}</p>
            </div>
            <button
                class="transition duration-150 ease-in-out hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 px-2 font-bold text-red-500">Foglalás</button>
        </div>
    @endforeach
</div>
