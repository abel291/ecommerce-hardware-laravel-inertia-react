@props(['room'])
@if ($room)
    <x-content>
        <x-title>
            Habitacione mas pedida
        </x-title>
        <img src="{{ $room->thumb }}" alt="" class="rounded mt-4">
        <div class="mt-4">
            <h4 class="font-medium">{{ $room->name }}</h4>
            <div class="flex items-center justify-between mt-3">
                <span class="font-medium">@money($room->price)</span>
                <a class="text-blue-500 font-medium" href="{{ route('room', $room->slug) }}">Ver
                    habitacion</a>
            </div>
        </div>
    </x-content>
@endif
