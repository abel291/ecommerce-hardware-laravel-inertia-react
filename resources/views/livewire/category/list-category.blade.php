@section('title', $labelPlural)
<x-slot name="header">
    {{ $labelPlural }}
</x-slot>

<div>
    <div class="flex flex-col md:flex-row md:justify-between md:items-end gap-2 my-4">
        <div class="flex items-end gap-x-3">
            <x-form.input-search />
            <x-form.select wire:model="type_category" label="Tipo de categoria">
                <option value="">Todas</option>
                <option value="blog">Blog</option>
                <option value="product">Producto</option>
            </x-form.select>
        </div>
        <div>
            <x-primary-button type="button" x-data=""
                class="btn btn-primary block h-full justify-center shadow-sm" x-on:click="$dispatch('modal-create')">
                Agregar {{ $label }}
            </x-primary-button>
        </div>
    </div>

    <x-content>
        <x-table.table :data="$list" wire:target="search">

            <thead>
                <tr>
                    @php
                        $tableNamesHead = [
                            'name' => 'Nombre',
                            'products_count' => 'Cantidad',
                            'type' => 'Tipo',
                            //'entry' => 'Descipcion',
                            'active' => 'Visible',
                            'updated_at' => 'Ultima actualización',
                        ];
                    @endphp

                    @foreach ($tableNamesHead as $key => $name)
                        <x-table.th :name="$name" />
                    @endforeach
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $item)
                    <tr class="text-sm">

                        <td class="whitespace-nowrap">
                            <x-table.title-image :img="$item->img" :title="$item->name" :sub-title="$item->slug"
                                :path="route('search', ['categories[]' => $item->slug])" />
                        </td>
                        <td>
                            {{ $item->products_count }}
                        </td>

                        <td>
                            @include('livewire.category.badge-category-type')
                        </td>

                        <td class="text-neutral-500 font-medium ">

                            <x-badge-active :active="$item->active" />
                        </td>

                        <td>
                            <x-date-format :date="$item->updated_at" />
                        </td>

                        <td>
                            <x-table.button-options>
                                <x-table.button :id="$item->id" modal-id="modal-edit">Editar</x-table.button>
                                <x-table.button-delete :id="$item->id" />
                            </x-table.button-options>

                        </td>

                    </tr>
                @endforeach
            </tbody>

        </x-table.table>
    </x-content>
    <livewire:category.create-category :label="$label" :label-plural="$labelPlural" />

</div>
