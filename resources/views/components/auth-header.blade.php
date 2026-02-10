@props([
    'title',
    'description',
])

<div class="flex w-full flex-col text-center">
    <h1 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $title }}</h1>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ $description }}</p>
</div>
