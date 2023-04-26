@extends('layouts.admin')

@section('content')
    {{-- It's only visible on mobile screens --}}
    <x-admin.shortcuts />

    {{-- Show statistics --}}
    <x-admin.statistic-cards>
        <x-slot name="income">{{ $income }}</x-slot>
        <x-slot name="user_counter">{{$user_counter}}</x-slot>
        <x-slot name="movie_counter">{{$movie_counter}}</x-slot>
        <x-slot name="screentimes_counter">{{$screentimes_counter}}</x-slot>
    </x-admin.statistic-cards>
@endsection
