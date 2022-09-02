{{-- <div class="card h-[25rem] w-1/2 bg-minsk-500 dark:bg-dark-600 rounded-2xl p-7 max-w-none md:order-last md:mx-auto sm:!min-w-fit md:w-4/5 cardObj">
    <blockquote class="max-w-full max-h-full text-white overflow-y-scroll">
        <p class="m-none text-left mr-4">{{ $description }}</p>
    </blockquote>
</div>
<div class="w-1/2 flex items-end justify-center max-w-none md:order-first md:mx-auto md:mb-7">
    <img src="{{ $title }}" alt="Book Image" class="relative w-56 h-52 z-20 md:order-first md:min-w-fit md:min-h-fit">
    <img src="{{ $book }}" alt="Book Image" class="w-auto h-auto max-h-full absolute z-10 top-0 -right-28 md:-z-10">
</div> --}}

<figure class="card card_mini_img_top" id="{{ $bookID }}">
    <img src="{{ $cover }}" alt="{{ $title }}">
    <blockquote class="flex items-end justify-between">
        <i class="whitespace-pre-line">{{ $title }}</i> <button id="{{ $id }}"><i class="material-icons">arrow_forward</i></button>
    </blockquote>
</figure>