@extends('layouts.cinema')

@section('content')
    <x-cinema.navigation />
    <section id="admin_panel" class="flex flex-row min-h-screen w-full bg-gray-200 pt-20 font-roboto ">

        {{-- Side panel --}}
        <div class="bg-gray-800 w-0 invisible lg:w-1/5 lg:visible text-white py-8 transition-all duration-300"  >
            <div class="text-2xl text-center">Üdvözöljük, admin! </div>
            <hr class="w-3/4 mx-auto my-2">

        </div>

        {{-- Dashboard screen --}}
        <div class="w-full lg:w-4/5 mx-auto">
            <div class="text-3xl text-center py-8">Vezérlőpult</div>

            <div class="grid grid-flow-row gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 p-4">

                <div
                    class="flex flex-row justify-between rounded-md p-6 shadow-lg border-l-8 text-black border-gray-800 bg-gradient-to-br from-green-500 to-green-300">
                    <div>
                        <h5 class="mb-2 text-xl font-bold leading-tight">
                            25.000 Ft.
                        </h5>
                        <p class="mb-4 text-lg">
                            Várható bevétel
                        </p>
                    </div>
                    <div class="my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                            stroke="black" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                        </svg>
                    </div>
                </div>

                <div
                    class="flex flex-row justify-between rounded-md p-6 shadow-lg border-l-8 text-black border-gray-800 bg-gradient-to-br from-blue-400 to-blue-200">
                    <div>
                        <h5 class="mb-2 text-xl font-bold leading-tight">
                            201
                        </h5>
                        <p class="mb-4 text-lg">
                            Felhasználók
                        </p>
                    </div>
                    <div class="my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                            stroke="black" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                </div>

                <div
                    class="flex flex-row justify-between rounded-md p-6 shadow-lg border-l-8 text-black border-gray-800 bg-gradient-to-br from-orange-400 to-orange-100">
                    <div>
                        <h5 class="mb-2 text-xl font-bold leading-tight">
                            35 db.
                        </h5>
                        <p class="mb-4 text-lg">
                            Filmek
                        </p>
                    </div>
                    <div class="my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                            stroke="black" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                </div>

                <div
                    class="flex flex-row justify-between rounded-md p-6 shadow-lg border-l-8 text-black border-gray-800 bg-gradient-to-br from-red-500 to-red-200">
                    <div>
                        <h5 class="mb-2 text-xl font-bold leading-tight">
                            250 db.
                        </h5>
                        <p class="mb-4 text-lg">
                            Vetítések
                        </p>
                    </div>
                    <div class="my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                            stroke="black" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
