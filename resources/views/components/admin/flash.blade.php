@if (Session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
        class="text-center mx-auto w-48 bg-red-500 text-white my-5 p-5 rounded-lg">
        {{ Session('message') }}
    </div>
@endif
