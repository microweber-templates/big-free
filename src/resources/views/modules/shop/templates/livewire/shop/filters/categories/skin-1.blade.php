<div class="mw-online-shop-skin-1-wrapper d-flex flex-wrap gap-3">

    <div class="btn btn-link @if(!$filteredCategory) active @endif"
         wire:click="filterClearCategory()">
        <label for="">{{_e('Show All')}}</label>

        <div wire:loading wire:target="filterClearCategory">
            <i class="mdi mdi-loading mdi-spin"></i>
        </div>
    </div>
    @foreach($availableCategories as $category)
        @include('microweber-module-shop::livewire.shop.filters.categories.category-child-skin-1', ['category' => $category])
    @endforeach
</div>

