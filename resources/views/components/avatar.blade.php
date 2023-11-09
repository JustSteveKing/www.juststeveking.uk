@props([
    'src',
    'alt',
    'size' => '10',
])

<img
    class="h-{{ $size }} w-{{ $size }} rounded-full"
    src="{{ $src }}"
    alt="{{ $alt }}"
/>
