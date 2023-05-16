<button {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-lg  bg-primary text-lg md:text-xl items-center font-semibold py-2 sm:py-4 px-7 border-2 border-transparent text-white hover:border-secondary  focus:bg-primary active:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 transition ease-in-out duration-300']) }}>
    {{ $slot }}
</button>
