<div class="bg-white w-max-screen-2xl dark:bg-gray-800 overflow-hidden shadow-xl">
    <div class="p-2 sm:px-10 sm:py-8">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-white text-center">
            Áreas de atuação
        </h1>
        <div class="swiper max-w-7xl h-96" id="swiper-awards">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide bg-red-500">Slide 1</div>
                <div class="swiper-slide bg-yellow-500">Slide 2</div>
                <div class="swiper-slide bg-green-500">Slide 3</div>
                <div class="swiper-slide bg-gray-500">Slide 4</div>
                <div class="swiper-slide bg-purple-400">Slide 5</div>
                <div class="swiper-slide bg-cyan-500">Slide 6</div>
                <div class="swiper-slide bg-orange-500">Slide 7</div>
                <div class="swiper-slide bg-pink-500">Slide 8</div>
                <div class="swiper-slide bg-gray-500">Slide 9</div>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
@endpush
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper4 = new Swiper('#swiper-awards', {
            spaceBetween: 20,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
                type: "progressbar",
                clickable: true,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            breakpoints: {
                480: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            }
        });
    </script>
@endpush
