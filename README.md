# Flowbite Blade Starter Kit

A production-ready Laravel starter kit built with [Flowbite Blade](https://flowbite-blade.dev), [Livewire](https://livewire.laravel.com), and [Tailwind CSS](https://tailwindcss.com). Ship beautiful, responsive applications faster with pre-built components, authentication, dark mode, and marketing pages — all ready to go.

## Features

- **Authentication** — Login, register, password reset, email verification, and two-factor authentication powered by [Laravel Fortify](https://laravel.com/docs/fortify)
- **User Settings** — Profile management, password change, appearance (dark mode toggle), 2FA setup, and account deletion via Livewire
- **Dark Mode** — System preference detection, manual toggle, and localStorage persistence with zero flash of unstyled content
- **Marketing Landing Page** — Hero, features, social proof, pricing, CTA, and footer sections using Flowbite Blade blocks
- **Admin Layout** — Responsive sidebar navigation with collapsible menu
- **Application UI Demo** — CRUD table, modals, drawers, and forms showcasing Flowbite Blade application blocks
- **50+ Blade Components** — Buttons, modals, dropdowns, tables, cards, alerts, and more
- **Fully Responsive** — Mobile-first layouts across all pages

## Requirements

- PHP 8.2+
- Node.js 18+
- Composer

## Installation

```bash
laravel new my-app --using=themesberg/flowbite-laravel-starter-kit
```

This scaffolds a new Laravel project with all dependencies, runs migrations, and builds assets automatically.

## Development

Start all development services (server, queue, logs, Vite) with a single command:

```bash
composer run dev
```

This runs concurrently:
- `php artisan serve` — Laravel development server
- `php artisan queue:listen` — Queue worker
- `php artisan pail` — Real-time log viewer
- `npm run dev` — Vite HMR

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Framework | Laravel 12 |
| Frontend | Tailwind CSS v4, Flowbite 4 |
| Components | Flowbite Blade, Blade Icons |
| Reactivity | Livewire 4, Alpine.js |
| Authentication | Laravel Fortify |
| Bundler | Vite 7 |
| Testing | Pest 4 |
| Linting | Laravel Pint |

## Project Structure

```
app/
├── Actions/Fortify/          # User creation & password reset
├── Concerns/                 # Validation rule traits
├── Livewire/Actions/         # Logout action
├── Models/                   # User model with 2FA support
└── Providers/                # App & Fortify service providers

resources/views/
├── components/               # Local Blade components (logo, auth header, etc.)
├── layouts/
│   ├── app.blade.php         # Admin layout (x-fwb.layouts.admin)
│   └── auth.blade.php        # Auth layout (x-fwb.layouts.auth)
├── pages/
│   ├── auth/                 # Verify email, 2FA challenge, confirm password
│   └── settings/             # Livewire settings pages (profile, password, 2FA, appearance)
├── dashboard.blade.php       # Admin dashboard
├── demo.blade.php            # Application UI blocks demo
└── welcome.blade.php         # Marketing landing page
```

## Available Routes

| Route | Description |
|-------|------------|
| `/` | Marketing landing page |
| `/login` | Login (Fortify) |
| `/register` | Registration (Fortify) |
| `/dashboard` | Admin dashboard (auth) |
| `/demo` | Application UI demo (auth) |
| `/settings/profile` | Profile settings (Livewire) |
| `/settings/password` | Password settings (Livewire) |
| `/settings/appearance` | Dark mode settings (Livewire) |
| `/settings/two-factor` | Two-factor authentication (Livewire) |

## Testing

```bash
# Run all tests with linting
composer run test

# Run tests only
php artisan test

# Run a specific test
php artisan test --filter=ExampleTest
```

## Linting

```bash
# Fix code style
composer run lint

# Check code style without fixing
composer run test:lint
```

## License

MIT
