@props(['disabled' => false, 'label' => '', 'placeholder' => 'Seleccione una opcion'])
@php
    $model = $attributes->whereStartsWith('wire:model')->first();
@endphp
<div>
    @if ($label)
        <x-input-label for="{{ $model }}">{{ $label }}</x-input-label>
    @endif

    <select id="{{ $model }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'class' => 'select-form mt-2',
    ]) !!}>
        <option value="">{{ $placeholder }}</option>
        {{ $slot }}
    </select>

    <x-input-error :messages="$errors->get($model)" />
</div>
