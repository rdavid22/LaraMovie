@extends('layouts.cinema')

@section('content')
    <x-cinema.hero />

    <x-cinema.movielist-wrapper :moviesArray="$movies">
        <x-slot name="section_name">all_movies</x-slot>
        <x-slot name="slider_heading">Összes film</x-slot>
        <x-slot name="filter_by">none</x-slot>
    </x-cinema.movielist-wrapper>

@endsection