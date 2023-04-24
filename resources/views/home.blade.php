@extends('layouts.cinema')

@section('content')
    <x-cinema.header />

    {{-- Családi filmek --}}
    <x-cinema.movielist-slider-wrapper :moviesArray="$family">
        <x-slot name="section_name">family_movies</x-slot>
        <x-slot name="slider_heading">Családi filmek</x-slot>
        <x-slot name="homepage">true</x-slot>
    </x-cinema.movielist-slider-wrapper>

    <x-cinema.footer />
@endsection
