<div
    {{ $attributes->merge(['class' => 'relative rounded-xl bg-white shadow-sm ring-1 ring-neutral-950/5 dark:bg-neutral-900 dark:ring-white/10']) }}>
    <div class="h-full w-full p-6 ">
        {{ $slot }}
    </div>
</div>
