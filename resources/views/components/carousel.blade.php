<section>
    @foreach ($banners as $banner)
        <div class="carousel-item">
            <img src="{{ $banner->image }}" class="d-block w-full h-36" alt="{{ $banner->image_alt }}">
        </div>
    @endforeach
</section>
