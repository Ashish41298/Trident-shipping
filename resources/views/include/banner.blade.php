{{-- 
<div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel"
    data-pause="hover" data-interval="5000">
    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{ asset('images/banner-1.jpg?w=970&h=900&auto=compress&cs=tinysrgb') }}"
                alt="Bootstrap Touch Slider" class="slide-image" />
            <div class="bs-slider-overlay"></div>

        </div>

        <div class="item">
            <img src="{{ asset('images/banner-2.jpg?w=970&h=900&auto=compress&cs=tinysrgb') }}"
                alt="Bootstrap Touch Slider" class="slide-image" />
            <div class="bs-slider-overlay"></div>

        </div>

        <div class="item">
            <img src="{{ asset('images/banner-3.jpg?w=970&h=900&auto=compress&cs=tinysrgb') }}"
                alt="Bootstrap Touch Slider" class="slide-image" />
            <div class="bs-slider-overlay"></div>

        </div>

        <div class="item">
            <img src="{{ asset('images/banner-4.jpg?w=970&h=900&auto=compress&cs=tinysrgb') }}"
                alt="Bootstrap Touch Slider" class="slide-image" />
            <div class="bs-slider-overlay"></div>

        </div>

        <div class="item">
            <img src="{{ asset('images/banner-5.jpg?w=970&h=900&auto=compress&cs=tinysrgb') }}"
                alt="Bootstrap Touch Slider" class="slide-image" />
            <div class="bs-slider-overlay"></div>

        </div>


    </div>
    <!-- End of Wrapper For Slides -->

    <!-- Left Control -->
    <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
        <span class="fas fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Right Control -->
    <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
        <span class="fas fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div> --}}



<div id="bootstrap-touch-slider" class="carousel bs-slider slide control-round indicators-line" data-ride="carousel"
    data-pause="hover" data-interval="5000">
    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">
        @foreach ($images as $index => $image)
            <div class="item {{ $index === 0 ? 'active' : '' }}">
                <img src="{{ asset('/slide/' . $image->slide) }}" alt="Bootstrap Touch Slider" class="slide-image" />
                <div class="bs-slider-overlay"></div>
            </div>
        @endforeach
    </div>
    <!-- End of Wrapper For Slides -->

    <!-- Left Control -->
    <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
        <span class="fas fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Right Control -->
    <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
        <span class="fas fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


