<div class="w-full p-4">
    <form wire:submit.prevent="submit" class="space-y-4 pointer-events-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label for="firstName" class="block text-sm font-bold text-gray-200">First Name</label>
                <input type="text" id="firstName" wire:model="firstName"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500 focus:border-indigo-500 text-gray-900"
                       placeholder=" " required>
                @error('firstName') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="lastName" class="block text-sm font-bold text-gray-200">Last Name</label>
                <input type="text" id="lastName" wire:model="lastName"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500 focus:border-indigo-500 text-gray-900"
                       placeholder=" " required>
                @error('lastName') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label for="company" class="block text-sm font-bold text-gray-200">Company</label>
                <input type="text" id="company" wire:model="company"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500 focus:border-indigo-500 text-gray-900"
                       placeholder=" ">
                @error('company') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-bold text-gray-200">Email Address</label>
                <input type="email" id="email" wire:model="email"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500 focus:border-indigo-500 text-gray-900"
                       placeholder=" " required>
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>

        <div>
            <label for="message" class="block text-sm font-bold text-gray-200">Your enquiry</label>
            <textarea id="message" wire:model="message"
                      class="mt-1 block w-full h-48 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500 focus:border-indigo-500 text-gray-900"
                      placeholder=" " required></textarea>
            @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <button type="submit"
                    class="w-full px-4 py-2 font-semibold text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-300">
                Submit
            </button>
        </div>
    </form>
</div>
