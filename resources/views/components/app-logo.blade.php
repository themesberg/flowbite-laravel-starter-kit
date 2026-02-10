@props([
    'sidebar' => false,
])

<a {{ $attributes }} class="flex items-center gap-2 font-medium">
    <span class="flex aspect-square size-8 items-center justify-center rounded-md bg-gray-900 dark:bg-white">
        <x-app-logo-icon class="size-5 fill-current text-white dark:text-black" />
    </span>
    <span class="text-sm font-semibold text-gray-900 dark:text-white">{{ config('app.name', 'Laravel') }}</span>
</a>
