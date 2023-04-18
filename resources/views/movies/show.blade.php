@extends('layouts.cinema')

@section('content')
    <x-cinema.hero />
    <x-cinema.movie-description :singleMovie="$movie" />
@endsection
