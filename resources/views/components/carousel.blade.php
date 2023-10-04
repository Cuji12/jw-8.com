<section class="flex w-full pb-44" x-data="carousel()">
    @foreach ($banners as $banner)
        <div class="carousel-item w-full absolute">
            <img src="{{ asset('storage/' . $banner->image) }}" class="d-block w-full h-44 object-cover" alt="{{ $banner->image_alt }}">
        </div>
    @endforeach
</section>

<script>
    function carousel() {
        return {
            init() {
                this.carouselItems = document.querySelectorAll('.carousel-item');
                this.currentSlide = 0;
                this.interval = setInterval(() => {
                    this.next();
                }, 4000);
            },
            next() {
                this.carouselItems[this.currentSlide].classList.remove('active');
                this.carouselItems[this.currentSlide].classList.add('hide');
                this.currentSlide++;
                if (this.currentSlide >= this.carouselItems.length) {
                    this.currentSlide = 0;
                }
                this.carouselItems[this.currentSlide].classList.remove('hide');
                this.carouselItems[this.currentSlide].classList.add('active');
            },
        }
    }
</script>


