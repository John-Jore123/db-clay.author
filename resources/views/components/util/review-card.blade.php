<div class="swiper-slide">
    <div class="w-4/5 mx-auto">
        <figure class="flex card_mini_img_left w-full" id="">
            <img src="{{ $image }}" alt="{{ config('app.name') }}">
            <div class="relative px-8 flex flex-col items-center justify-center">
                <figcaption>
                    <div class="flex">
                        {{-- @for ($i = 0; $i < 5; $i++)
                        <i class="material-icons">{{ $icon }}</i>
                        @endfor --}}

                        @foreach (range(1,5) as $count)
                            @if ($count <= $icon)
                                <i class="material-icons">{{ $icon }}</i>
                            @endif
                        @endforeach
                    </div>
                    <blockquote class="whitespace-pre-line"> 
                        {{ $feedback }}
                    </blockquote>
                </figcaption>
            </div> 
        </figure>
        <a href="#" class="bg-white font-bold p-4 rounded-full flex items-center mt-4 float-right">Book Order &nbsp;<i class="material-icons">remove_red_eye</i></a>
    </div>
</div>