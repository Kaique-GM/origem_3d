<section class="flex flex-col">
    @php
    $url = asset('images/banner/Banner.webp');
    $urlProducts = asset('images/products/Banner.webp');
    @endphp
    <div class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $url }}');">
        <div class="flex flex-col bg-linear-to-b from-white/90 via-white/90 to-white h-full pb-12">
            <livewire:components.navbar />

            <livewire:components.banner />
        </div>
    </div>

    <div>
        <livewire:components.about />
    </div>

    <div class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $urlProducts }}');">
        <div class="flex flex-col bg-linear-to-b from-brand-blue_4 via-brand-blue_5/90 to-brand-blue_5 h-full pb-12">
            <livewire:components.products />
        </div>
    </div>

    <div class="bg-linear-to-t from-white via-white via-90% to-brand-blue_5">
        <livewire:components.advantages />
    </div>

    <div>
        <livewire:components.contact />
    </div>
</section>