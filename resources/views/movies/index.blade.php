@extends('layouts.cinema')

@section('content')
    <x-cinema.navigation />
    @if (isset($error))
        <x-cinema.not-found> {{ $error }} </x-cinema.not-found>
    @elseif(isset($genre_category))
        <x-cinema.movielist-slider-wrapper :moviesArray="$movies">
            <x-slot name="section_name">movies</x-slot>
            <x-slot name="slider_heading">{{ $genre_category }}</x-slot>
        </x-cinema.movielist-slider-wrapper>
        <x-cinema.footer />
    @else
        <x-cinema.all-movie :movies="$movies" />
    @endif
@endsection
