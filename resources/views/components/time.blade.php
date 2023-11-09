@props([
    'time' => now(),
])

<time datetime="{{ $time->toDateTimeString() }}" class="mr-8">
    {{ $time->diffForHumans() }}
</time>
