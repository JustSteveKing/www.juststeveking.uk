<a wire:poll wire:navigate href="#" class="my-8 group flex w-full items-center justify-between space-x-3 rounded-full border border-gray-300 p-2 text-left shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
    <div class="flex min-w-0 flex-1 items-center space-x-3">
        <div class="block flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="{{ $post->user->avatar }}" alt="{{ $post->user->name }}">
        </div>
        <p class="block min-w-0 flex-1">
            <span class="block truncate text-sm font-medium text-gray-900">{{ $post->title }}</span>
        </p>
    </div>
    <div class="inline-flex h-10 w-10 flex-shrink-0 items-center justify-center">
        icon
    </div>
</a>
