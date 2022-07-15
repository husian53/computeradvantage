@props(['type' => 'text', 'name' => 'textbox', 'placeholder' => 'Textbox','list' => 'list'])
<div class="input-group mb-3">
    <input {{ $attributes->merge(['type' => $type, 'name' => $name, 'placeholder' => $placeholder, 'list' => $list ]) }} class="form-control" autocomplete="off" />
    <datalist id="list">
        {{ $listOptions }}
    </datalist>
</div>