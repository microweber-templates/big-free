@if(isset($category))
    <div>
        <span
            class="list-group-item list-group-item-action @if($category->id == $filteredCategory) active @endif"
            wire:click="filterCategory('{{$category->id}}')">

              {{ $category->title }}

            <div wire:loading wire:target="filterCategory('{{$category->id}}')">
                <i class="mdi mdi-loading mdi-spin"></i>
            </div>

        </span>

        @if(!empty($category->children))
            <div>
                @foreach($category->children as $category)
                    @include('microweber-module-shop::livewire.shop.filters.categories.category-child', ['category' => $category])
                @endforeach
            </div>
        @endif
    </div>
@endif
