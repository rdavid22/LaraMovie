@extends('layouts.admin')

@section('content')
    {{-- It's only visible on mobile screens --}}
    <x-admin.shortcuts />
    <x-admin.finance-page :reservations="$reservations">
        <x-slot name="income">{{ $income }}</x-slot>
    </x-admin.finance-page>
@endsection
