<x-app-layout>
<div class="p-5 md:p-10 h-full">
    <form class=" max-w-3xl w-full shadow shadow-pink">
        <div class="flex flex-col gap-8 justify-between p-5 md:p-8 bg-white">
            <div class=" space-y-4 md:space-y-8">
                <div class="flex flex-col gap-2 w-full">
                    <x-lables >First Name</x-lables>
                    <x-input placeholder="First Name" type="text" ></x-input>
                </div>

                <div class="flex flex-col gap-2 w-full">
                    <x-lables >Last Name</x-lables>
                    <x-input placeholder="Last Name" type="text" ></x-input>
                </div>

                <div class="flex flex-col gap-2 w-full">
                    <x-lables >Email</x-lables>
                    <x-input placeholder="Email" type="email" ></x-input>
                </div>
                <div class="flex flex-col gap-2 w-full ">
                    <x-lables>Phone Number</x-lables>
                    <x-input placeholder="Phone Number" type="number" ></x-input>
                </div>
                <div class="flex flex-col gap-2 w-full">
                    <x-lables>Address</x-lables>
                    <textarea placeholder="Address" required type="number" class="bg-white sm:px-4 p-2 sm:py-3 focus-visible:outline-none border-2 border-gray-400 text-sm md:text-lg font-medium focus:border-primary focus:ring-primary"></textarea>
                </div>
            </div>
            <div class="self-end ">
                <x-button class="px-12 sm:px-16">
                    Submit
                </x-button>
            </div>
        </div>
    </form>
</div>
</x-app-layout>
