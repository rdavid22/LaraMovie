@if(Session()->has('movie_added'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="mt-44 bg-red-500 text-white p-5 w-auto text-center sm:mx-20 md:mx-36 lg:mx-60 xl:mx-96  rounded-lg ">
        <p class="w-auto">
            {{Session('movie_added')}}
        </p>
    </div>
@endif