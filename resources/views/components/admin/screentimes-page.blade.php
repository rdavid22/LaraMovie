<x-admin.flash />
<section id="users">
    <div class="m-5 p-5 font-roboto bg-white shadow-lg">
        <p class="text-center text-2xl font-roboto-bold">Vetítések</p>

        <div class="flex flex-row flex-wrap lg:space-x-5">
            <div
                class="flex flex-row flex-wrap mx-auto lg:mx-0 text-center justify-center lg:justify-between shadow-lg bg-gradient-to-br from-green-500 via-green-500 to-green-300 w-fit p-6 m-5 rounded-lg text-white text-2xl">
                <div class="flex flex-col mx-5">
                    <p class="text-black font-roboto-bold">{{ count($screentimes) }} db.</p>
                    <p class="text-sm text-black ">Elérhető vetítés</p>
                </div>
                <div class="my-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                        stroke="black" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </div>
            </div>

            <a href="{{ Route('screentimes.create') }}" data-te-toggle="tooltip" title="Vetítés hozzáadása"
                class="flex flex-row flex-wrap mx-auto lg:mx-0 text-center justify-center lg:justify-between shadow-lg bg-gradient-to-br from-orange-500 via-orange-500 to-orange-300 w-fit p-6 m-5 rounded-lg text-white text-2xl">
                <p class="text-black font-roboto-bold mx-5 my-auto">Hozzáadás</p>
                <div class="my-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="black" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5" />
                    </svg>
                </div>
            </a>
        </div>

        <p class="m-4 p-2 text-lg">Vetítések</p>
        <div class="overflow-auto">
            <table class="min-w-full text-left text-sm font-light">
                <thead class="border-b font-medium dark:border-neutral-500">
                    <tr>
                        <th scope="col" class="px-6 py-4">Film címe</th>
                        <th scope="col" class="px-6 py-4">Vetítés dátuma</th>
                        <th scope="col" class="px-6 py-4">Ülőhelyek</th>
                        <th scope="col" class="px-6 py-4">Ár</th>
                        <th scope="col" class="px-6 py-4">Előadás típusa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($screentimes as $screentime)
                        <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4">{{ $screentime['movie']->title }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $screentime->date }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $screentime->seats }} db.</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $screentime->price }} Ft.</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $screentime->presentation_type }}</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <div class="flex flex-row space-x-3">

                                    <form method="GET" action="{{ Route('screentimes.edit') }}">
                                        @csrf
                                        <input type="text" name="id" value="{{ $screentime->id }}" hidden>
                                        <button data-te-toggle="tooltip" title="Vetítés szerkesztése">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                            </svg>
                                        </button>
                                    </form>

                                    <form method="POST" action="{{Route('screentimes.destroy')}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="text" name="id" value="{{$screentime->id}}" hidden>
                                        <button data-te-toggle="tooltip" title="Vetítés törlése">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12" />
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
