<?php

use App\Concerns\PasswordValidationRules;
use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

new class extends Component {
    use PasswordValidationRules;

    public string $password = '';

    /**
     * Delete the currently authenticated user.
     */
    public function deleteUser(Logout $logout): void
    {
        $this->validate([
            'password' => $this->currentPasswordRules(),
        ]);

        tap(Auth::user(), $logout(...))->delete();

        $this->redirect('/', navigate: true);
    }
}; ?>

<section class="mt-10 space-y-6">
    <div class="relative mb-5">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">{{ __('Delete account') }}</h2>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ __('Delete your account and all of its resources') }}</p>
    </div>

    <div x-data="{ showDeleteModal: false }">
        <x-fwb.button color="red" @click="showDeleteModal = true" data-test="delete-user-button">
            {{ __('Delete account') }}
        </x-fwb.button>

        {{-- Delete Account Modal --}}
        <div
            x-show="showDeleteModal || {{ $errors->isNotEmpty() ? 'true' : 'false' }}"
            x-cloak
            class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto"
        >
            {{-- Backdrop --}}
            <div x-show="showDeleteModal" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-900/50 dark:bg-gray-900/80" @click="showDeleteModal = false"></div>

            {{-- Modal Content --}}
            <div x-show="showDeleteModal" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="relative w-full max-w-lg p-4">
                <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                    {{-- Close button --}}
                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="showDeleteModal = false">
                        <x-fwb-o-close class="w-3 h-3" />
                        <span class="sr-only">{{ __('Close') }}</span>
                    </button>

                    <form method="POST" wire:submit="deleteUser" class="p-4 md:p-5 space-y-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('Are you sure you want to delete your account?') }}</h3>

                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                            </p>
                        </div>

                        <x-fwb.input wire:model="password" :label="__('Password')" type="password" />

                        <div class="flex justify-end space-x-2 rtl:space-x-reverse">
                            <x-fwb.button color="light" @click="showDeleteModal = false">{{ __('Cancel') }}</x-fwb.button>

                            <x-fwb.button color="red" type="submit" data-test="confirm-delete-user-button">
                                {{ __('Delete account') }}
                            </x-fwb.button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
