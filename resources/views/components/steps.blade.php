<div {{ $attributes->merge(['class' => 'steps py-7 px-12 bg-white rounded-xl flex items-center gap-4']) }}>
    {{ $slot }}
    <h4 class="text-base text-black font-bold">{{ $title}}</h4>
</div>
