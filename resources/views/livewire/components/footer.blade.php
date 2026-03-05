<footer class="w-full bg-brand-dark_1 font-sans">
    <div class="max-w-screen-2xl mx-auto px-5 md:px-16 lg:px-5 xl:px-16 pb-6 pt-10 flex flex-col justify-center items-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full pb-6 gap-6">
            <div class="flex flex-col justify-center md:items-start gap-5">
                {{-- Trocar logo --}}
                <img src="{{ asset('images/Logo_Branca.png') }}" alt="Logo" draggable="false" class="max-w-72">
                <p class="text-brand-gray_1 leading-5 text-lg">
                    Precisão, inovação e qualidade <br> em cada detalhe para transformar <br> suas ideias em realidade.
                </p>
            </div>
            <div
                class="font-bold text-white hover:text-brand-gray_1 duration-300 text-2xl flex justify-start md:justify-center items-start md:items-center">
                <a href="#" class="flex justify-center items-center gap-2">
                    <div class="hidden md:block">
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <span>
                        Retornar ao topo
                    </span>
                    <div class="block md:hidden">
                        <i class="fas fa-chevron-up"></i>
                    </div>
                </a>
            </div>
            <div class="flex flex-col md:flex-row gap-5 md:gap-16 justify-end md:justify-between lg:justify-end items-start md:col-span-2 lg:col-span-1">
                {{-- Adicionar liks --}}
                <div class="text-white flex flex-col gap-4">
                    <h6 class="text-2xl font-bold">Redes Sociais</h6>
                    <div class="flex gap-2">
                        <a href="" target="_blanck"
                            class="text-3xl rounded-full flex justify-center items-center w-12 h-12 p-2 bg-linear-to-r from-primary via-secondary to-brand-blue hover:scale-110 duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" target="_blanck"
                            class="text-3xl rounded-full flex justify-center items-center w-12 h-12 p-2 bg-linear-to-r from-primary via-secondary to-brand-blue hover:scale-110 duration-300">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="" target="_blanck"
                            class="text-3xl rounded-full flex justify-center items-center w-12 h-12 p-2 bg-linear-to-r from-primary via-secondary to-brand-blue hover:scale-110 duration-300">
                            <i class="far fa-envelope"></i>
                        </a>
                    </div>
                </div>
                <div class="text-white flex flex-col gap-4">
                    <h6 class="text-2xl font-bold">Navegação</h6>
                    <ul class="text-brand-gray_1 flex flex-col gap-2 text-lg">
                        <li><a href="#" class="hover:text-white duration-300">Sobre</a></li>
                        <li><a href="#" class="hover:text-white duration-300">Produtos</a></li>
                        <li><a href="#" class="hover:text-white duration-300">Diferencias</a></li>
                        <li><a href="#" class="hover:text-white duration-300">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- Colocar gift --}}
        <div class="w-full pt-6 text-brand-gray_1 text-lg flex justify-center items-center border-t-2 border-[#464646]">
            <span>© {{ date('Y') }} Todos os direitos reservados Origem 3D. Desenvolvido por <a
                    href="https://kaique-gm.github.io/" target="_black"
                    class="inline-block font-bold hover:scale-95 duration-300 hover:text-white">Kaique
                    Mattos</a>.</span>
        </div>
    </div>
</footer>
