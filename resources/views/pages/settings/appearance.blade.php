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
                <x-fwb-s-sun class="w-4 h-4" />
                {{ __('Light') }}
            </button>
            <button
                @click="setTheme('dark')"
                :class="theme === 'dark' ? 'bg-blue-700 text-white dark:bg-blue-600' : 'bg-white text-gray-900 border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700'"
                class="inline-flex items-center gap-2 px-4 py-2.5 text-sm font-medium rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800"
            >
                <x-fwb-s-moon class="w-4 h-4" />
                {{ __('Dark') }}
            </button>
            <button
                @click="setTheme('system')"
                :class="theme === 'system' || (!theme) ? 'bg-blue-700 text-white dark:bg-blue-600' : 'bg-white text-gray-900 border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700'"
                class="inline-flex items-center gap-2 px-4 py-2.5 text-sm font-medium rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800"
            >
                <x-fwb-s-desktop-pc class="w-4 h-4" />
                {{ __('System') }}
            </button>
        </div>
    </x-pages::settings.layout>
</section>
