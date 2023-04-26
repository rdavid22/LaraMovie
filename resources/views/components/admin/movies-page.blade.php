<x-admin.flash />
<section id="users">
    <div class="m-5 p-5 font-roboto bg-white shadow-lg">
        <p class="text-center text-2xl font-roboto-bold">Filmek</p>

        <div class="flex flex-row flex-wrap lg:space-x-5">
            <div class="flex flex-row flex-wrap mx-auto lg:mx-0 text-center justify-center lg:justify-between shadow-lg bg-gradient-to-br from-green-500 via-green-500 to-green-300 w-fit p-6 m-5 rounded-lg text-white text-2xl">
                <div class="flex flex-col mx-5">
                    <p class="text-black font-roboto-bold">{{ count($movies) }} db.</p>
                    <p class="text-sm text-black ">Elérhető film</p>
                </div>
                <div class="my-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="black" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </div>
            </div>

            <a href="{{Route('movie.create')}}" data-te-toggle="tooltip" title="Film hozzáadása" class="flex flex-row flex-wrap mx-auto lg:mx-0 text-center justify-center lg:justify-between shadow-lg bg-gradient-to-br from-orange-500 via-orange-500 to-orange-300 w-fit p-6 m-5 rounded-lg text-white text-2xl">
                <p class="text-black font-roboto-bold mx-5 my-auto">Hozzáadás</p>
                <div class="my-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6">
                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                    </svg>  
                </div>
            </a>
        </div>

        <p class="m-4 p-2 text-lg">Filmek</p>
        <div class="overflow-auto">
            <table class="min-w-full text-left text-sm font-light">
                <thead class="border-b font-medium dark:border-neutral-500">
                    <tr>
                        <th scope="col" class="px-6 py-4">Film címe</th>
                        <th scope="col" class="px-6 py-4">Premier dátuma</th>
                        <th scope="col" class="px-6 py-4">Hossz</th>
                        <th scope="col" class="px-6 py-4">Korhatár</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4">{{ $movie->title }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $movie->premier }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $movie->length }} perc</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $movie->age }}</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <div class="flex flex-row space-x-3">
                                    <div data-te-toggle="tooltip" title="Film szerkesztése">
                                        <a href="/filmek/{{$movie->title}}/szerkesztes">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                            </svg>
                                        </a>
                                    </div>
                                    <form method="POST" action="/vezerlopult/filmek">
                                        @csrf
                                        @method('DELETE')
                                        <input type="text" name="id" value="{{ $movie->id }}" hidden>
                                        <button data-te-toggle="tooltip" title="Film törlése">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>                                      
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
