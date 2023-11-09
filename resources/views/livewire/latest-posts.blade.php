<div wire:poll class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
    @foreach($posts as $post)
        <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
            <img src="{{ url($post->image) }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>

            <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                <x-time :time="$post->updated_at" />

                <div class="-ml-4 flex items-center gap-x-4">
                    <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                        <circle cx="1" cy="1" r="1" />
                    </svg>
                    <div class="flex gap-x-2.5">
                        <x-avatar src="{{ $post->user->avatar }}" alt="{{ $post->user->name }}" size="6"/>

                        <span>{{ $post->user->name }}</span>
                    </div>
                </div>
            </div>
            <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
                <a href="#">
                    <span class="absolute inset-0"></span>
                    {{ $post->title }}
                </a>
            </h3>
        </article>
    @endforeach
</div>
