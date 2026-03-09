<form wire:submit.prevent="submitForm"
    class="relative border-2 border-brand-gray_3  shadow-[0_10px_10px_rgba(0,0,0,0.15)] rounded-[30px] px-6 py-8 bg-brand-dark_2 flex flex-col justify-center items-center gap-5">
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
            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                </circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z">
                </path>
            </svg>
        </span>
    </button>
</form>
