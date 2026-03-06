<nav class="w-full">
    <div class="max-w-screen-2xl mx-auto px-2 lg:px-16 py-5 font-sans group flex flex-col justify-center items-center">
        <div
            class="w-full z-10 bg-white border border-primary-border shadow-[0_10px_10px_rgba(0,0,0,0.15)] px-6 py-2 flex flex-col md:flex-row items-center justify-between rounded-[40px]">
            <div class="flex justify-between items-center gap-3 mt-2 md:mt-0">
                <a href="/" class="">
                    <img src="{{ asset('images/Logo.webp') }}" alt="Logo" draggable="false" class="max-h-16">
                </a>

                <div class="md:hidden border-2 border-primary-border rounded-[10px] p-1">
                    <button id="mobile-menu-btn" class="text-3xl">
                        <i class="fas fa-bars text-3xl cursor-pointer"></i>
                    </button>
                </div>
            </div>
            
            <div id="mobile-menu" class="md:hidden overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out w-full mt-4">
                <div class="flex flex-col gap-4 text-lg">
                    <a href="#sobre" class="hover:text-secondary">Sobre</a>
                    <a href="#produtos" class="hover:text-secondary">Produtos</a>
                    <a href="#diferenciais" class="hover:text-secondary">Diferenciais</a>
                    <a href="#contato" class="hover:text-secondary">Contato</a>
                    <a href="#contato"
                        class="bg-linear-to-r from-primary to-secondary text-white text-center rounded-full py-2 font-bold">
                        Faça seu Orçamento
                    </a>
                </div>
            </div>

            <div class="hidden md:block">
                <div class="flex gap-6 text-lg text-black justify-center items-center">
                    <a href="#sobre" class="hover:text-secondary transition">Sobre</a>
                    <a href="#produtos" class="hover:text-secondary transition">Produtos</a>
                    <a href="#diferenciais" class="hover:text-secondary transition">Diferenciais</a>
                    <a href="#contato" class="hover:text-secondary transition">Contato</a>
                    {{-- Button --}}
                    <a href="#contato"
                        class="flex justify-center items-center text-center bg-linear-to-r from-primary to-secondary rounded-[30px] font-bold xl:text-2xl text-white hover:scale-105 duration-300 transition px-8 py-2">
                        <span>Faça seu Orçamento</span>
                    </a>
                </div>
            </div>
        </div>



        <div class="w-[60%] group-hover:w-[90%] transition-all duration-500 h-6 bg-primary blur-md rounded-full -mt-3">
        </div>
    </div>
</nav>
