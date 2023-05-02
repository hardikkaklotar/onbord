<nav x-data="{ open: false }" >
    <!-- Primary Navigation Menu -->
    <div class="bg-white flex items-center justify-between py-3 border-b  w-full  px-5 sm:px-10 h-full">
        <div class="flex items-center gap-5">
            <svg class="hamburger cursor-pointer w-6 h-6 2xl:hidden" viewBox="0 0 24 24" >
                <path d="M18 15l-.001 3H21v2h-3.001L18 23h-2l-.001-3H13v-2h2.999L16 15h2zm-7 3v2H3v-2h8zm10-7v2H3v-2h18zm0-7v2H3V4h18z"></path>
            </svg>
            <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Dashbord') }}
            </x-nav-link>
            <x-nav-link href="{{ route('Employee') }}" :active="request()->routeIs('Employee')">
                {{ __('Employee') }}
            </x-nav-link>
            <x-nav-link href="{{ route('profile') }}" :active="request()->routeIs('profile')">
                {{ __('Profile') }}
            </x-nav-link>

        </div>
        <div>
            <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="img" class="object-center object-cover w-10 h-10 sm:w-14 sm:h-14 rounded-full">
        </div>
    </div>
</nav>
