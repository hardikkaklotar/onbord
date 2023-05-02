<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Styles -->
        @livewireStyles

    </head>
    <body class="font-sans antialiased">
        <div class="flex min-h-screen overflow-hidden overflow-y-auto ">
            @include('partials.sidebar')
            <div class="w-full overflow-auto">
                @livewire('navigation-menu')
                <main class="w-full bg-gray-100">
                    {{ $slot }}
                </main>
            </div>

{{--        TEST POPUP SECTION   --}}
            <div class="model fixed h-full xl:h-screen p-5 w-full overflow-auto z-50">
                <div class=" flex items-center justify-center w-full h-full">
                    <form class=" max-w-3xl w-full  shadow">
                        <div class="bg-primary text-white flex items-center  px-5 md:px-8 py-4  md:py-5 font-medium justify-between gap-5">
                            <h2 class="text-xl md:text-2xl">Philup Form Details</h2>
                            <svg viewBox="0 0 500 500" class="w-4 h-5 md:w-5 md:h-5 close rotate-45 fill-white">
                                <rect x="212" y="0" width="76" height="500" ></rect>
                                <rect y="212" x="0" height="76" width="500" ></rect>
                            </svg>
                        </div>
                        <div class="flex flex-col gap-8 justify-between p-5 md:p-8 bg-white">
                            <div class=" space-y-4 md:space-y-8">
                                <div class="flex justify-between items-center  gap-2">
                                    <div class="flex flex-col w-full gap-2">
                                        <x-lables >First Name</x-lables>
                                        <x-input placeholder="First Name" type="text"></x-input>
                                    </div>
                                    <div class="flex flex-col gap-2 w-full ">
                                        <x-lables >Last Name</x-lables>
                                        <x-input placeholder="Last Name" type="text"></x-input>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2 w-full">
                                    <x-lables >Email</x-lables>
                                    <x-input placeholder="Email" type="email"></x-input>
                                </div>
                                <div class="flex flex-col gap-2 w-full ">
                                    <x-lables>Phone Number</x-lables>
                                    <x-input placeholder="Phone Number" type="number"></x-input>
                                </div>
                            </div>
                            <div class="self-end ">
                                <x-button class="bg-secondary  px-12 sm:px-16">
                                    submit
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

    </body>

</html>
