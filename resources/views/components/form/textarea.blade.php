@props(['disabled' => false, 'label' => ''])
@php
    $model = $attributes->whereStartsWith('wire:model')->first();
@endphp
<div>
    <x-input-label for="{{ $model }}">{{ $label }}</x-input-label>

    <textarea id="{{ $model }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'class' => 'textarea-form mt-2',
    ]) !!}></textarea>

    <x-input-error :messages="$errors->get($model)" />
</div>
