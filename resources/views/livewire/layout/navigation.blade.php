<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="sm:sticky top-0 left-0 right-0 w-full bg-gradient-to-b from-black/90 to-black/0 pt-2">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex w-full">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 md:flex">
                    <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('app')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Products') }}
                    </x-nav-link>
                    <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('app')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Learn') }}
                    </x-nav-link>
                    <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('app')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Safety') }}
                    </x-nav-link>
                    <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('app')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Support') }}
                    </x-nav-link>
                    <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('app')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Download') }}
                    </x-nav-link>
                </div>

                <!-- Actions -->
                <div class="ml-auto items-center gap-9 hidden lg:flex">
                    <button class="font-bold text-white text-xl">
                        Language
                    </button>

                    <a href="" class="rounded-xl bg-white px-5 py-2 flex items-center justify-center font-bold my-auto" href="{{route('login')}}">
                        Login
                    </a>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center md:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

        <!-- Responsive Settings Options -->
            <div class="mt-3 space-y-1 flex flex-col gap-5 p-2 pt-2 pb-3">
                <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Products') }}
                </x-nav-link>
                <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Learn') }}
                </x-nav-link>
                <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Safety') }}
                </x-nav-link>
                <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Support') }}
                </x-nav-link>
                <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Download') }}
                </x-nav-link>
            </div>
    </div>
</nav>
