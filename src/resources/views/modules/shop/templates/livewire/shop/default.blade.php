<div>

    @if(!empty($breadcrumb))
    <div class="mw-breadcrumb d-flex align-items-center gap-1 justify-content-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="16" viewBox="0 -960 960 960" width="16"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>

        @foreach($breadcrumb as $breadcrumbLink)

            @if($loop->last)
                <span class="mw-breadcrumb-current">
                    {{$breadcrumbLink['name']}}
                </span>
            @else
                <a class="text-decoration-none" href="{{$breadcrumbLink['link']}}">
                    {{$breadcrumbLink['name']}}
                </a> /
            @endif
        @endforeach

    </div>
    @endif

    <div class="mw-online-shop d-flex justify-content-between flex-wrap mt-3">
        <div class="col-lg-2 col-12">


                @if(!empty($availableCategories) && !$filterSettings['disable_categories_filtering'])
                    @include('microweber-module-shop::livewire.shop.filters.categories.index')
                @endif

                @if(!$filterSettings['disable_price_range_filtering'])
                    @include('microweber-module-shop::livewire.shop.filters.price_range.index', [
                        'priceFrom'=>$priceFrom
                    ])
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
                        @include('microweber-module-shop::livewire.shop.product-card',[
                            'settings'=>$productCardSettings
                        ])
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mb-3">
                {{ $products->links("livewire-tables::specific.bootstrap-4.pagination") }}
            </div>

        </div>
    </div>

</div>
