<?php

declare(strict_types=1);

\Laravel\Folio\name('pages:index'); ?>

<x-page title="Home Page">
    <div class="relative">
        <div class="mx-auto max-w-7xl">
            <div class="relative z-10 lg:w-full lg:max-w-2xl">
                <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white dark:fill-black lg:block" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="0,0 90,0 50,100 0,100"></polygon>
                </svg>

                <div class="relative px-6 py-24 sm:py-24 lg:px-8 lg:py-56 lg:pr-0">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">

                        <livewire:latest-post />

                        <h1 class="my-8 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                            {{ config('site.title') }}
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            {{ config('site.subtitle') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="aspect-[16/9] object-cover lg:aspect-[16/9] lg:h-full lg:w-full" src="/storage/steve.png" alt="">
        </div>
    </div>
</x-page>
