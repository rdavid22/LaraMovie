@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'font-mono bg-transparent border-white focus:ring-black focus:border-black focus:bg-black rounded-md shadow-sm']) !!}>
