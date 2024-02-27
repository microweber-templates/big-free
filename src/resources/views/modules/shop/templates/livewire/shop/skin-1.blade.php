<div class="mw-online-shop mw-online-shop-skin-1 mt-3">
    <div class="col-lg-8 mx-auto">

        @if(!empty($availableCategories) && !$filterSettings['disable_categories_filtering'])
            @include('microweber-module-shop::livewire.shop.filters.categories.skin-1')
        @endif

    </div>
    <div class="col-12">
        <div class="row mt-4 mx-auto">
            @foreach($products as $product)
                <div class="mw-online-shop-skin-1-product col-xl-4 col-md-6 col-sm-12 mb-5">
                    @include('microweber-module-shop::livewire.shop.product-card-skin-1')
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mb-3">
            {{ $products->links("livewire-tables::specific.bootstrap-4.pagination") }}
        </div>

    </div>
</div>


