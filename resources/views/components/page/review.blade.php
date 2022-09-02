<x-section-layout id="review">
    <div class="swiper slider-review">
        <div class="swiper-wrapper">
            @foreach ($reviewItem as $revItem)
                <x-util.review-card :image="$revItem['image']"
                                    :icon="$revItem['icon']"
                                    :feedback="$revItem['feedback']" />
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</x-section-layout>