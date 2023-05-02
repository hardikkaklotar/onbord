<x-app-layout>
        <div class="p-5 md:p-10 h-full">
            <div class="mb-10 md:mb-20">
                <h3 class="text-lg sm:text-2xl font-bold mb-4 sm:mb-7 block text-black">Top active</h3>
                <div class="grid grid-rows-1 grid-cols-6 gap-5">
                    <x-card class="col-span-6 sm:col-span-3  xl:col-span-2">
                        <div class="bg-primary p-3 lg:p-5 rounded ">
                            <svg class="w-5 sm:w-14 h-5 sm:h-14" viewBox="0 0 24 24">
                                <path fill="#fff" d="M20 7.238l-7.928 7.1L4 7.216V19h9v2H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v8h-2V7.238zM19.501 5H4.511l7.55 6.662L19.502 5zM20 18h3l-4 4-4-4h3v-4h2v4z" />
                            </svg>
                        </div>
                        <x-slot name="title">
                            1000+
                        </x-slot>
                        <x-slot name="smolltitle">
                            Total Employee
                        </x-slot>
                    </x-card>
                    <x-card class="col-span-6 sm:col-span-3  xl:col-span-2">
                        <div class="bg-primary p-3 lg:p-5 rounded ">
                            <svg class="w-5 sm:w-14 h-5 sm:h-14" viewBox="0 0 24 24">
                                <path fill="#fff" d="M20 7.238l-7.928 7.1L4 7.216V19h9v2H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v8h-2V7.238zM19.501 5H4.511l7.55 6.662L19.502 5zM20 18h3l-4 4-4-4h3v-4h2v4z" />
                            </svg>
                        </div>
                        <x-slot name="title">
                            250+
                        </x-slot>
                        <x-slot name="smolltitle">
                            Training Video
                        </x-slot>
                    </x-card>
                    <x-card class="col-span-6 sm:col-span-3 xl:col-span-2">
                        <div class="bg-primary p-3 lg:p-5 rounded ">
                            <svg class="w-5 sm:w-14 h-5 sm:h-14" viewBox="0 0 24 24">
                                <path fill="#fff" d="M20 7.238l-7.928 7.1L4 7.216V19h9v2H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v8h-2V7.238zM19.501 5H4.511l7.55 6.662L19.502 5zM20 18h3l-4 4-4-4h3v-4h2v4z" />
                            </svg>
                        </div>
                        <x-slot name="title">
                            150+
                        </x-slot>
                        <x-slot name="smolltitle">
                            Collobration Company
                        </x-slot>
                    </x-card>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full rounded-md ">
                    <thead>
                        <x-tr >
                        <x-th class="w-2/12 text-left"> Full Name</x-th>
                        <x-th class=" text-left">Address</x-th>
                        <x-th class="w-2/12 text-right" style="min-width: 80px">Action</x-th>
                    </x-tr>
                    </thead>
                    <tbody>
                        <x-tr>
                            <x-td class="w-1/7 text-left">
                                <div class="flex items-center  gap-3">
                                    <img class="h-11 w-11 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <h6 class="w-40 truncate block">Abraham Alman</h6>
                                </div>
                            </x-td>
                            <x-td class=" w-1/3 text-left">
                                <div class="w-40 lg:w-96 truncate">
                                    Address validation Software
                                </div>
                            </x-td>
                            <x-td class="text-right">
                                Done
                            </x-td>
                        </x-tr>
                        <x-tr>
                            <x-td class="w-1/7 text-left">
                                <div class="flex items-center  gap-3">
                                    <img class="h-11 w-11 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <h6 class="w-40 truncate block">Abraham Alman</h6>
                                </div>
                            </x-td>
                            <x-td class=" w-1/3 text-left">
                                <div class="w-40 lg:w-96 truncate">
                                    Explains The Most Common Uses
                                </div>
                            </x-td>
                            <x-td class="text-right">
                                Cancel
                            </x-td>
                        </x-tr>
                        <x-tr>
                            <x-td class="w-1/7 text-left">
                                <div class="flex items-center  gap-3">
                                    <img class="h-11 w-11 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <h6 class="w-40 truncate block">Abraham Alman</h6>
                                </div>
                            </x-td>
                            <x-td class=" w-1/3 text-left">
                                <div class="w-40 lg:w-96 truncate">
                                    Address validation Software
                                </div>
                            </x-td>
                            <x-td class="text-right">
                                Done
                            </x-td>
                        </x-tr>
                        <x-tr>
                            <x-td class="w-1/7 text-left">
                                <div class="flex items-center  gap-3">
                                    <img class="h-11 w-11 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <h6 class="w-40 truncate block">Abraham Alman</h6>
                                </div>
                            </x-td>
                            <x-td class=" w-1/3 text-left">
                                <div class="w-40 lg:w-96 truncate">
                                    Address validation Software
                                </div>
                            </x-td>
                            <x-td class="text-right">
                                Done
                            </x-td>
                        </x-tr>
                        <x-tr>
                            <x-td class="w-1/7 text-left">
                                <div class="flex items-center  gap-3">
                                    <img class="h-11 w-11 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <h6 class="w-40 truncate block">Abraham Alman</h6>
                                </div>
                            </x-td>
                            <x-td class=" w-1/3 text-left">
                                <div class="w-40 lg:w-96 truncate">
                                    Address validation Software
                                </div>
                            </x-td>
                            <x-td class="text-right">
                                Cancel
                            </x-td>
                        </x-tr>
                        <x-tr>
                            <x-td class="w-1/7 text-left">
                                <div class="flex items-center  gap-3">
                                    <img class="h-11 w-11 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <h6 class="w-40 truncate block">Abraham Alman</h6>
                                </div>
                            </x-td>
                            <x-td class=" w-1/3 text-left">
                                <div class="w-40 lg:w-96 truncate">
                                    Address validation Software
                                </div>
                            </x-td>
                            <x-td class="text-right">
                                Done
                            </x-td>
                        </x-tr>
                    </tbody>
                </table>
            </div>
        </div>
</x-app-layout>
