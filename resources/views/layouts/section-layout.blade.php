@props(['id' => ''])

<section id="{{ $id }}">
    <div class="container mx-auto">
        <div class="flex items-center justify-center -mx-4"> 
            {{ $slot }}
        </div>
    </div>
</section>