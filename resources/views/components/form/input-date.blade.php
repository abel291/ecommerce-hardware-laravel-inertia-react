@props(['label' => ''])
@php
    $model = $attributes->whereStartsWith('wire:model')->first();
    $ref = 'd' . uniqid();
@endphp
<div>
    <x-input-label for="{{ $model }}">{{ $slot }}</x-input-label>

    <div x-data="{ value: @entangle($attributes->wire('model')) }">
        <x-text-input id="{{ $model }}" {{ $attributes->whereDoesntStartWith('wire:model') }}
            x-ref="{{ $ref }}" x-init="$nextTick(() => {
                ($refs.{{ $ref }}, {
                    locale: 'es',
                    dateFormat: 'Y-m-d',
                    altFormat: 'F j, Y H:i',
                    altInput: true,
                    defaultDate: value,
                    onChange: function(selectedDates, dateStr, instance) {
                        value = dateStr
                    },
                })
            })" />

    </div>
    {{-- value = $event.target.value --}}
    <x-input-error :messages="$errors->get($model)" />
</div>
