import 'flowbite';

// Re-init Flowbite after Livewire navigation
document.addEventListener('livewire:navigated', () => {
    window.initFlowbite?.();
});
