@props(['label'])
<x-content>
    <div class=" ">
        <dt class="text-neutral-500 dark:text-neutral-400 font-medium text-sm">{{ $label }}</dt>
        <dd class="text-3xl tracking-tight font-semibold mt-1 ">
            {{ $slot }}
        </dd>
    </div>
</x-content>
