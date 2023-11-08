@props([
    'title' => config('app.name'),
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    @stack('meta')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <livewire:styles />
</head>
<body class="antialiased">
    <div class="bg-white dark:bg-black">
        <header x-data="{ open: false }" @keydown.window.escape="open = false" class="sticky inset-x-0 top-0 z-50">
            <div class="mx-auto max-w-7xl">
                <div class="py-6">
                    <nav class="flex items-center justify-between lg:justify-start" aria-label="Global">
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 lg:hidden" @click="open = true">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                            </svg>
                        </button>
                        <div class="hidden lg:ml-12 lg:flex lg:gap-x-14">
                            <a wire:navigate href="{{ route('pages:index') }}" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="lg:hidden" x-ref="dialog" x-show="open" aria-modal="true" x-cloak>
                <div class="fixed inset-0 z-50"></div>
                <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10" @click.away="open = false">
                    <div class="flex items-center justify-between">
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open = false">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a wire:navigate href="{{ route('pages:index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Home</a>
                                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            {{ $slot }}
        </main>
    </div>

    <livewire:scripts />
</body>
</html>
