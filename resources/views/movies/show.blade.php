@extends('layouts.cinema')

@section('content')
    <x-cinema.navigation />
    <x-cinema.movie-description :singleMovie="$movie" />
@endsection
