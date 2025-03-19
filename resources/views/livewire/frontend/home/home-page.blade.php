<main>
    <x-slot:metaTitle> {{ __($metaTitle) }} </x-slot:metaTitle>
    <x-slot:metaDescription> {{ __($metaDescription) }} </x-slot:metaDescription>

    <livewire:frontend.partials.home-slider />
    {{-- <livewire:frontend.partials.home-banner /> --}}
    {{-- <livewire:frontend.partials.home-projects /> --}}

    <livewire:frontend.partials.solutions-section sectionTitle="solutions" sectionSubTitle="Our provided best solutions"
        :limit="5" />

    {{-- <livewire:frontend.partials.products-section sectionTitle="products"
        sectionSubTitle="Our most valuable next-gen products" :limit="3" /> --}}

    <livewire:frontend.components.home-products-section sectionTitle="products"
        sectionSubTitle="our most valuable products" :limit="6" />

    {{-- <livewire:frontend.components.why-choose-us-section sectionTitle="why choose us"
        sectionSubTitle="why you will give us priority" :item="$itemDetails" /> --}}

        <livewire:frontend.components.why-choose-us-section :item="$data" />
    

    <livewire:frontend.components.request-demo-section sectionTitle="request demo"
        sectionSubTitle="our demos" />

    {{-- <livewire:frontend.partials.home-work-process-section /> --}}

    {{-- <livewire:frontend.partials.home-blog-section /> --}}
</main>
