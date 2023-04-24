@extends('layouts.cinema')

@section('content')
    <x-cinema.navigation />
    <div class="bg-default-image">
        <x-cinema.not-found class="text-white">401 - {{ __('Unauthorized') }}</x-cinema.not-found>
    </div>
@endsection
