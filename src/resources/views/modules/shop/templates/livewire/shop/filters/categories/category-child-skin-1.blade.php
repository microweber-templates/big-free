@if(isset($category))

        <div
            class="btn btn-link @if($category->id == $filteredCategory) active @endif"
            wire:click="filterCategory('{{$category->id}}')">

            <label for=""> {{ $category->title }}</label>

            <div wire:loading wire:target="filterCategory('{{$category->id}}')">
                <i class="mdi mdi-loading mdi-spin"></i>
            </div>

        </div>

        @if(!empty($category->children))
            @foreach($category->children as $category)
                @include('microweber-module-shop::livewire.shop.filters.categories.category-child-skin-1', ['category' => $category])
            @endforeach
        @endif

@endif
