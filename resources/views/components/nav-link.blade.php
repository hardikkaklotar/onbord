@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-2xl lg:text-4xl  font-medium leading-5 font-semibold'
            : 'text-lg sm:text-xl  font-medium leading-5 hidden font-semibold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
