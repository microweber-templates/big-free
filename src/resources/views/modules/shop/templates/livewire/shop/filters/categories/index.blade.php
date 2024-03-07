<div class="text-left">
    <div class="d-flex align-items-center justify-content-between">
        <label>{{_e('Categories')}}</label>

        <div class="btn btn-link @if(!$filteredCategory) active @endif"
              wire:click="filterClearCategory()">
               <label for="">{{_e('All Categories')}}</label>

               <div wire:loading wire:target="filterClearCategory">
                <i class="mdi mdi-loading mdi-spin"></i>
            </div>
        </div>
    </div>

    <div class="mt-2 list-group list-group-flush">
        @foreach($availableCategories as $category)
            @include('microweber-module-shop::livewire.shop.filters.categories.category-child', ['category' => $category])
        @endforeach
    </div>
</div>
