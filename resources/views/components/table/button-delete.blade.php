@props(['id'])
<button class="table-button-option-danger" x-data :key="'delete_' + {{ $id }}"
    x-on:click="$dispatch('open-modal-confirmation-delete',{{ $id }})">Eliminar</button>
