@extends('layouts.cinema')

@section('content')
    <x-cinema.navigation />
    <x-cinema.create-screentime :movies="$movies"/>
    <x-cinema.footer />
@endsection
