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

    <section aria-labelledby="some-shit" class="mx-auto max-w-xl px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8">
        <x-h2 id="some-shit">
            Some shit I do
        </x-h2>

        <x-p>
            Each season, we collaborate with world-class designers to create a collection inspired by the natural world.
        </x-p>

        <div class="mt-10 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
            <a href="#" class="group block">
                <div aria-hidden="true" class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg lg:aspect-h-6 lg:aspect-w-5 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-01.jpg" alt="Brown leather key ring with brass metal loops and rivets on wood table." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-4 text-base font-semibold text-gray-900">Handcrafted Collection</h3>
                <p class="mt-2 text-sm text-gray-500">Keep your phone, keys, and wallet together, so you can lose everything at once.</p>
            </a>
            <a href="#" class="group block">
                <div aria-hidden="true" class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg lg:aspect-h-6 lg:aspect-w-5 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-02.jpg" alt="Natural leather mouse pad on white desk next to porcelain mug and keyboard." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-4 text-base font-semibold text-gray-900">Organized Desk Collection</h3>
                <p class="mt-2 text-sm text-gray-500">The rest of the house will still be a mess, but your desk will look great.</p>
            </a>
            <a href="#" class="group block">
                <div aria-hidden="true" class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg lg:aspect-h-6 lg:aspect-w-5 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-03.jpg" alt="Person placing task list card into walnut card holder next to felt carrying case on leather desk pad." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-4 text-base font-semibold text-gray-900">Focus Collection</h3>
                <p class="mt-2 text-sm text-gray-500">Be more productive than enterprise project managers with a single piece of paper.</p>
            </a>

        </div>
    </section>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <x-h2 id="latest-posts">From the blog</x-h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
            </div>

            <livewire:latest-posts />

        </div>
    </div>

</x-page>
