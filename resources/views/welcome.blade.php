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
        <x-fwb.blocks.marketing.feature.item fwb-icon="s-user-circle" title="Authentication" description="Complete auth scaffolding with login, register, password reset, email verification, and profile management — powered by Laravel Fortify." />
        <x-fwb.blocks.marketing.feature.item fwb-icon="s-moon" title="Dark Mode" description="Built-in dark mode support with localStorage persistence, system preference detection, and zero flash of unstyled content." />
        <x-fwb.blocks.marketing.feature.item fwb-icon="s-chart-mixed" title="50+ Blade Components" description="Buttons, modals, dropdowns, tables, cards, and more — all as composable Blade components with Tailwind CSS styling." />
        <x-fwb.blocks.marketing.feature.item fwb-icon="s-desktop-pc" title="Fully Responsive" description="Every component and layout is mobile-first and fully responsive, from the admin sidebar to the marketing landing pages." />
        <x-fwb.blocks.marketing.feature.item fwb-icon="s-rocket" title="Livewire Powered" description="Reactive, real-time interfaces built with Livewire and Alpine.js — no custom JavaScript required for dynamic functionality." />
        <x-fwb.blocks.marketing.feature.item fwb-icon="s-layers" title="Marketing Blocks" description="Pre-designed marketing sections — hero, features, pricing, CTA, testimonials, and more — ready to drop into any page." />
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
    >
        <x-fwb.pricing-card
            title="Starter"
            description="Best option for personal use & for your next project."
            price="29"
            period="/month"
            button-text="Get started"
            button-href="#"
        >
            <x-fwb.pricing-card.feature>Individual configuration</x-fwb.pricing-card.feature>
            <x-fwb.pricing-card.feature>No setup, or hidden fees</x-fwb.pricing-card.feature>
            <x-fwb.pricing-card.feature>Team size: <span class="font-semibold">1 developer</span></x-fwb.pricing-card.feature>
            <x-fwb.pricing-card.feature>Premium support: <span class="font-semibold">6 months</span></x-fwb.pricing-card.feature>
            <x-fwb.pricing-card.feature>Free updates: <span class="font-semibold">6 months</span></x-fwb.pricing-card.feature>
        </x-fwb.pricing-card>

        <x-fwb.pricing-card
            title="Company"
            description="Relevant for multiple users, extended & premium support."
            price="99"
            period="/month"
            button-text="Get started"
            button-href="#"
        >
            <x-fwb.pricing-card.feature>Individual configuration</x-fwb.pricing-card.feature>
            <x-fwb.pricing-card.feature>No setup, or hidden fees</x-fwb.pricing-card.feature>
            <x-fwb.pricing-card.feature>Team size: <span class="font-semibold">10 developers</span></x-fwb.pricing-card.feature>
            <x-fwb.pricing-card.feature>Premium support: <span class="font-semibold">24 months</span></x-fwb.pricing-card.feature>
            <x-fwb.pricing-card.feature>Free updates: <span class="font-semibold">24 months</span></x-fwb.pricing-card.feature>
        </x-fwb.pricing-card>

        <x-fwb.pricing-card
            title="Enterprise"
            description="Best for large scale uses and extended redistribution rights."
            price="499"
            period="/month"
            button-text="Get started"
            button-href="#"
        >
            <x-fwb.pricing-card.feature>Individual configuration</x-fwb.pricing-card.feature>
            <x-fwb.pricing-card.feature>No setup, or hidden fees</x-fwb.pricing-card.feature>
            <x-fwb.pricing-card.feature>Team size: <span class="font-semibold">100+ developers</span></x-fwb.pricing-card.feature>
            <x-fwb.pricing-card.feature>Premium support: <span class="font-semibold">36 months</span></x-fwb.pricing-card.feature>
            <x-fwb.pricing-card.feature>Free updates: <span class="font-semibold">36 months</span></x-fwb.pricing-card.feature>
        </x-fwb.pricing-card>
    </x-fwb.blocks.marketing.pricing>

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
