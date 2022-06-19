@props(['name' => 'select', 'id' => 'select', 'class' => 'form-control'])
<div class="input-group mb-3">
     <select {{ $attributes(['name' => $name, 'id' => $id, 'class' => $class ])}}>
        {{ $options }}
     </select>
</div>