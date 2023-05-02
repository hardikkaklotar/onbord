<aside class=" bg-primary text-white shadow w-80 flex flex-col  justify-between  2xl:relative fixed sidebar z-40 overflow-y-auto h-screen -left-96 2xl:left-0 py-5 ">
    <div class="">
        <div class="flex items-center justify-between px-5 pb-3 2xl:pb-5 border-b gap-3 2xl:gap-5">
            <a href="#!" class="2xl:mx-auto">
                <h1 class="text-2xl lg:text-4xl font-bold">codepen</h1>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" enable-background="new 0 0 40 40" class="w-14 h-14 close cursor-pointer 2xl:hidden">
                <line x1="15" y1="15" x2="25" y2="25" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10"></line>
                <line x1="25" y1="15" x2="15" y2="25" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10"></line>
            </svg>
        </div>

        <a href="{{ route('home') }}" :active=" request()->routeIs('home')" class="flex px-5 py-5 items-center border-b gap-4 hover:text-black  hover:bg-secondary  border-gray-200 duration-300 transition-all test">
            <svg class="w-8 h-8" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_580_3772)">
                    <path d="M8.16289 3.46748C8.11927 3.42575 8.06124 3.40247 8.00088 3.40247C7.94052 3.40247 7.88248 3.42575 7.83887 3.46748L2.44531 8.61992C2.42241 8.64183 2.40418 8.66816 2.39175 8.69731C2.37931 8.72647 2.37291 8.75785 2.37295 8.78955L2.37207 13.6253C2.37207 13.8739 2.47084 14.1124 2.64666 14.2882C2.82247 14.464 3.06093 14.5628 3.30957 14.5628H6.125C6.24932 14.5628 6.36855 14.5134 6.45645 14.4255C6.54436 14.3376 6.59375 14.2184 6.59375 14.094V10.1097C6.59375 10.0475 6.61844 9.98789 6.6624 9.94393C6.70635 9.89998 6.76596 9.87529 6.82812 9.87529H9.17187C9.23403 9.87529 9.29365 9.89998 9.3376 9.94393C9.38156 9.98789 9.40625 10.0475 9.40625 10.1097V14.094C9.40625 14.2184 9.45563 14.3376 9.54354 14.4255C9.63145 14.5134 9.75068 14.5628 9.875 14.5628H12.6893C12.9379 14.5628 13.1764 14.464 13.3522 14.2882C13.528 14.1124 13.6268 13.8739 13.6268 13.6253V8.78955C13.6268 8.75785 13.6204 8.72647 13.608 8.69731C13.5955 8.66816 13.5773 8.64183 13.5544 8.61992L8.16289 3.46748Z" fill="#fff"/>
                    <path d="M14.8821 7.65369L12.6907 5.5572V2.37585C12.6907 2.25153 12.6413 2.13231 12.5534 2.0444C12.4655 1.95649 12.3463 1.9071 12.222 1.9071H10.8157C10.6914 1.9071 10.5722 1.95649 10.4843 2.0444C10.3964 2.13231 10.347 2.25153 10.347 2.37585V3.31335L8.65011 1.69089C8.49132 1.53035 8.25518 1.43835 8.00001 1.43835C7.74571 1.43835 7.51016 1.53035 7.35138 1.69119L1.11993 7.6531C0.937706 7.82888 0.914855 8.11804 1.08068 8.30847C1.12232 8.35654 1.1733 8.39563 1.23053 8.42337C1.28776 8.4511 1.35003 8.4669 1.41356 8.46981C1.47709 8.47271 1.54054 8.46266 1.60006 8.44026C1.65958 8.41787 1.71392 8.38359 1.75978 8.33952L7.83888 2.53054C7.88249 2.48882 7.94053 2.46553 8.00089 2.46553C8.06125 2.46553 8.11928 2.48882 8.1629 2.53054L14.2426 8.33952C14.3321 8.42541 14.4521 8.47228 14.5762 8.46986C14.7002 8.46745 14.8183 8.41594 14.9044 8.32663C15.0843 8.14031 15.0693 7.83269 14.8821 7.65369Z" fill="#fff"/>
                </g>
                <defs>
                    <clipPath id="clip0_580_3772">
                        <rect width="15" height="15" fill="white" transform="translate(0.5 0.5)"/>
                    </clipPath>
                </defs>
            </svg>
            <h6 class=" text-lg md:text-xl font-medium">Dashbord</h6>
        </a>
        <a href="{{ route('Employee') }}"class="flex px-5 py-5 items-center border-b gap-4 hover:text-black border-gray-200 duration-300 hover:bg-secondary  transition-all">
            <svg  viewBox="0 0 24 24" class="w-8 h-8">
                <path fill="#fff" d="M2 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm8.284 3.703A8.002 8.002 0 0 1 23 22h-2a6.001 6.001 0 0 0-3.537-5.473l.82-1.824zm-.688-11.29A5.5 5.5 0 0 1 21 8.5a5.499 5.499 0 0 1-5 5.478v-2.013a3.5 3.5 0 0 0 1.041-6.609l.555-1.943z" />
            </svg>
            <h6 class=" text-lg md:text-xl font-medium">Employee</h6>
        </a>
        <a href="{{ route('profile') }}"class="flex px-5 py-5 items-center  gap-4 hover:text-black hover:bg-secondary  duration-300 transition-all">
            <svg viewBox="0 0 24 24" class="w-8 h-8">
                <path fill="#fff" d="M20 22h-2v-2a3 3 0 0 0-3-3H9a3 3 0 0 0-3 3v2H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5v2zm-8-9a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
            </svg>
            <h6 class=" text-lg md:text-xl font-medium">Profile</h6>
        </a>
    </div>
    <form method="POST" action="{{ route('logout') }}" x-data class="mx-2">
        @csrf
        <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="logout-btn">
            <x-button class="flex w-full gap-3 px-5">
                <svg class="w-8 h-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 16l4-4m0 0l-4-4 m4 4h-14m5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h3a3 3 0 013 3v1"></path></svg>
                Logout
            </x-button>
        </a>
    </form>

</aside>
