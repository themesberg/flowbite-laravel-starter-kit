<x-fwb.layouts.admin :title="$title ?? null">
    <x-slot:sidebarNav>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ request()->routeIs('dashboard') ? 'bg-gray-100 dark:bg-gray-700' : '' }}" wire:navigate>
                    <x-fwb-s-chart-pie class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" />
                    <span class="ms-3">{{ __('Dashboard') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('demo') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ request()->routeIs('demo') ? 'bg-gray-100 dark:bg-gray-700' : '' }}" wire:navigate>
                    <x-fwb-s-layers class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" />
                    <span class="ms-3">{{ __('Demo') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile.edit') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ request()->routeIs('profile.edit') ? 'bg-gray-100 dark:bg-gray-700' : '' }}" wire:navigate>
                    <x-fwb-s-gear class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" />
                    <span class="ms-3">{{ __('Settings') }}</span>
                </a>
            </li>
        </ul>
    </x-slot:sidebarNav>
    {{ $slot }}
</x-fwb.layouts.admin>
