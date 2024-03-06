@props(['text', 'label' => '', 'disabled' => false])
@php
    $model = $attributes->whereStartsWith('wire:model')->first();
@endphp
<div>
    @if ($label)
        <x-input-label for="{{ $model }}">{{ $label }}</x-input-label>
    @endif

    <div class="relative sm:max-w-md">
        <div class="absolute inset-y-0 left-2  flex items-center">
            {{ $text }}
        </div>
        <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
            'class' => 'input-form pl-9  ',
        ]) !!} />
    </div>



    <x-input-error :messages="$errors->get($model)" />
</div>
