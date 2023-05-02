<a href="#!" {{ $attributes->merge(['class' => 'flex px-10 items-center gap-8  after:duration-300 after:transition-all hover:after:w-1 after:h-8 after:absolute relative after:right-0 after:rounded-l-2xl hover:after:bg-pink-600 hover:text-pink-600  duration-300 transition-all']) }}>
    {{ $slot }}
    <h6 class="text-xl text-primary  font-medium">{{ $title }}</h6>
</a>
