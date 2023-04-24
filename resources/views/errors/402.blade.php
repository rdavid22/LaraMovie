@extends('layouts.cinema')

@section('content')
    <x-cinema.navigation />
    <div class="bg-default-image">
        <x-cinema.not-found class="text-white">402 - {{ __('Payment Required') }}</x-cinema.not-found>
    </div>
@endsection
