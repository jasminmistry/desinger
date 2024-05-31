<x-guest-layout>
    <!-- Session Status -->
    <div class="loginwrapper  bg-primary  flex  justify-center items-center ">
        <div
            class="flex flex-col gap-4 justify-center bg-background my-10 p-10 2xl:my-20 m-4 w-fit overflow-hidden xl:w-[calc(100vw-80px)]   2xl:w-[calc(100vw-160px)]  2xl:px-20 2xl:py-12 rounded-3xl   ">
            <div class="relative  rounded-xl">
                <div class="flex flex-col xl:flex-row items-center w-full gap-y-12">
                    <div class="basis-full xl:basis-1/2 w-full">
                        <div class="w-full  xl:w-[480px]  relative z-20">
                            <div class="w-full py-5 lg:py-10"><a class="inline-block" href="/dashboard"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32"
                                        class="h-10 w-10 2xl:w-14 2xl:h-14 text-primary">
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
                                    {{ __('Hey, Hello 👋') }}</div>
                                <div class="2xl:text-lg text-base text-default-600 mt-2 leading-6">
                                    {{ __('Enter the information you entered while registering.') }}</div>
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form class="mt-5 2xl:mt-7" method="POST" action="{{ route('login') }}">
                                    <div>
                                        <label
                                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                                            for="email">
                                            <x-input-label for="email" :value="__('Email')" />
                                        </label>
                                        <div class="flex-1 w-full">
                                            <x-text-input id="email"
                                                class="w-full bg-background dark:border-700 px-3 file:border-0 file:bg-transparent file:text-sm file:font-medium read-only:bg-background disabled:cursor-not-allowed disabled:opacity-50 transition duration-300 border-default-300 text-default-500 focus:outline-none focus:border-primary disabled:bg-default-200 placeholder:text-accent-foreground/50 border rounded-lg h-12 text-base read-only:leading-[48px]"
                                                type="email" name="email" :value="old('email')" required autofocus
                                                autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="mt-3.5">
                                        <label
                                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                                            for="password">
                                            <x-input-label for="password" :value="__('Password')" />
                                        </label>
                                        <div class="relative">
                                            <div class="flex-1 w-full">
                                                <x-text-input id="password"
                                                    class="w-full bg-background dark:border-700 px-3 file:border-0 file:bg-transparent file:text-sm file:font-medium read-only:bg-background disabled:cursor-not-allowed disabled:opacity-50 transition duration-300 border-default-300 text-default-500 focus:outline-none focus:border-primary disabled:bg-default-200 placeholder:text-accent-foreground/50 border rounded-lg h-12 text-base read-only:leading-[48px] peer"
                                                    type="password" name="password" required
                                                    autocomplete="current-password" />

                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                            <div class="absolute top-1/2 -translate-y-1/2 right-4 cursor-pointer">
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5  mb-8 flex flex-wrap gap-2">
                                        <div class="flex-1 flex  items-center gap-1.5 ">
                                            <input id="remember_me" type="checkbox"
                                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                                name="remember">
                                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    @csrf
                                    <x-primary-button>
                                        {{ __('Sign In') }}
                                    </x-primary-button>
                                </form>

                                <div class="mt-5 lg:mt-8 text-center text-base text-default-600">
                                    {{ __("Don't have an account?") }}
                                    <a class="text-primary" href="{{ route('register') }}"> {{ __('Sign Up') }} </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('auth.sidebar')
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
