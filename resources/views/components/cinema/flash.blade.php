@if(Session()->has('movie_added'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="mt-44 bg-red-500 text-white p-5  text-center mx-auto rounded-lg w-min">
        <p class="w-full">
            {{Session('movie_added')}}
        </p>
    </div>
@endif