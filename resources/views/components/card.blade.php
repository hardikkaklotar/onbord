
<div {{ $attributes->merge(['type' => 'submit', 'class' => 'p-4 bg-secondary rounded shadow flex items-center gap-5']) }}>
        {{ $slot }}
        <div class="block ">
            <h2 {{ $attributes->merge(['class' => 'text-lg sm:text-xl  text-primary 2xl:text-3xl text-zinc-400 mb-1.5 2xl:mb-3 font-bold']) }}> {{ $title }}</h2>
            <h6 {{ $attributes->merge(['class' => 'text-sm sm:text-lg text-black 2xl:text-xl w-28 sm:w-44  truncate  text-black font-medium']) }}>{{ $smolltitle }}</h6>
        </div>
</div>
