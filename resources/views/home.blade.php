@extends('layouts.cinema')

@section('content')
    <x-cinema.hero />
    
    {{-- Családi filmek --}}
    <x-cinema.movielist-wrapper :moviesArray="$movies">
        <x-slot name="section_name">action_movies</x-slot>
        <x-slot name="slider_heading">Családi filmek</x-slot>
        <x-slot name="filter_by">Családi</x-slot>
    </x-cinema.movielist-wrapper>
@endsection
