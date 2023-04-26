@extends('layouts.cinema')

@section('content')
    <x-cinema.navigation />


    <section id="edit_screentime_form"
        class="bg-default-image bg-cover mt-20 sm:py-10 text-black font-roboto tracking-widest">
        <x-cinema.flash />
        <div class=" bg-yellow-400 sm:max-w-md mx-auto p-7 sm:rounded-lg my-auto">
            <div class="text-center text-2xl font-roboto-bold">'{{$screentime['movie']->title}}' vetítésének szerkesztése</div>
            <form method="POST" action="{{ Route('screentimes.update') }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <input type="text" name="id" hidden value="{{$screentime->id}}">

                <div class="mb-3">
                    <label for="movie_id" class="inline-block text-md mb-1">Film</label>
                    <div class="text-black bg-white rounded">
                      
                        <select data-te-select-init name="movie_id" data-te-select-filter="true">
                            @foreach ($movies as $movie)
                                @if($movie->title == $screentime['movie']->title)
                                    <option selected value="{{ $movie->id }}">{{ $movie->title }}</option>
                                @else
                                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    @error('movie_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="date" class="inline-block text-md mb-1">Vetítés dátuma</label>
                    <div class="relative mb-3" data-te-datepicker-init data-te-input-wrapper-init
                        data-te-format="yyyy.mm.dd"
                        data-te-class-datepicker-toggle-button="flex items-center justify-content-center [&>svg]:w-5 [&>svg]:h-5 absolute outline-none border-none bg-transparent right-0.5 top-1/2 -translate-x-1/2 -translate-y-1/2 text-secondary hover:text-primary focus:text-primary dark:hover:text-primary-400 dark:focus:text-primary-400 dark:text-neutral-200">
                        <input type="text" name="date"
                            class="peer text-black block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            placeholder="Dátum kiválasztása" value="{{ $screentime->date }}" />

                    </div>
                    @error('date')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="relative mb-3" data-te-input-wrapper-init data-te-format24="true">
                        <input type="text"
                            class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            id="time" name="time" value="{{ old('time') }}" />
                        <label for="time"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] tracking-normal text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Időpont
                            megadása, pl: 13:02</label>
                        @error('time')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="seats" class="inline-block text-md mb-1">Ülőhelyek száma</label>
                    <input type="number" class="text-black border border-gray-200 rounded p-1 w-full" name="seats"
                        value="{{ $screentime->seats }}" />

                    @error('seats')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="inline-block text-md mb-1">Jegy ára</label>
                    <input type="number" class="text-black border border-gray-200 rounded p-1 w-full" name="price"
                        value="{{ $screentime->price }}" />

                    @error('price')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="presentation_type" class="inline-block text-md mb-1">Előadás típusa</label>
                    <div class="text-black bg-white rounded">
                        <select data-te-select-init name="presentation_type" data-te-select-filter="true">
                            <option value="{{$screentime->presentation_type}}" selected>{{$screentime->presentation_type}}</option>
                            <option value="2D">2D</option>
                            <option value="3D">3D</option>
                            <option value="4DX">4DX</option>
                            <option value="IMAX">IMAX</option>
                            <option value="IMAX3D">IMAX3D</option>
                            <option value="ScreenX">ScreenX</option>
                            <option value="4DX">4DX</option>
                            <option value="VIP">VIP</option>
                        </select>
                    </div>

                    @error('presentation_type')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="text-right mt-6">
                    <a href="{{Route('admin.screentimes')}}">Vissza</a>
                    <button
                        class="bg-black text-white rounded py-2 px-4 ml-4 hover:bg-gray-600 hover:text-white">Módosítás</button>
                </div>
            </form>
    </section>

    <x-cinema.footer />
@endsection
