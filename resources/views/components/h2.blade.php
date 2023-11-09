@props([
    'id',
])

<h2 id="{{ $id }}" class="text-2xl font-bold tracking-wider">
    {{ $slot }}
</h2>
