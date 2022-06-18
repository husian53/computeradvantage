@props(['width' => 'btn btn-primary','type' => 'submit', 'value' => 'Add','id' => ''])
<div class="input-group mb-3">
        <input  {{ $attributes->merge(['class' => $width,'type' => $type, 'value' => $value, 'id' => $id]) }}" />
</div>