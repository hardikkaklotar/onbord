@props(['disabled' => false])

<input required {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['placeholder' => '', 'class' => 'bg-white sm:px-4 p-2 sm:py-3 text-grey focus-visible:outline-none rounded-lg border border-grey text-sm md:text-lg  w-full focus:border-primary focus:ring-primary ']) !!}>
