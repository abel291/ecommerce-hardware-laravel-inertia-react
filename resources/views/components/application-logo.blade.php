<a href="/" target='_blank'>
    <div class="flex items-center">
        <div class="flex items-center p-2 rounded-full mr-2   bg-neutral-800">
            <x-heroicon-m-shopping-cart class="h-6 w-6 text-white" />
        </div>
        <div {{ $attributes->class('text-2xl font-bold') }}>
            {{ config('app.name') }}
        </div>
    </div>
</a>
