@props(['disabled' => false, 'label' => ''])

@php
    $model = $attributes->whereStartsWith('wire:model')->first();
    $trid_id = Str::random(5);
@endphp
<style>
    /*button file upload hidden*/
    .trix-button-group.trix-button-group--file-tools {
        display: none;
    }
</style>
<div>
    <x-input-label for="{{ $model }}">{{ $label }}</x-input-label>

    <div x-data="{ desc: @entangle($model).defer }" x-init="$nextTick(() => { $refs.trix.editor.loadHTML(desc) })" x-on:trix-change="desc=$event.target.value" wire:ignore
        class="mt-2">

        <input id="{{ $model }}" type="hidden" value="">
        <trix-editor id="{{ $trid_id }}"
            class="block w-full shadow-sm rounded-md border-0 ring-1 focus:ring-2 ring-neutral-300  focus:ring-primary sm:text-sm overflow-y-scroll max-h-[400px] min-h-[200px] page-description ring-inset  sm:leading-6 "
            x-ref='trix' input="{{ $model }}"></trix-editor>
    </div>
    <x-input-error :messages="$errors->get($model)" />
</div>
