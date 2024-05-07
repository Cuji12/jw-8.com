<section class="flex w-full" x-data="carousel()">
    <div class="w-full h-44 overflow-hidden relative block" x-data="carousel()" x-init="init()">
        <template x-for="(banner, index) in banners" :key="index">
            <img :src="banner.image" class="absolute inset-0 w-full h-full object-cover rounded shadow-md transition-opacity duration-1000"
                 :class="{ 'opacity-100': active === index, 'opacity-0': active !== index }">
        </template>
    </div>
</section>

<script>
    function carousel() {
        return {
            banners: @json($banners->map(function($banner) {
                $banner->image = asset('storage/' . $banner->image);
                return $banner;
            })),
            active: 0,
            init() {
                this.autoRotate();
            },
            autoRotate() {
                setInterval(() => {
                    setTimeout(() => {
                        this.active = (this.active + 1) % this.banners.length;
                    }, 400);
                }, 4000);
            }
        }
    }
</script>


