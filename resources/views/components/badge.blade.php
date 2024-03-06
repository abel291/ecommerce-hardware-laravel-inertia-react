@props(['color' => 'gray'])
@php
    $colors = [
        'gray' =>
            'bg-gray-50 text-gray-600 ring-gray-500/10 dark:bg-gray-400/10 dark:ring-gray-300/20 dark:text-gray-300',
        'red' => 'bg-red-50 text-red-700 ring-red-600/10 dark:bg-red-400/10 dark:ring-red-400/20 dark:text-red-500',
        'yellow' =>
            'bg-yellow-50 text-yellow-800 ring-yellow-600/20 dark:bg-yellow-400/10 dark:ring-yellow-400/20 dark:text-yellow-500 ',
        'green' =>
            'bg-green-50 text-green-700 ring-green-600/20 dark:bg-green-400/10 dark:ring-green-400/20 dark:text-green-500',
        'blue' =>
            'bg-blue-50 text-blue-700 ring-blue-700/10 dark:bg-blue-400/10 dark:ring-blue-400/20 dark:text-blue-500',
        'indigo' =>
            'bg-blue-50 text-blue-700 ring-blue-700/10 dark:bg-blue-400/10 dark:ring-blue-400/20 dark:text-blue-500',
        'purple' =>
            'bg-purple-50 text-purple-700 ring-purple-700/10 dark:bg-purple-400/10 dark:ring-purple-400/20 dark:text-purple-500',
        'pink' =>
            'bg-pink-50 text-pink-700 ring-pink-700/10 dark:bg-pink-400/10 dark:ring-pink-400/20 dark:text-pink-500',
        'orange' =>
            'bg-orange-50 text-orange-700 ring-orange-700/10 dark:bg-orange-400/10 dark:ring-orange-400/20 dark:text-orange-500',
    ];
@endphp
<span
    {{ $attributes->merge(['class' => 'text-xs inline-flex items-center rounded-md whitespace-nowrap px-2 py-1 font-medium ring-1 ring-inset ' . $colors[$color]]) }}>
    {{ $slot }}
</span>
