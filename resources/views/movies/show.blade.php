@extends('layouts.cinema')

@section('content')
    <x-cinema.header />
    <x-cinema.movie-description :singleMovie="$movie" />
@endsection
