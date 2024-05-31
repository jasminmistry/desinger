<x-guest-layout>

    <div class="loginwrapper bg-primary flex justify-center items-center relative overflow-hidden"><img
            alt="background image" loading="lazy" width="1920" height="1080" decoding="async" data-nimg="1"
            class="absolute top-0 left-0 w-full h-full light:hidden"
            srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fauth3-dark.04031864.png&amp;w=1920&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fauth3-dark.04031864.png&amp;w=3840&amp;q=75 2x"
            src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fauth3-dark.04031864.png&amp;w=3840&amp;q=75"
            style="color: transparent;"><img alt="background image" loading="lazy" width="1920" height="1080"
            decoding="async" data-nimg="1" class="absolute top-0 left-0 w-full h-full dark:hidden"
            srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fauth3-light.e4ae95a9.png&amp;w=1920&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fauth3-light.e4ae95a9.png&amp;w=3840&amp;q=75 2x"
            src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fauth3-light.e4ae95a9.png&amp;w=3840&amp;q=75"
            style="color: transparent;">
        <div class="w-full bg-card   max-w-xl  rounded-xl relative z-10 2xl:p-16 xl:p-12 p-10 m-4 ">
            <div class="w-full"><a class="inline-block" href="/dashboard"><svg xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 32 32" class="h-10 w-10 2xl:w-14 2xl:h-14 text-primary">
                        <g fill="currentColor" clip-path="url(#logo_svg__a)">
                            <path
                                d="M0 18.383c0-1.505 1.194-2.724 2.667-2.724H18v2.043c0 1.504-1.194 2.723-2.667 2.723H0zM9.333 32c-1.472 0-2.666-1.22-2.666-2.723v-8.17h2c1.472 0 2.666 1.219 2.666 2.723V32zM0 0h18.667C26.03 0 32 6.097 32 13.617H0zM16 32c2.101 0 4.182-.423 6.123-1.244a16 16 0 0 0 5.19-3.542 16.4 16.4 0 0 0 3.47-5.302A16.6 16.6 0 0 0 32 15.66h-9.159c0 .918-.177 1.826-.52 2.674a7 7 0 0 1-1.484 2.267 6.8 6.8 0 0 1-2.219 1.514c-.83.351-1.72.532-2.618.532z">
                            </path>
                        </g>
                        <defs>
                            <clipPath id="logo_svg__a">
                                <path fill="#fff" d="M0 0h32v32H0z"></path>
                            </clipPath>
                        </defs>
                    </svg></a>
                <div class="2xl:mt-8 mt-6 2xl:text-3xl text-2xl font-bold text-default-900">
                    {{ __('Reset Your Password?') }}</div>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form class="mt-5 2xl:mt-7" method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            {{ __('Reset Password') }}
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-guest-layout>
