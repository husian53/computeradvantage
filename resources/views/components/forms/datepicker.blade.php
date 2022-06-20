@props(['id' => 'start', 'type' => 'text', 'class' => 'form-control input-group datepicker','placeholder' => 'DD-MM-YYYY', 'name' => 'start'])
<div class="input-group mb-3">
    <input   {{ $attributes->merge([ 'id'  => $id, 'type' => $type, 'class' => $class, 'placeholder' => $placeholder, 'name' => $name ]) }}  />
</div>