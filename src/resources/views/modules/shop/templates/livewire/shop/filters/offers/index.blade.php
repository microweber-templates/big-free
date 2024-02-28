<div class="my-3">
    <label>
        {{_e('Discount')}} (%)
    </label>
    <select wire:model="offers" class="form-control">
        <option value="all">{{_e('All')}}</option>
        <option value="only-offers">{{_e('Only discounted')}}</option>
    </select>
</div>
