<section class="relative font-sans bg-linear-to-b from-brand-dark_2 via-brand-dark_2 via-90% to-brand-dark_1" id="contato">
    <div class="relative flex flex-col justify-center items-center max-w-screen-2xl mx-auto pt-20 md:pt-36 pb-20 md:pb-36 px-4 md:px-16 gap-16">
        <img src="{{ asset('images/goku.webp') }}" loading="lazy" decoding="async" alt="Goku"
            class="reveal-grow max-w-40 md:max-w-44 xl:max-w-86 absolute -top-32 md:-top-48 right-0 z-10" draggable="false">
        <div class="flex flex-col justify-center items-center max-w-4xl text-center">
            <span
                class="reveal-left bg-linear-to-b from-primary to-secondary bg-clip-text text-transparent font-bold md:text-[24px]" style="animation-delay:0.1s">ORÇAMENTO</span>
            <h5 class="reveal-left text-white text-3xl md:text-5xl font-bold" style="animation-delay:0.3s">
                Transforme sua Ideia em <strong
                    class="bg-linear-to-b from-primary to-secondary bg-clip-text text-transparent"> Realidade</strong>
            </h5>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div class="reveal-left flex justify-center items-end" style="animation-delay:0.1s">
                <div class="relative flex justify-center items-center" id="form">
                    <div
                        class="absolute -left-1 top-0 h-full w-full bg-linear-to-b from-primary via-secondary to-brand-blue rounded-4xl">
                    </div>
                    <form wire:submit.prevent="submitForm" class="relative border-2 border-brand-gray_3  shadow-[0_10px_10px_rgba(0,0,0,0.15)] rounded-[30px] px-6 py-8 bg-brand-dark_2 flex flex-col justify-center items-center gap-5">
                        @if (session()->has('success'))
                        <div class="bg-linear-to-r from-primary to-secondary text-white text-center rounded-[30px] font-bold p-3 w-full">
                            {{ session('success') }}
                        </div>
                        @endif
                        <fieldset class="grid grid-cols-1 md:grid-cols-2 justify-center items-center gap-3">
                            <div class="md:col-span-2">
                                <label class="text-white font-bold text-[28px]">Nome*</label>
                                <input wire:model="name" type="text" placeholder="Seu nome completo"
                                    class="w-full mt-1 px-4 py-3 rounded-[15px] bg-brand-gray_4 border-2 border-brand-gray_5 text-brand-gray_1 focus:ring-2 focus:ring-primary focus:outline-none">
                                @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="">
                                <label class="text-white font-bold text-[28px]">E-mail*</label>
                                <input wire:model="email" type="email" placeholder="seu@email.com"
                                    class="w-full mt-1 px-4 py-3 rounded-[15px] bg-brand-gray_4 border-2 border-brand-gray_5 text-brand-gray_1 focus:ring-2 focus:ring-primary focus:outline-none">
                                @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="">
                                <label class="text-white font-bold text-[28px]">Telefone*</label>
                                <input wire:model="phone" type="tel" placeholder="(11) 12345-6789" id="whatsapp" maxlength="15"
                                    oninput="maskPhone(this)"
                                    class="w-full mt-1 px-4 py-3 rounded-[15px] bg-brand-gray_4 border-2 border-brand-gray_5 text-brand-gray_1 focus:ring-2 focus:ring-primary focus:outline-none">
                                @error('phone')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md:col-span-2">
                                <label class="text-white font-bold text-[28px]">Descrição do Projeto*</label>
                                <textarea wire:model="projectDescription" placeholder="Descreva o que você gostaria de criar..."
                                    class="w-full mt-1 px-4 py-3 rounded-[15px] bg-brand-gray_4 border-2 border-brand-gray_5 text-brand-gray_1 focus:ring-2 focus:ring-primary focus:outline-none">
                                </textarea>
                                @error('projectDescription')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>

                        <button type="submit"
                            class="flex justify-center items-center gap-2 text-center bg-linear-to-r from-primary to-secondary rounded-[30px] font-bold md:text-xl xl:text-2xl text-white hover:scale-105 duration-300 transition px-8 py-2 cursor-pointer">
                            <span wire:loading.remove wire:target="submitForm" class="flex items-center gap-2">
                                <i class="fa-regular fa-paper-plane"></i>
                                Enviar Solicitação
                            </span>

                            <span wire:loading wire:target="submitForm" class="flex items-center gap-2">
                                <svg class="animate-spin h-5 w-5 text-white"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24">
                                    <circle
                                        class="opacity-25"
                                        cx="12"
                                        cy="12"
                                        r="10"
                                        stroke="currentColor"
                                        stroke-width="4">
                                    </circle>
                                    <path
                                        class="opacity-75"
                                        fill="currentColor"
                                        d="M4 12a8 8 0 018-8v8H4z">
                                    </path>
                                </svg>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center gap-8">
                <div class="flex flex-col justify-center items-center gap-3">
                    <span id="product-category"
                        class="reveal-left text-white xl:text-[26px] font-bold py-2 px-24 rounded-[30px] bg-linear-to-r from-primary/50 to-secondary/50" style="animation-delay:0.1s">
                        CONTATOS
                    </span>
                    <p class="reveal-left text-white text-[28px] text-center leading-8" style="animation-delay:0.3s">
                        Prefere falar diretamente com a gente? Escolha o canal que preferir.
                    </p>
                </div>
                <div class="flex flex-col gap-5 w-full">
                    <a href="https://wa.me/5511999999999" rel="noopener noreferrer" target="_blank" class="reveal-grow relative w-full hover:scale-95 duration-300" style="animation-delay:0.1s">
                        <div
                            class="absolute -left-1 top-0 h-full w-full bg-linear-to-b from-primary via-secondary to-brand-blue rounded-4xl">
                        </div>
                        <div
                            class="relative bg-brand-dark_2 shadow-[0_10px_10px_rgba(0,0,0,0.15)] z-10 h-full border-y-2 border-r-2 border-brand-gray_3 rounded-[30px] px-4 md:px-8 py-6 flex flex-row justify-start items-center gap-5">
                            <div
                                class="bg-linear-to-r from-primary via-secondary to-brand-blue rounded-xl text-white text-2xl md:text-5xl p-2">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <h6 class="text-white font-bold text-2xl md:text-3xl mb-1">WhatsApp</h6>
                                <p class="text-brand-gray_1 font-medium text-lg md:text-2xl">
                                    (11) 12345-6789
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="https://www.instagram.com/_origem3d/" rel="noopener noreferrer" target="_blank" class="reveal-grow relative w-full hover:scale-95 duration-300" style="animation-delay:0.3s">
                        <div
                            class="absolute -left-1 top-0 h-full w-full bg-linear-to-b from-primary via-secondary to-brand-blue rounded-4xl">
                        </div>
                        <div
                            class="relative bg-brand-dark_2 shadow-[0_10px_10px_rgba(0,0,0,0.15)] z-10 h-full border-y-2 border-r-2 border-brand-gray_3 rounded-[30px] px-4 md:px-8 py-6 flex flex-row justify-start items-center gap-5">
                            <div
                                class="bg-linear-to-r from-primary via-secondary to-brand-blue rounded-xl text-white text-2xl md:text-5xl p-2">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <h6 class="text-white font-bold text-2xl md:text-3xl mb-1">Instagram</h6>
                                <p class="text-brand-gray_1 font-medium text-lg md:text-2xl">
                                    @_origem3d
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="https://mail.google.com/mail/u/0/?fs=1&to=contato@origem3d.com" rel="noopener noreferrer" target="_blank" class="reveal-grow relative w-full hover:scale-95 duration-300" style="animation-delay:0.5s">
                        <div
                            class="absolute -left-1 top-0 h-full w-full bg-linear-to-b from-primary via-secondary to-brand-blue rounded-4xl">
                        </div>
                        <div
                            class="relative bg-brand-dark_2 shadow-[0_10px_10px_rgba(0,0,0,0.15)] z-10 h-full border-y-2 border-r-2 border-brand-gray_3 rounded-[30px] px-4 md:px-8 py-6 flex flex-row justify-start items-center gap-5">
                            <div
                                class="bg-linear-to-r from-primary via-secondary to-brand-blue rounded-xl text-white text-2xl md:text-5xl p-2">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <h6 class="text-white font-bold text-2xl md:text-3xl mb-1">E-mail</h6>
                                <p class="text-brand-gray_1 font-medium text-sm md:text-2xl">
                                    contato@origem3d.com.br
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>