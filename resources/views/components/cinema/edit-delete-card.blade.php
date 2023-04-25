@auth
    @if (Auth::user()->is_admin)
        <div class="flex flex-row justify-around w-full font-roboto text-sm tracking-widest">
            <a href="/filmek/{{ $singleMovie->title }}/szerkesztes"
                class="flex flex-col items-center hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
                <p>Szerkesztés</p>
            </a>
            <form method="POST" action="/filmek/{{ $singleMovie->title }}">
                @csrf
                @method('DELETE')
                <input type="text" name="id" value="{{ $singleMovie->id }}" hidden>
                <input type="text" name="title" value="{{ $singleMovie->title }}" hidden>
                <input type="text" name="cover" value="{{ $singleMovie->cover }}" hidden>
                <input type="text" name="cover_big" value="{{ $singleMovie->cover_big }}" hidden>
                <button
                    class="flex flex-col items-center hover:text-red-500 hover:outline hover:outline-2 hover:rounded-sm hover:outline-red-500 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                    <p class="tracking-widest">Törlés</p>
                </button>
            </form>
        </div>
    @endif
@endauth
