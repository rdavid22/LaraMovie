@extends('layouts.cinema')

@section('content')
    <x-cinema.navigation />
    <div class="bg-default-image">
        <x-cinema.not-found class="text-white">419 - {{ __('Page Expired') }}</x-cinema.not-found>
    </div>
@endsection
