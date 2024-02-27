<div>
    <div class="mw-breadcrumb d-flex align-items-center gap-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="16" viewBox="0 -960 960 960" width="16"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>        <a class="text-decoration-none" href="">

         Home

        </a> /


        <a class="text-decoration-none" href="">Page</a> /

        <span class="mw-breadcrumb-current"> Page 1 </span>

    </div>

    <div class="mw-online-shop d-flex justify-content-between flex-wrap mt-3">
        <div class="col-lg-2 col-12">


                @if(!empty($availableCategories) && !$filterSettings['disable_categories_filtering'])
                    @include('microweber-module-shop::livewire.shop.filters.categories.index')
                @endif

                @if(!$filterSettings['disable_price_range_filtering'])
                    @include('microweber-module-shop::livewire.shop.filters.price_range.index')
                @endif

                @if(!$filterSettings['disable_offers_filtering'])
                    @include('microweber-module-shop::livewire.shop.filters.offers.index')
                @endif

                @if(!empty($availableCustomFields) && !$filterSettings['disable_custom_fields_filtering'])
                    @include('microweber-module-shop::livewire.shop.filters.custom_fields.index')
                @endif

                @if(!empty($availableTags) && !$filterSettings['disable_tags_filtering'])
                    @include('microweber-module-shop::livewire.shop.filters.tags.index')
                @endif


        </div>
        <div class="col-lg-9 col-12">

            @include('microweber-module-shop::livewire.shop.filters.top.index')

            <div class="row mt-4">
                @foreach($products as $product)
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-5">
                        @include('microweber-module-shop::livewire.shop.product-card')
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mb-3">
                {{ $products->links("livewire-tables::specific.bootstrap-4.pagination") }}
            </div>

        </div>
    </div>

</div>
