@extends('layouts.cinema')

@section('content')
    <x-cinema.navigation />
        <section id="admin_panel" class="min-h-screen w-full bg-white mt-20 py-20">
            <div class="grid grid-flow-row grid-cols-4 text-center">
                <div class="">Felhasználók</div>
                <div class="">Várható bevétel</div>
                <div class="">03</div>
                <div class="">04</div>
              </div>
        </section>
    <x-cinema.footer />
@endsection