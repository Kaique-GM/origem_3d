<section>
    @php
    $url = asset('images/banner/Banner.webp');
    $urlProducts = asset('images/products/Banner.webp');
    @endphp
    <div class="bg-cover bg-center" style="background-image: url('{{ $url }}');">
        <div class="flex flex-col bg-linear-to-b from-white/90 via-white/90 to-white h-full pb-12">
            <livewire:components.navbar />

            <livewire:components.banner />
        </div>
    </div>

    <livewire:components.about />

    <div class="bg-cover bg-center" style="background-image: url('{{ $urlProducts }}');">
        <div class="flex flex-col bg-linear-to-b from-brand-blue_4 via-brand-blue_5/90 to-brand-blue_5 h-full pb-12">
            <livewire:components.products />
        </div>
    </div>
</section>