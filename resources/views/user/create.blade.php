<x-app-layout>
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="flex flex-wrap items-center gap-4 mb-1">
            <div class="flex-1">
                <h2 class="text-xl font-medium text-default-700 mb-2">{{ __('Create User') }}</h2>
            </div>
        </div>
            <div class="flex-none">
                <div class="max-w-xl">
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Roles -->
                        <div class="relative flex w-full flex-col rounded-xl ">
                            <nav
                                class="flex min-w-[240px] flex-row gap-1 pt-2 font-sans text-base font-normal text-blue-gray-700">
                                @foreach ($roles as $enum)
                                    @if ($enum->value == 'super-admin')
                                        @continue
                                    @endif
                                    <div role="button"
                                        class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                        <label htmlFor="horizontal-list-react"
                                            class="flex items-center w-full px-3 py-2 cursor-pointer">

                                            <x-checkbox name="role[]" value="{{ $enum->value }}"
                                                checked="{{ old('role') == $enum->value ? 'checked' : '' }}"></x-checkbox>
                                            {{ $enum->name }}
                                        </label>
                                    </div>
                                @endforeach

                            </nav>
                            <x-input-error :messages="$errors->get('role')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Create') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
