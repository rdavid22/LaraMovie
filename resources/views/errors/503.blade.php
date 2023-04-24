@extends('layouts.cinema')

@section('content')
    <x-cinema.navigation />
    <div class="bg-default-image">
        <x-cinema.not-found class="text-white">503 - {{ __('Service Unavailable') }}</x-cinema.not-found>
    </div>
@endsection
