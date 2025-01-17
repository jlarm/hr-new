<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ $title ?? 'ARMP HR' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.svg') }}" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fluxStyles
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar
            sticky
            stashable
            class="border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900"
        >
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <div class="w-full">
                <x-application-logo class="h-8 w-auto" />
            </div>

            <x-navigation />

            <flux:spacer />

            <x-user-dropdown />
        </flux:sidebar>

        <flux:header
            class="!block border-b border-zinc-200 bg-white lg:bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900"
        >
            <x-mobile-navigation />

            <div class="flex items-end justify-between">
                @if (isset($pageTitle))
                    <flux:heading size="lg" class="mb-3">{{ $pageTitle }}</flux:heading>
                @endif

                @if (isset($actions))
                    {{ $actions }}
                @endif
            </div>
        </flux:header>

        <flux:main>
            @if (request()->routeIs('dashboard'))
                <x-welcome-message />
            @endif

            <main>
                {{ $slot }}
            </main>
        </flux:main>

        @fluxScripts
        @persist('toast')
            <flux:toast />
        @endpersist
    </body>
</html>
