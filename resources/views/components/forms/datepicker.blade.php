@props(['id' => 'start', 'type' => 'text', 'class' => 'form-control input-group datepicker','placeholder' => 'DD/MM/YYYY'])
<div class="input-group mb-3">
    <input   {{ $attributes->merge([ 'id'  => $id, 'type' => $type, 'class' => $class, 'placeholder' => $placeholder ]) }}  />
</div>