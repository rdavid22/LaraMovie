<x-admin.flash />
<section id="users">
    <div class="m-5 p-5 font-roboto bg-white shadow-lg">
        <p class="text-center text-2xl font-roboto-bold">Felhasználók</p>
        <div class="flex flex-row flex-wrap text-center justify-center lg:justify-between shadow-lg bg-gradient-to-br from-green-500 via-green-500 to-green-300 w-fit p-6 m-5 rounded-lg text-white text-2xl">
            <div class="flex flex-col mx-5">
                <p class="text-black font-roboto-bold">{{ count($users) }}</p>
                <p class="text-sm text-black ">Regisztrált tag</p>
            </div>
            <div class="my-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="black" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
            </div>
        </div>
        <p class="m-4 p-2 text-lg">Felhasználók</p>
        <div class="overflow-hidden">
            <table class="min-w-full text-left text-sm font-light">
                <thead class="border-b font-medium dark:border-neutral-500">
                    <tr>
                        <th scope="col" class="px-6 py-4">Név</th>
                        <th scope="col" class="px-6 py-4">E-mail</th>
                        <th scope="col" class="px-6 py-4">Admin jog</th>
                        <th scope="col" class="px-6 py-4">Regisztrált</th>
                        <th scope="col" class="px-6 py-4">Módosítás</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4">{{ $user->name }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $user->email }}</td>
                            @if($user->is_admin)
                                <td class="whitespace-nowrap px-6 py-4">Igen</td>
                            @else
                                <td class="whitespace-nowrap px-6 py-4">Nem</td>
                            @endif
                            <td class="whitespace-nowrap px-6 py-4">{{ $user->created_at }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $user->updated_at }}</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <form method="POST" action="/vezerlopult/felhasznalok">
                                    @csrf
                                    @method('DELETE')
                                    <input type="text" name="id" value="{{ $user->id }}" hidden>
                                    <input type="text" name="is_admin" value="{{ $user->is_admin }}" hidden>
                                    <button 
                                    data-te-toggle="tooltip"
                                    title="Felhasználó törlése">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M22 10.5h-6m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
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
