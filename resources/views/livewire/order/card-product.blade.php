<li class="flex py-4 gap-x-4 text-sm font-medium items-strech">
    <div class="w-16 flex justify-center items-center rounded-md overflow-hidden ">
        <img src="{{ $item->product->img }}" alt="" class="w-full dark:bg-white/10">
    </div>
    <div class="w-full">
        <div class="flex flex-col justify-between">
            <div class="grow">
                <h3 class="font-medium">
                    {{ $item->data->name }}
                </h3>
                <div class=" inline-grid grid-cols-2 mt-1 gap-x-2 gap-y-1 text-xs">
                    @foreach ($item->attributes as $attribute)
                        <div>{{ $attribute->name }}</div>
                        <div class="">{{ $attribute->value }}</div>
                    @endforeach
                </div>
            </div>
            @if ($item->quantity > 1)
                <p class="text-xs">
                    @money($item->price) por unidad.
                </p>
            @endif



        </div>
    </div>
    <div class="flex flex-col gap-y-1 items-end">
        <p class="whitespace-nowrap">@money($item->total)</p>
        <p class="whitespace-nowrap font-normal">
            {{ $item->quantity }} {{ $item->quantity > 1 ? 'unidades' : 'unidad' }}.
        </p>

    </div>

</li>
