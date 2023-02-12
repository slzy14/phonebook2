<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('chirps.update', $chirp) }}">
            @csrf
            @method('patch')
            <textarea
                name="lastName"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('lastName', $chirp->lastName) }}</textarea>
            <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
            <textarea
                name="firstName"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('firstName', $chirp->firstName) }}</textarea>
            <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
            <textarea
                name="middleName"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('middleName', $chirp->middleName) }}</textarea>
            <x-input-error :messages="$errors->get('middleName')" class="mt-2" />
            <textarea
                name="address"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('address', $chirp->address) }}</textarea>
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
            <textarea
                name="email"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('email', $chirp->email) }}</textarea>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <textarea
                name="contactNumber "
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('contactNumber ', $chirp->contactNumber ) }}</textarea>
            <x-input-error :messages="$errors->get('contactNumber ')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('chirps.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>