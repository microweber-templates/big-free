<div class="text-left">

    <div>
        <div>
            <div wire:loading wire:target="filterToggleCustomField">
                <i class="mdi mdi-loading mdi-spin"></i>
            </div>
        </div>
        @foreach($availableCustomFields as $customField)
            <label>
                {{$customField->name}}
            </label>
            <div class="mt-2 mb-2">
                @foreach($customField->values as $customFieldValue)
                    <label class="form-check">
                        <input class="form-check-input"
                               @if(isset($filteredCustomFields[$customField->name_key]) && in_array($customFieldValue->value, $filteredCustomFields[$customField->name_key])) checked="" @endif
                               wire:click="filterToggleCustomField('{{$customField->name_key}}','{{$customFieldValue->value}}')" type="checkbox">
                        <span class="form-check-label">{{$customFieldValue->value}}</span>
                    </label>
                @endforeach
            </div>
        @endforeach
    </div>

    @if(!empty($filteredCustomFields))
    <button type="button" wire:click="filterClearCustomFields()" class="btn btn-link btn-sm mt-2">
        {{_e('Clear All')}}
        <div wire:loading wire:target="filterClearCustomFields">
            <i class="mdi mdi-loading mdi-spin"></i>
        </div>
    </button>
    @endif
</div>
