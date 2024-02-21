<div class="text-left">
    <label>
        {{_e('Tags')}}
        <div wire:loading wire:target="filterTag">
            <i class="mdi mdi-loading mdi-spin"></i>
        </div>
    </label>
    <div x-data="{showMoreTags: false}">
        @php
            $limited = 5;
            $limitedAvailableTags = [];
            $moreAvailableTags = [];
            $moreAvailableTagsIndex = 0;
            foreach ($availableTags as $tagSlug=>$tagName) {
                if ($moreAvailableTagsIndex >= $limited) {
                    $moreAvailableTags[] = $tagSlug;
                    continue;
                }
                $limitedAvailableTags[$tagSlug] = $tagName;
                $moreAvailableTagsIndex++;
            }
        @endphp
        @foreach($limitedAvailableTags as $tagSlug=>$tagName)
            @include('microweber-module-shop::livewire.shop.filters.tags.tag-button', ['tagSlug'=>$tagSlug, 'tagName'=>$tagName])
        @endforeach


        <div x-show="showMoreTags">
            @foreach($moreAvailableTags as $tagSlug=>$tagName)
                @include('microweber-module-shop::livewire.shop.filters.tags.tag-button', ['tagSlug'=>$tagSlug, 'tagName'=>$tagName])
            @endforeach

                <button type="button" class="btn btn-link btn-sm mt-2"  x-on:click="showMoreTags = false">
                    {{_e('Hide tags')}}
                </button>
        </div>

        <button type="button" class="btn btn-link btn-sm mt-2" x-show="!showMoreTags" x-on:click="showMoreTags = true">
            {{_e('Load more')}}...
        </button>

    </div>
    @if(!empty($filteredTags))
        <button type="button" wire:click="filterClearTags()" class="btn btn-link btn-sm mt-2">
            {{_e('Clear All')}}
            <div wire:loading wire:target="filterClearTags">
                <i class="mdi mdi-loading mdi-spin"></i>
            </div>
        </button>
    @endif
</div>
