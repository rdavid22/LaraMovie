@extends('layouts.admin')

@section('content')
    <x-admin.shortcuts />
    <x-admin.finance-page>
        <x-slot name="income"> {{ $income }} </x-slot>
        @foreach ($reservations as $index => $reservation)
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap px-6 py-4">{{ $reservation['user']->name }}</td>
                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $reservation['user']->email }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $reservation['created_at'] }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $movie_titles[$index] }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $reservation['screenTime']->price }} Ft.</td>
                <td class="whitespace-nowrap px-6 py-4">
                    <form method="POST" action="/vezerlopult/penzugyek">
                        @csrf
                        @method('DELETE')
                        <input type="text" name="id" value="{{ $reservation->id }}" hidden>
                        <button data-te-toggle="tooltip" title="Foglalás törlése">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </x-admin.finance-page>
@endsection
