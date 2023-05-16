<div class="flex flex-col sm:justify-between items-start pt-6 sm:pt-0 bg-white h-full">
    <x-authentication-card-logo></x-authentication-card-logo>

    <div class="w-full px-2 overflow-hidden ">
            {{ $slot }}
    </div>
    <a class="underline text-sm  text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
        {{ __('Already have an account?') }}
    </a>
</div>
