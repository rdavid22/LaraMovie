@extends('layouts.cinema')

@section('content')
    <x-cinema.hero />
    <x-cinema.movielist-wrapper :moviesArray="$movies">
        <x-slot name="section_name">action_movies_slider</x-slot>
        <x-slot name="slider_heading">Legjobb akciófilmek</x-slot>
        <x-slot name="filter_by">Akciófilm</x-slot>
    </x-cinema.movielist-wrapper>
@endsection
