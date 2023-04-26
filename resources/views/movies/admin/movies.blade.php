@extends('layouts.admin')

@section('content')
    {{-- It's only visible on mobile screens --}}
    <x-admin.shortcuts />
    <x-admin.movies-page :movies="$movies" />
@endsection