<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>
</head>
<body class="bg-white dark:bg-gray-900 antialiased">

    {{-- Header --}}
    <x-fwb.blocks.marketing.header
        :brandName="config('app.name', 'Laravel')"
        :brandHref="route('home')"
    >
        <x-slot:nav>
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li>
                    <a href="#features" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
                </li>
                <li>
                    <a href="#pricing" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
                </li>
                <li>
                    <a href="#cta" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
            </ul>
        </x-slot:nav>

        <x-slot:actions>
            @auth
                <a href="{{ route('dashboard') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get started</a>
                @endif
            @endauth
        </x-slot:actions>
    </x-fwb.blocks.marketing.header>

    {{-- Hero --}}
    <x-fwb.blocks.marketing.hero
        title="Build modern apps with Laravel & Flowbite"
        description="A production-ready starter kit combining the power of Laravel, Livewire, and Flowbite Blade components. Ship beautiful, responsive applications faster."
        primaryButtonText="Get started"
        :primaryButtonHref="route('register')"
        secondaryButtonText="Documentation"
        secondaryButtonHref="https://flowbite-blade.dev"
    >
        <x-slot:badge>
            {{-- Hide default badge --}}
        </x-slot:badge>
    </x-fwb.blocks.marketing.hero>

    {{-- Features --}}
    <x-fwb.blocks.marketing.feature
        id="features"
        title="Everything you need to build modern apps"
        description="Pre-built components and blocks designed for Laravel applications, with dark mode, responsive layouts, and full Livewire support."
    >
        {{-- Authentication --}}
        <div>
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Authentication</h3>
            <p class="text-gray-500 dark:text-gray-400">Complete auth scaffolding with login, register, password reset, email verification, and profile management — powered by Laravel Fortify.</p>
        </div>
        {{-- Dark Mode --}}
        <div>
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Dark Mode</h3>
            <p class="text-gray-500 dark:text-gray-400">Built-in dark mode support with localStorage persistence, system preference detection, and zero flash of unstyled content.</p>
        </div>
        {{-- Blade Components --}}
        <div>
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">50+ Blade Components</h3>
            <p class="text-gray-500 dark:text-gray-400">Buttons, modals, dropdowns, tables, cards, and more — all as composable Blade components with Tailwind CSS styling.</p>
        </div>
        {{-- Responsive --}}
        <div>
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Fully Responsive</h3>
            <p class="text-gray-500 dark:text-gray-400">Every component and layout is mobile-first and fully responsive, from the admin sidebar to the marketing landing pages.</p>
        </div>
        {{-- Livewire --}}
        <div>
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Livewire Powered</h3>
            <p class="text-gray-500 dark:text-gray-400">Reactive, real-time interfaces built with Livewire and Alpine.js — no custom JavaScript required for dynamic functionality.</p>
        </div>
        {{-- Marketing Blocks --}}
        <div>
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                </svg>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Marketing Blocks</h3>
            <p class="text-gray-500 dark:text-gray-400">Pre-designed marketing sections — hero, features, pricing, CTA, testimonials, and more — ready to drop into any page.</p>
        </div>
    </x-fwb.blocks.marketing.feature>

    {{-- Social Proof --}}
    <x-fwb.blocks.marketing.social-proof>
        <div class="flex flex-col items-center justify-center">
            <dt class="mb-2 text-3xl md:text-4xl font-extrabold">50+</dt>
            <dd class="font-light text-gray-500 dark:text-gray-400">Blade components</dd>
        </div>
        <div class="flex flex-col items-center justify-center">
            <dt class="mb-2 text-3xl md:text-4xl font-extrabold">30+</dt>
            <dd class="font-light text-gray-500 dark:text-gray-400">Marketing blocks</dd>
        </div>
        <div class="flex flex-col items-center justify-center">
            <dt class="mb-2 text-3xl md:text-4xl font-extrabold">100%</dt>
            <dd class="font-light text-gray-500 dark:text-gray-400">Dark mode support</dd>
        </div>
    </x-fwb.blocks.marketing.social-proof>

    {{-- Pricing --}}
    <x-fwb.blocks.marketing.pricing
        id="pricing"
        title="Simple, transparent pricing"
        description="Choose the perfect plan for your team. All plans include access to our full component library and priority support."
    />

    {{-- CTA --}}
    <x-fwb.blocks.marketing.cta
        id="cta"
        title="Start building with Flowbite Blade today"
        description="Get up and running in minutes with a fully configured Laravel application. Authentication, layouts, components, and dark mode — all ready to go."
        primaryButtonText="Get started"
        :primaryButtonHref="route('register')"
        secondaryButtonText="Learn more"
        secondaryButtonHref="https://flowbite-blade.dev"
    />

    {{-- Footer --}}
    <x-fwb.blocks.marketing.footer-sitemap
        :brandName="config('app.name', 'Laravel')"
        :brandHref="route('home')"
        :copyright="'&copy; ' . date('Y') . ' ' . config('app.name', 'Laravel') . '. All Rights Reserved.'"
    />

</body>
</html>
