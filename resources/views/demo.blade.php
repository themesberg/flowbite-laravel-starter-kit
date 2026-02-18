<x-layouts::app :title="__('Application UI Demo')">
    <div class="space-y-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ __('Application UI Demo') }}</h1>
            <p class="mt-1 text-gray-500 dark:text-gray-400">{{ __('A showcase of the application UI blocks available in Flowbite Blade.') }}</p>
        </div>

        {{-- CRUD Products Table --}}
        <div class="rounded-xl border border-gray-200 dark:border-gray-700 overflow-hidden">
            <div class="px-4 py-3 bg-gray-50 dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('CRUD Products Table') }}</h2>
                <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">x-fwb.blocks.application.crud-products</p>
            </div>
            <x-fwb.blocks.application.crud-products />
        </div>

        {{-- Interactive CRUD Actions --}}
        <div class="rounded-xl border border-gray-200 dark:border-gray-700 overflow-hidden">
            <div class="px-4 py-3 bg-gray-50 dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('CRUD Modals & Drawers') }}</h2>
                <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">{{ __('Click the buttons below to preview each modal and drawer component.') }}</p>
            </div>
            <div class="p-6 bg-white dark:bg-gray-900">
                <div class="flex flex-wrap gap-3">
                    {{-- Create Modal trigger --}}
                    <button data-modal-target="demo-create-modal" data-modal-toggle="demo-create-modal" type="button" class="inline-flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <x-fwb-s-plus class="w-4 h-4 mr-2" />
                        {{ __('Create Modal') }}
                    </button>

                    {{-- Update Modal trigger --}}
                    <button data-modal-target="demo-update-modal" data-modal-toggle="demo-update-modal" type="button" class="inline-flex items-center text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none dark:focus:ring-yellow-900">
                        <x-fwb-s-pen class="w-4 h-4 mr-2" />
                        {{ __('Update Modal') }}
                    </button>

                    {{-- Delete Confirmation trigger --}}
                    <button data-modal-target="demo-delete-modal" data-modal-toggle="demo-delete-modal" type="button" class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none dark:focus:ring-red-900">
                        <x-fwb-s-trash-bin class="w-4 h-4 mr-2" />
                        {{ __('Delete Confirm') }}
                    </button>

                    {{-- Read Drawer trigger --}}
                    <button data-drawer-target="demo-read-drawer" data-drawer-show="demo-read-drawer" type="button" class="inline-flex items-center text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 focus:outline-none dark:focus:ring-gray-700">
                        <x-fwb-s-eye class="w-4 h-4 mr-2" />
                        {{ __('Read Drawer') }}
                    </button>
                </div>
            </div>
        </div>

        {{-- Create Modal --}}
        <x-fwb.blocks.application.crud-create-modal id="demo-create-modal" />

        {{-- Update Modal --}}
        <x-fwb.blocks.application.crud-update-modal id="demo-update-modal" />

        {{-- Delete Confirmation Modal --}}
        <x-fwb.blocks.application.crud-delete-confirm id="demo-delete-modal" />

        {{-- Read Drawer --}}
        <x-fwb.blocks.application.crud-read-drawer id="demo-read-drawer">
            <dl>
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">{{ __('Name') }}</dt>
                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">Apple iMac 27"</dd>
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">{{ __('Category') }}</dt>
                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">Electronics/PC</dd>
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">{{ __('Price') }}</dt>
                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">$2999</dd>
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">{{ __('Description') }}</dt>
                <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">Standard glass, 3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory.</dd>
            </dl>
            <x-slot:actions>
                <button type="button" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <x-fwb-s-pen class="w-5 h-5 mr-1 -ml-1" />
                    {{ __('Edit') }}
                </button>
                <button type="button" class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    <x-fwb-s-trash-bin class="w-5 h-5 mr-1.5 -ml-1" />
                    {{ __('Delete') }}
                </button>
            </x-slot:actions>
        </x-fwb.blocks.application.crud-read-drawer>

        {{-- Read Section (inline) --}}
        <div class="rounded-xl border border-gray-200 dark:border-gray-700 overflow-hidden">
            <div class="px-4 py-3 bg-gray-50 dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('Read Section') }}</h2>
                <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">x-fwb.blocks.application.crud-read-section</p>
            </div>
            <x-fwb.blocks.application.crud-read-section title="Apple iMac 27&quot;" />
        </div>

        {{-- Create Form (inline) --}}
        <div class="rounded-xl border border-gray-200 dark:border-gray-700 overflow-hidden">
            <div class="px-4 py-3 bg-gray-50 dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('Create Form') }}</h2>
                <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">x-fwb.blocks.application.crud-create-form</p>
            </div>
            <x-fwb.blocks.application.crud-create-form>
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="demo-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                        <input type="text" name="name" id="demo-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type product name">
                    </div>
                    <div class="w-full">
                        <label for="demo-brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                        <input type="text" name="brand" id="demo-brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Product brand">
                    </div>
                    <div class="w-full">
                        <label for="demo-price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" name="price" id="demo-price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="$2999">
                    </div>
                    <div>
                        <label for="demo-category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="demo-category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected="">Select category</option>
                            <option value="TV">TV/Monitors</option>
                            <option value="PC">PC</option>
                            <option value="GA">Gaming/Console</option>
                            <option value="PH">Phones</option>
                        </select>
                    </div>
                    <div>
                        <label for="demo-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Weight (kg)</label>
                        <input type="number" name="weight" id="demo-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="demo-description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="demo-description" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your description here"></textarea>
                    </div>
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    <x-fwb-s-plus class="w-5 h-5 mr-1 -ml-1" />
                    Add product
                </button>
            </x-fwb.blocks.application.crud-create-form>
        </div>

        {{-- Success Message --}}
        <div class="rounded-xl border border-gray-200 dark:border-gray-700 overflow-hidden">
            <div class="px-4 py-3 bg-gray-50 dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('Success Message') }}</h2>
                <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">x-fwb.blocks.application.crud-success-message</p>
            </div>
            <div class="flex justify-center p-6 bg-white dark:bg-gray-900">
                <x-fwb.blocks.application.crud-success-message
                    title="Product created"
                    message="The product has been successfully added to your inventory."
                />
            </div>
        </div>
    </div>
</x-layouts::app>
