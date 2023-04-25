@extends('layouts.cinema')

@section('content')
    <x-cinema.navigation />
    <section id="reservations" class="bg-default-image">
        <div class="overflow-x-auto mx-auto mt-20 md:py-20 font-roboto text-black max-w-screen-lg md:min-h-screen ">
            <div class="inline-block min-w-full py-2 pb-3 sm:px-6 lg:px-8 bg-gray-100 md:rounded-lg">
                <div class="overflow-hidden tracking-widest">
                    <div class="text-center text-2xl font-roboto-bold py-5">Foglalásaim</div>
                    <table class="min-w-full text-left text-md font-roboto">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-1 md:px-3 py-4">Film</th>
                                <th scope="col" class="px-1 md:px-3 py-4">Időpont</th>
                                <th scope="col" class="px-1 md:px-3 py-4">Vetítés típusa</th>
                                <th scope="col" class="px-1 md:px-3 py-4">Ár</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-1 md:px-3 py-4"><a href="/filmek/{{ $reservation->movie->title }}">{{ $reservation->movie->title }}</a></td>
                                    <td class="whitespace-nowrap px-1 md:px-3 py-4">{{ $reservation->date }}</td>
                                    <td class="whitespace-nowrap px-1 md:px-3 py-4">{{ $reservation->presentation_type }}</td>
                                    <td class="whitespace-nowrap px-1 md:px-3 py-4">{{ $reservation->price }} Ft.</td>
                                    <td class="whitespace-nowrap px-1 md:px-3 py-4">Törlés</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <x-cinema.footer />
@endsection
