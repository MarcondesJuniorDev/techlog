<div class="bg-white w-full dark:bg-gray-800 overflow-hidden shadow-xl">
    <div class="mb-4">
        <div class="swiper w-full h-96" id="swiper-banners">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide bg-amber-400">
                    <div class="flex flex-col justify-center h-full">
                        <h1 class="ml-8 text-4xl text-gray-700 font-bold">Slide 1</h1>
                        <p class="ml-4 text-gray-700 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aspernatur.</p>
                        <button class="ml-8 w-24 bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">
                            teste 1
                        </button>
                    </div>
                </div>
                <div class="swiper-slide bg-amber-400">
                    <div class="flex flex-col justify-center h-full">
                        <h1 class="ml-8 text-4xl text-gray-700 font-bold">Slide 2</h1>
                        <p class="ml-4 text-gray-700 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aspernatur.</p>
                        <button class="ml-8 w-24 bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">
                            teste 2
                        </button>
                    </div>
                </div>
                <div class="swiper-slide bg-amber-400">
                    <div class="flex flex-col justify-center h-full">
                        <h1 class="ml-8 text-4xl text-gray-700 font-bold">Slide 3</h1>
                        <p class="ml-4 text-gray-700 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aspernatur.</p>
                        <button class="ml-8 w-24 bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">
                            teste 3
                        </button>
                    </div>
                </div>
                <div class="swiper-slide bg-amber-400">
                    <div class="flex flex-col justify-center h-full">
                        <h1 class="ml-8 text-4xl text-gray-700 font-bold">Slide 4</h1>
                        <p class="ml-4 text-gray-700 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aspernatur.</p>
                        <button class="ml-8 w-24 bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">
                            teste 4
                        </button>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <div class="flex justify-center mt-4">
            <button class="slide-button mx-2 bg-blue-500 text-white font-bold py-2 px-4 rounded" data-slide="0">
                Slide 1
            </button>
            <button class="slide-button mx-2 bg-blue-500 text-white font-bold py-2 px-4 rounded" data-slide="1">
                Slide 2
            </button>
            <button class="slide-button mx-2 bg-blue-500 text-white font-bold py-2 px-4 rounded" data-slide="2">
                Slide 3
            </button>
            <button class="slide-button mx-2 bg-blue-500 text-white font-bold py-2 px-4 rounded" data-slide="3">
                Slide 4
            </button>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
@endpush
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper1 = new Swiper('#swiper-banners', {
            // Optional parameters
            spaceBetween: 30,
            effect: "fade",
            direction: 'horizontal',
            loop: true,
            rewind: true,
            autoplay: {
                delay: 5000,
            },

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                type: "dots",
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        document.querySelectorAll('.slide-button').forEach((button, index) => {
            button.addEventListener('click', () => {
                swiper1.slideTo(index);
            });
        });
    </script>
@endpush
