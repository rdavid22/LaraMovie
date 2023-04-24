@extends('layouts.cinema')

@section('content')
    <x-cinema.navigation />
    <x-cinema.edit-movie :movie="$movie" />
    <x-cinema.footer />
@endsection
