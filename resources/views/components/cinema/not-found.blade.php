<section id="not_found" class="h-screen w-full flex justify-center">
    <div {{ $attributes->merge(['class' => 'm-auto text-4xl text-red-600']) }}>
        {{ $slot }}
    </div>
</section>
