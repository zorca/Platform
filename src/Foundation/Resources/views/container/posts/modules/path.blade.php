<div class="form-group">
    <div id="route-app" class="input-group w-full">
        @if ($route != null)
            <path-input field-name="route" field-value='{{$route}}'></path-input>
        @else
            <path-input field-name="route" field-value='[]'></path-input>
        @endif
    </div>
</div>