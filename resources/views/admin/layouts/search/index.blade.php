{{-- 

    @param $fields = [
        ['value' => 'value1', 'display' => 'Value1'],
        ...
    ]
    
--}}

<div class="row">
    <form action="" class="form-search" method="get">
        <div class="col-xs-2">
            <div class="pb-1">
                <select name='searchFields' class="form-control form-control-md input-md" required>
                    @foreach ($searchFields as $field)
                        <option value="{{$field['value']}}" @if(request('searchFields') == $field['value']) selected @endif>@lang($field['display'])</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-10">
            <div class="pb-1">
                <fieldset class="form-group position-relative mb-0">
                    <input type="text" class="form-control form-control-md input-md" name="search" placeholder="@lang('Search')">
                    <div class="form-control-position">
                        <button type="submit" class="form-control btn-link"><i class="font-medium icon-search7"></i></button>
                    </div>
                </fieldset>
            </div>
        </div>
    </form>
</div>