@extends('layouts.cinema')

@section('content')
    <x-cinema.hero />

    @if (isset($error))
        <x-cinema.not-found> {{ $error }} </x-cinema.not-found>
    @elseif(isset($genre_category))
        <x-cinema.movielist-wrapper :moviesArray="$movies">
            <x-slot name="section_name">movies</x-slot>
            <x-slot name="slider_heading">{{ $genre_category }}</x-slot>
            <x-slot name="filter_by">none</x-slot>
        </x-cinema.movielist-wrapper>
    @else
        <x-cinema.movielist-wrapper :moviesArray="$movies">
            <x-slot name="section_name">movies</x-slot>
            <x-slot name="slider_heading">Összes film</x-slot>
            <x-slot name="filter_by">none</x-slot>
        </x-cinema.movielist-wrapper>
    @endif
@endsection
