@props(['id' => null, 'modalId' => null, 'path' => null])
@if ($path)
    <a {{ $attributes }} href="{{ $path }}" class="table-button-option">
        {{ $slot }}
    </a>
@else
    <button type="button" {{ $attributes }} x-data :key="'edit_' + {{ $id }}" class="table-button-option"
        x-on:click="$dispatch('{{ $modalId }}',{{ $id }})">
        {{ $slot }}
    </button>
@endif
