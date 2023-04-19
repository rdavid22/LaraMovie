@extends('layouts.cinema')

@section('content')
    <x-cinema.header />

    @if (isset($error))
        <x-cinema.not-found> {{ $error }} </x-cinema.not-found>
    @elseif(isset($genre_category))
        <x-cinema.movielist-slider-wrapper :moviesArray="$movies">
            <x-slot name="section_name">movies</x-slot>
            <x-slot name="slider_heading">{{ $genre_category }}</x-slot>
        </x-cinema.movielist-slider-wrapper>
    @else
        <x-cinema.movielist-slider-wrapper :moviesArray="$movies">
            <x-slot name="section_name">movies</x-slot>
            <x-slot name="slider_heading">Összes film</x-slot>
        </x-cinema.movielist-slider-wrapper>
    @endif
@endsection
