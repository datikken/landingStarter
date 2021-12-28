<div class="swiper swiper2">
    <div class="swiper-wrapper">
        @for ($i = 1; $i < 10; $i++)
            <div class="swiper-slide">
                <div class="swiper-image" style="background-image: url('/images/farms/2/{{ $i }}.png')"></div>
            </div>
        @endfor
    </div>
</div>
