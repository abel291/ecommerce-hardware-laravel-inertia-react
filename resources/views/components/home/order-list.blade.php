@props(['ordersRecent'])

<x-content>
    <div class="flex items-center justify-between">
        <x-title>
            Ordenes recientemente
        </x-title>

        <a class="font-medium text-primary-700 text-sm" href="{{ route('dashboard.orders') }}">
            Ver mas
        </a>
    </div>
    <div class="mt-6">
        <table class="table-list w-full table-auto text-sm">
            @php
                $headList = ['Codigo', 'Estado', 'Fechas de pago', 'Total'];
            @endphp
            <thead>
                <tr>
                    @foreach ($headList as $name)
                        <th>{{ $name }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($ordersRecent as $item)
                    <tr>
                        <td class="whitespace-nowrap">

                            <x-table.title-image :title="'#' . $item->code" />
                        </td>
                        <td>
                            {{ $item->data->user->name }}
                        </td>

                        <td>
                            <x-badge :color="$item->payment->status->color()">{{ $item->payment->status->text() }}</x-badge>
                        </td>
                        <td>
                            <span
                                class="font-semibold text-{{ $item->payment->status->color() }}-600 dark:text-{{ $item->payment->status->color() }}-300 whitespace-nowrap">
                                @money($item->total)
                            </span>
                        </td>
                        <td>
                            <x-date-format :date="$item->updated_at" />
                        </td>
                        <td>
                            <span
                                class="font-semibold text-{{ $item->payment->status->color() }}-600 dark:text-{{ $item->payment->status->color() }}-300 whitespace-nowrap">
                                @money($item->total)
                            </span>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-content>
