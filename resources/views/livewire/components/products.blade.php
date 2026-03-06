<section class="flex flex-col max-w-screen-2xl mx-auto justify-center items-center font-sans px-2 md:px-16 py-14">
    <div class="flex flex-col justify-center items-center max-w-3xl text-center">
        <h4 class="text-white text-3xl md:text-5xl font-bold">
            Nossos Produtos
        </h4>
        <p class="text-white md:leading-8 md:text-[24px] mt-2 md:mt-5">
            Conheça algumas das categorias que oferecemos. Cada peça é feita com cuidado e precisão.
        </p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 justify-center items-center mt-8 md:mt-14 gap-10">
        <div class="flex flex-col justify-center items-start gap-5">
            <span id="product-category"
                class="text-white xl:text-[26px] font-bold py-2 px-24 rounded-[30px] bg-linear-to-r from-primary/50 to-secondary/50">
            </span>
            <div class="flex flex-col justify-center items-start gap-5 px-4">
                <h5 id="product-title" class="text-white text-xl md:text-[42px] font-bold">
                </h5>
                <p id="product-description" class="text-white md:leading-9 md:text-[24px]">
                </p>
            </div>
            <div class="flex justify-center items-center w-full mt-5">
                <a href="https://www.instagram.com/_origem3d/" target="_blank"
                    class="flex justify-center items-center gap-2 text-center bg-linear-to-r from-primary to-secondary rounded-[30px] font-bold md:text-xl xl:text-2xl text-white hover:scale-105 duration-300 transition px-8 py-2">
                    <i class="fab fa-instagram"></i>
                    <span>Ver mais criações</span>
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-5 justify-center items-center py-10">
            <div class="swiper overflow-hidden rounded-[30px] w-full max-w-150">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/products/Decorativos_1.jpeg') }}"
                            class="object-cover w-full h-full rounded-[30px]" draggable="false">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('images/products/Decorativos_2.jpeg') }}"
                            class="object-cover w-full h-full rounded-[30px]" draggable="false">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('images/products/Decorativos_3.jpeg') }}"
                            class="object-cover w-full h-full rounded-[30px]" draggable="false">
                    </div>
                </div>

                <div class="swiper-pagination mt-20"></div>
            </div>
        </div>
    </div>
</section>