
<section id="edit_movie_form" class="bg-default-image bg-cover mt-20 sm:py-10 text-black font-roboto tracking-widest">
    <x-cinema.flash />
    <div class=" bg-yellow-400 sm:max-w-md mx-auto p-7 sm:rounded-lg my-auto">
        <div class="text-center text-2xl font-roboto-bold">"{{$movie->title}}" szerkesztése</div>
        <form method="POST" action="/filmek/{{$movie->title}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <input type="text" name="id" value="{{$movie->id}}" hidden />
            
            <div class="mb-3">
                <label for="title" class="inline-block text-md mb-1">Film címe</label>
                <input type="text" class="text-black border border-gray-200 rounded p-1 w-full" name="title"
                    value="{{ $movie->title }}" />

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="director" class="inline-block text-md mb-1">Rendező</label>
                <input type="text" class="text-black border border-gray-200 rounded p-1 w-full" name="director"
                    value="{{ $movie->director }}" />

                @error('director')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="length" class="inline-block text-md mb-1">Hossz (perc)</label>
                <input type="number" class="text-black border border-gray-200 rounded p-1 w-full" name="length"
                    value="{{ $movie->length }}" />

                @error('length')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cast" class="inline-block text-md mb-1">Szereplők</label>
                <input type="text" class="text-black border border-gray-200 rounded p-1 w-full" name="cast"
                    value="{{ $movie->cast }}" />

                @error('cast')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="trailer" class="inline-block text-md mb-1">Előzetes</label>
                <input type="text" class="text-black border border-gray-200 rounded p-1 w-full" name="trailer"
                    value="{{ $movie->trailer }}" />

                @error('trailer')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="genre[]" class="inline-block text-md mb-1">Műfaj</label>
                <div class="text-black bg-white rounded">
                    <select data-te-select-init name="genre[]" data-te-select-filter="true"
                        data-te-select-placeholder="Jelenleg: {{$movie->genre}}" multiple>
                        <option value="Akciófilm">Akciófilm</option>
                        <option value="Családi">Családi</option>
                        <option value="Kalandfilm">Kalandfilm</option>
                        <option value="Komédia">Komédia</option>
                        <option value="Fantasy">Fantasy</option>
                        <option value="Sci-Fi">Sci-Fi</option>
                        <option value="Romantikus">Romantikus</option>
                        <option value="Dráma">Dráma</option>
                        <option value="Történelmi">Történelmi</option>
                        <option value="Musical">Musical</option>
                        <option value="Western">Western</option>
                    </select>
                </div>
                @error('genre')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="age" class="inline-block text-md mb-1">Korhatár-besorolás</label>
                <div class="text-black bg-white rounded">
                    <select data-te-select-init name="age" data-te-select-filter="true"
                        data-te-select-placeholder="Jelenleg: {{$movie->age}}" value="{{ old('age') }}">

                        <option value="" hidden></option>
                        <option value="18">18</option>
                        <option value="16">16</option>
                        <option value="12">12</option>
                        <option value="6">6</option>
                    </select>
                </div>

                @error('age')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="premier" class="inline-block text-md mb-1">Premier dátuma</label>
                <div class="relative mb-3" data-te-datepicker-init data-te-input-wrapper-init
                    data-te-format="yyyy.mm.dd"
                    data-te-class-datepicker-toggle-button="flex items-center justify-content-center [&>svg]:w-5 [&>svg]:h-5 absolute outline-none border-none bg-transparent right-0.5 top-1/2 -translate-x-1/2 -translate-y-1/2 text-secondary hover:text-primary focus:text-primary dark:hover:text-primary-400 dark:focus:text-primary-400 dark:text-neutral-200">
                    <input type="text" name="premier"
                        class="peer text-black block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        placeholder="Jelenleg: {{$movie->premier}}" />

                </div>
                @error('premier')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-3">
                <label for="cover" class="inline-block text-md mb-1">
                    Kis borítókép
                </label>
                <input type="file" class="text-black border border-black rounded p-1 w-full" name="cover" />
              
               
                <img src="{{ $movie->cover  ? asset('storage/' . $movie->cover ) : Vite::asset('resources/img/default.jpg') }}" class="m-auto mt-3">
               
                @error('cover')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cover_big" class="inline-block text-md mb-1">
                    Nagy borítókép
                </label>
                <input type="file" class="text-black border border-black rounded p-1 w-full" name="cover_big" />

                <img src="{{ $movie->cover_big  ? asset('storage/' . $movie->cover_big ) : Vite::asset('resources/img/default.jpg') }}" class="m-auto mt-3">

                @error('cover_big')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="inline-block text-lg mb-1">Leírás</label>
                <textarea class="border text-black border-gray-200 rounded p-1 w-full" name="description" rows="3"
                    placeholder="Film leírása...">{{ $movie->description }}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="text-right mt-6">
                <a href="/filmek/{{ $movie->title }}">Vissza</a>
                <button
                    class="bg-black text-white rounded py-2 px-4 ml-4 hover:bg-gray-600 hover:text-white">Mentés</button>
            </div>
        </form>
</section>
