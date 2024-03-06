@props(['activeTab', 'filterTime'])
<div class="flex items-center ">
    <div
        class="inline-flex max-w-full gap-x-1 overflow-x-auto  rounded-xl bg-white p-2 shadow-sm ring-1 ring-neutral-950/5 dark:bg-neutral-900 dark:ring-white/10">

        @foreach ($filterTime as $title => $time)
            <button wire:click="$set('activeTab', {{ $time }})" type="button" wire:key="{{ $time }}"
                class="group flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-medium outline-none transition duration-75 hover:bg-neutral-50 focus-visible:bg-gray-50 dark:hover:bg-white/10 dark:focus-visible:bg-white/5
                {{ $activeTab == $time ? ' bg-gray-50 dark:bg-white/10 text-primary-700 dark:text-primary-300 ' : 'hover:text-gray-700' }}">
                <span
                    class=" transition duration-75   group-focus-visible:text-gray-700  dark:group-hover:text-gray-200 dark:group-focus-visible:text-gray-200">
                    {{ $title }}
                </span>
            </button>
        @endforeach
    </div>
    <x-spinner-loading wire:loading class="ml-4" />
</div>
