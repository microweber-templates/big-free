<div class="d-flex justify-content-between gap-2">

    @if(!$filterSettings['disable_keyword_filtering'])
    <div class="col-lg-3 col-auto">
        <label>{{_e('Search')}}</label>
        <input type="text" class="form-control" wire:model="keywords" placeholder="{{_e('Type to search')}}...">
    </div>
    @endif


    <div class="d-flex flex-wrap gap-2">
        @if(!$filterSettings['disable_sort_filtering'])
        <div>
            <label>{{_e('Sort')}}</label>
            <div>
                <select class="form-control">
                    <option wire:click="filterSort('created_by', 'asc')">{{_e('Newest')}}</option>
                    <option wire:click="filterSort('created_by', 'desc')">{{_e('Oldest')}}</option>
                    <option wire:click="filterSort('title', 'asc')">{{_e('Title')}}: {{_e('A-Z')}}</option>
                    <option wire:click="filterSort('title', 'desc')">{{_e('Title')}}: {{_e('Z-A')}}</option>
                    <option wire:click="filterSort('price', 'asc')">{{_e('Price')}}: {{_e('Low to High')}}</option>
                    <option wire:click="filterSort('price', 'desc')">{{_e('Price')}}: {{_e('High to Low')}}</option>
                </select>
            </div>
        </div>
        @endif
        @if(!$filterSettings['disable_limit_filtering'])
        <div>
            <label>{{_e('Limit')}}</label>
            <div>
                <select class="form-control">
                    <option wire:click="filterLimit(12)">12</option>
                    <option wire:click="filterLimit(24)">24</option>
                    <option wire:click="filterLimit(48)">48</option>
                    <option wire:click="filterLimit(96)">96</option>
                </select>
            </div>
        </div>
        @endif
    </div>
</div>
