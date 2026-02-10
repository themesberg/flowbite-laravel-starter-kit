<?php

use Livewire\Component;

new class extends Component {
    //
}; ?>

<section class="w-full">
    @include('partials.settings-heading')

    <h2 class="sr-only">{{ __('Appearance Settings') }}</h2>

    <x-pages::settings.layout :heading="__('Appearance')" :subheading="__('Update the appearance settings for your account')">
        <div x-data="{
            theme: localStorage.getItem('color-theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'),
            setTheme(value) {
                this.theme = value;
                if (value === 'system') {
                    localStorage.removeItem('color-theme');
                    if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                } else if (value === 'dark') {
                    localStorage.setItem('color-theme', 'dark');
                    document.documentElement.classList.add('dark');
                } else {
                    localStorage.setItem('color-theme', 'light');
                    document.documentElement.classList.remove('dark');
                }
            }
        }" class="flex gap-2">
            <button
                @click="setTheme('light')"
                :class="theme === 'light' ? 'bg-blue-700 text-white dark:bg-blue-600' : 'bg-white text-gray-900 border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700'"
                class="inline-flex items-center gap-2 px-4 py-2.5 text-sm font-medium rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800"
            >
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10Zm0-11a1 1 0 0 0 1-1V1a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1Zm0 12a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1ZM4.343 5.757a1 1 0 0 0 1.414-1.414L4.343 2.929a1 1 0 0 0-1.414 1.414l1.414 1.414Zm11.314 8.486a1 1 0 0 0-1.414 1.414l1.414 1.414a1 1 0 0 0 1.414-1.414l-1.414-1.414ZM4 10a1 1 0 0 0-1-1H1a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1Zm15-1h-2a1 1 0 1 0 0 2h2a1 1 0 0 0 0-2ZM4.343 14.243l-1.414 1.414a1 1 0 1 0 1.414 1.414l1.414-1.414a1 1 0 0 0-1.414-1.414ZM14.95 6.05a1 1 0 0 0 .707-.293l1.414-1.414a1 1 0 1 0-1.414-1.414l-1.414 1.414a1 1 0 0 0 .707 1.707Z"/></svg>
                {{ __('Light') }}
            </button>
            <button
                @click="setTheme('dark')"
                :class="theme === 'dark' ? 'bg-blue-700 text-white dark:bg-blue-600' : 'bg-white text-gray-900 border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700'"
                class="inline-flex items-center gap-2 px-4 py-2.5 text-sm font-medium rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800"
            >
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 18 20"><path d="M17.8 13.75a1 1 0 0 0-.859-.5A7.488 7.488 0 0 1 10.52 2a1 1 0 0 0 0-.969A1.035 1.035 0 0 0 9.687.5h-.113a9.5 9.5 0 1 0 8.222 14.247 1 1 0 0 0 .004-.997Z"/></svg>
                {{ __('Dark') }}
            </button>
            <button
                @click="setTheme('system')"
                :class="theme === 'system' || (!theme) ? 'bg-blue-700 text-white dark:bg-blue-600' : 'bg-white text-gray-900 border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700'"
                class="inline-flex items-center gap-2 px-4 py-2.5 text-sm font-medium rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800"
            >
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M20 9H4a1 1 0 0 0-1 1v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-8a1 1 0 0 0-1-1ZM2 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H2V6Z"/></svg>
                {{ __('System') }}
            </button>
        </div>
    </x-pages::settings.layout>
</section>
