<section>
    <div class="bg-cover bg-center" style="background-image: url('{{ asset('images/banner/Banner.webp') }}');">
        <div class="flex flex-col bg-linear-to-b from-white/90 via-white/90 to-white h-full pb-12">
            <livewire:components.navbar />

            <livewire:components.banner />
        </div>
    </div>

    <div class="flex flex-col items-center justify-center text-center gap-4 py-20 ">
        <h1 class="text-4xl font-bold tracking-tight">
            Projeto Base 1
        </h1>

        <p class="text-zinc-300 text-lg max-w-xl">
            Este é o projeto base que será usado como template para criar novos projetos.
        </p>

        <div class="mt-6 px-6 py-3 rounded-xl border border-zinc-800 bg-zinc-900 text-zinc-400 text-sm">
            Laravel • Livewire • TailwindCSS
        </div>
    </div>
    <div class="flex flex-col items-center justify-center text-center gap-4 py-20 bg-amber-400">
        <h1 class="text-4xl font-bold tracking-tight">
            Projeto Base 2
        </h1>

        <p class="text-zinc-300 text-lg max-w-xl">
            Este é o projeto base que será usado como template para criar novos projetos.
        </p>

        <div class="mt-6 px-6 py-3 rounded-xl border border-zinc-800 bg-zinc-900 text-zinc-400 text-sm">
            Laravel • Livewire • TailwindCSS
        </div>
    </div>
</section>
