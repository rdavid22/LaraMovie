@extends('layouts.cinema')

@section('content')
    <x-cinema.navigation />
    <div class="bg-default-image">
        <x-cinema.not-found class="text-white">500 - {{ __('Server Error') }}</x-cinema.not-found>
    </div>
@endsection
