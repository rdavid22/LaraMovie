@extends('layouts.admin')

@section('content')
    <x-admin.shortcuts />
    <x-admin.screentimes-page :screentimes="$screentimes" />
@endsection