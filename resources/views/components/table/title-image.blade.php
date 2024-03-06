@props(['img' => null, 'title' => null, 'subTitle' => null, 'path' => null])
<div class="flex items-center gap-x-4">
    @if ($img)
        <x-table.image :img="$img" />
    @endif
    @if ($title || $subTitle)
        <div>

            @if ($title)
                @if ($path)
                    <a class="font-medium text-primary-600 dark:text-primary-300" target='_blank'
                        href={{ $path }}>
                        {{ $title }}
                    </a>
                @else
                    <div class="font-medium text-black dark:text-white ">
                        {{ $title }}
                    </div>
                @endif
            @endif
            @if ($subTitle)
                <div class="mt-0.5 text-gray-700 dark:text-neutral-300">
                    {{ $subTitle }}
                </div>
            @endif

        </div>
    @endif

</div>
