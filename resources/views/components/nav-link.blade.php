@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-lg lg:text-2xl  font-medium leading-5 font-semibold'
            : 'text-lg sm:text-xl  font-medium leading-5 hidden font-semibold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
