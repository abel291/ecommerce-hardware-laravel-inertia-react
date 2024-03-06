@props(['data']) {{-- //collection --}}
<div {{ $attributes->class('relative sm:rounded-lg ') }}>
    <div {{ $attributes->whereStartsWith('wire:target') }} class="absolute inset-0 z-10" wire:loading>
        {{-- <div class=" flex justify-center mt-10">
            <x-dashboard.spinner-loading />
        </div> --}}
    </div>
    @if ($data->isNotEmpty())
        <div wire:loading.class="blur-sm" {{ $attributes->whereStartsWith('wire:target') }}>
            <table class="table-list w-full table-auto text-sm">
                {{ $slot }}
            </table>
        </div>
        @if ($data->hasPages())
            <div class="text-sm  pt-10 pb-6 px-6">
                {{ $data->links() }}
            </div>
        @endif
    @else
        <div class=" py-3.5 px-3 text-gray-500 flex items-center flex-col">
            <x-heroicon-m-no-symbol class="w-10 h-10 inline-block" />
            <span class="">No hay registros disponibles</span>
        </div>
    @endif



</div>
