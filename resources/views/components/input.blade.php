@props(['disabled' => false])

<input required {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['placeholder' => '', 'class' => 'bg-white sm:px-4 p-2 sm:py-3 focus-visible:outline-none border-2 border-gray-400 text-sm md:text-lg font-medium w-full focus:border-primary focus:ring-primary ']) !!}>
