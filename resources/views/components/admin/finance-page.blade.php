<x-admin.flash />
<section id="finances">
    <div class="m-5 p-5 font-roboto bg-white shadow-lg">
        <p class="text-center text-2xl font-roboto-bold">Pénzügyek</p>
        <div
            class="flex flex-row flex-wrap mx-auto lg:mx-0 text-center justify-center lg:justify-between shadow-lg bg-gradient-to-br from-green-500 via-green-500 to-green-300 w-fit p-6 m-5 rounded-lg text-white text-2xl">
            <div class="flex flex-col mx-5">
                <p class="text-black font-roboto-bold">{{ $income }} Ft.</p>
                <p class="text-sm text-black ">Várható bevétel</p>
            </div>
            <div class="my-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="black"
                    class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                </svg>
            </div>
        </div>
        <p class="m-4 p-2 text-lg">Vásárlók</p>
        <div class="overflow-auto">
            <table class="min-w-full text-left text-sm font-light">
                <thead class="border-b font-medium dark:border-neutral-500">
                    <tr>
                        <th scope="col" class="px-6 py-4">Név</th>
                        <th scope="col" class="px-6 py-4">E-mail</th>
                        <th scope="col" class="px-6 py-4">Foglalás dátuma</th>
                        <th scope="col" class="px-6 py-4">Összeg</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4">{{ $reservation['user']->name }}</td>
                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $reservation['user']->email }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $reservation['created_at'] }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $reservation['screenTime']->price }} Ft.</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <form method="POST" action="/vezerlopult/penzugyek">
                                    @csrf
                                    @method('DELETE')
                                    <input type="text" name="id" value="{{ $reservation->id }}" hidden>
                                    <button 
                                    data-te-toggle="tooltip"
                                    title="Foglalás törlése">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
