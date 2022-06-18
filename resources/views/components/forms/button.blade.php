@props(['width' => 'btn btn-primary','type' => 'submit', 'value' => 'Add'])
<div class="input-group mb-3">
        <input  {{ $attributes->merge(['class' => $width,'type' => $type, 'value' => $value]) }}" />
</div>