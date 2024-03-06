@props(['date', 'showRecent' => true])
<div class="text-sm ">
    <div class="whitespace-nowrap font-medium text-neutral-600  dark:text-neutral-300 ">
        {!! $date->isoFormat('DD MMM YYYY hh:mm A') !!}
    </div>

    @if ($showRecent && now()->diffInMinutes($date) < 120)
        <x-badge color="yellow" class="block">Recien</x-badge>
    @endif

    {{-- 20 MIN --}}
    {{-- <div class="flex items-center gap-x-4 mt-1">
        <span class=" text-neutral-500 block">
            {!! $date->diffForHumans() !!}
        </span>
        @if (now()->diffInMinutes($date) < 120)
            <span class="text-green-500  font-medium">recien</span>
        @endif
    </div> --}}

</div>
