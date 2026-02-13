import 'flowbite';

function applyDarkMode() {
    if (localStorage.getItem('color-theme') === 'dark' || (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
}

// Re-apply dark mode and re-init Flowbite after Livewire navigation
document.addEventListener('livewire:navigated', () => {
    applyDarkMode();
    window.initFlowbite?.();
});
