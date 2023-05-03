@php
$all_reservations = array();

foreach ($reservations as $key => $reservation) {
    array_push($all_reservations, ['title' => $reservation->movie->title]);
}

$arr_same_reservations = array_count_values(array_column($all_reservations, 'title'));

// Make a reservation group array which is iterable
$reservation_groups = array();

foreach ($arr_same_reservations as $key => $value) {
    array_push($reservation_groups, [
        'group_title' => $key,
        'count_of_items' => $value
    ]);
}

@endphp

@extends('layouts.cinema')

@section('content')
    <x-cinema.navigation />
    <section id="reservations" class="bg-default-image bg-cover">
        <div class="overflow-x-auto mx-auto mt-20 md:py-20 font-roboto text-black max-w-screen-lg md:min-h-screen ">
            <x-cinema.flash />
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
                                <th scope="col" class="px-1 md:px-3 py-4">Darab</th>
                            </tr>
                        </thead>

                        @foreach($reservation_groups as $index => $reservation_group)
                            <tbody>
                                <tr class="border-b dark:border-neutral-500">
                                    <td
                                        class="whitespace-nowrap px-1 md:px-3 py-2 hover:cursor-pointer inline-block rounded bg-warning text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#e4a11b] transition duration-150 ease-in-out hover:bg-warning-600 hover:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] focus:bg-warning-600 focus:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] focus:outline-none focus:ring-0 active:bg-warning-700 active:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(228,161,27,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)]"
                                        type="button"
                                        data-te-collapse-init
                                        data-te-ripple-init
                                        data-te-ripple-color="light"
                                        data-te-target="#collapse_item_{{$index}}"
                                        aria-expanded="false"
                                        aria-controls="collapse_item_{{$index}}">
                                        {{$reservation_group['group_title']}}
                                    </td> <td></td> <td></td> <td></td> <td class="whitespace-nowrap px-1 md:px-3 py-4">{{$reservation_group['count_of_items']}}</td>
                                </tr>
                            </tbody>

                            <tbody class="!visible hidden" id="collapse_item_{{$index}}" data-te-collapse-item>
                                @foreach ($reservations as $index => $reservation)
                                    @if($reservation->movie->title == $reservation_group['group_title'])
                                        <tr class=" border-b dark:border-neutral-500" >
                                            <td class="whitespace-nowrap px-1 md:px-3 py-4"><a href="/filmek/{{ $reservation->movie->title }}">{{ $reservation->movie->title }}</a></td>
                                            <td class="whitespace-nowrap px-1 md:px-3 py-4">{{ $reservation->date }}</td>
                                            <td class="whitespace-nowrap px-1 md:px-3 py-4">{{ $reservation->presentation_type }}</td>
                                            <td class="whitespace-nowrap px-1 md:px-3 py-4">{{ $reservation->price }} Ft.</td>
                                            <td class="whitespace-nowrap px-1 md:px-3 py-4">
                                                <form method="POST" action="/foglalasok/{{$reservation_ids[$index]->id}}" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="text" name="reservation_id" value="{{$reservation_ids[$index]->id}}" hidden>
                                                    <button class="text-red-500">Törlés</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>

                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </section>
    <x-cinema.footer />
@endsection
