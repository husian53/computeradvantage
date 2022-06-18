 @props(['type' => 'text', 'name' => 'textbox', 'placeholder' => 'Textbox'])
        <div class="input-group mb-3">
            <input {{ $attributes->merge(['type' => $type, 'name' => $name, 'placeholder' => $placeholder ]) }} class="form-control" />
        </div>
    