@extends('layouts.cinema')
@section('content')
    <x-cinema.navigation />
    <section id="edit_profile_form" class="bg-default-image bg-cover mt-20 text-black font-roboto tracking-widest">
        <div class="mx-auto p-7 sm:rounded-lg my-auto max-w-screen-md">
            <div class="text-white text-center text-2xl font-roboto-bold">Profil módosítása</div>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 font-roboto text-lg">
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-cinema.footer />
@endsection
