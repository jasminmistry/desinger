<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Preferences') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('profile.preference.update') }}">
        @csrf
        @method('patch')
        <div class="p-4 sm:p-8 bg-card shadow">
            <div>
                <x-auth-session-status class="mb-4" :status="session('profile-updated')" />
                @include('profile.partials.update-digitize-preference')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-card shadow">
            <div>
                @include('profile.partials.update-vector-preference')

            </div>
            <div class="w-20 pt-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
            </div>
        </div>
    </form>

</x-app-layout>
