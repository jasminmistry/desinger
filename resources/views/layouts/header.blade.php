<header class="z-50 has-sticky-header rounded-md xl:ml-[272px] sticky top-6"
    :class="sidebar ? 'xl:ml-[248px]' : 'xl:ml-[72px]'">
    <div class="xl:mx-10 mx-4">
        <div class="w-full bg-card/90 backdrop-blur-lg md:px-6 px-[15px] py-3 border-b">
            <div class="flex justify-between items-center h-full">
                <div class="flex items-center md:gap-6 gap-3"><button
                        class="relative group  disabled:cursor-not-allowed opacity-50" @click="sidebar = !sidebar">
                        <div>
                            <div
                                class="flex flex-col justify-between w-[20px] h-[16px] transform transition-all duration-300 origin-center overflow-hidden">
                                <div
                                    class="bg-card-foreground h-[2px] transform transition-all duration-300 origin-left delay-150 w-7">
                                </div>
                                <div
                                    class="bg-card-foreground h-[2px] w-7 rounded transform transition-all duration-300">
                                </div>
                                <div
                                    class="bg-card-foreground h-[2px] transform transition-all duration-300 origin-left delay-150 w-7">
                                </div>
                            </div>
                        </div>
                    </button>

                </div>
                <div class="nav-tools flex items-center  gap-2">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center justify-center text-sm font-semibold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none bg-transparent relative hover:bg-default-100 dark:hover:bg-default-200 data-[state=open]:bg-default-100 dark:data-[state=open]:bg-default-200 hover:text-primary text-default-500 dark:text-default-800 rounded-full md:h-9 md:w-9 h-8 w-8 ">
                                <div class="ms-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 21"
                                        class="h-5 w-5 rotate-0 scale-100 transition-all dark:-rotate-90 dark:scale-0"
                                        x-show="theme=='light'">
                                        <path fill="currentColor"
                                            d="M10 15.592a5.093 5.093 0 1 0 0-10.185 5.093 5.093 0 0 0 0 10.185"></path>
                                        <g fill="currentColor" opacity="0.35">
                                            <path
                                                d="M8.472 2.86c0-.875.561-1.52 1.437-1.527h.182c.876.007 1.437.652 1.437 1.528s-.561 1.52-1.437 1.527h-.182c-.876-.006-1.437-.651-1.437-1.527M8.472 18.138c0 .876.561 1.521 1.437 1.528h.181c.877-.007 1.438-.652 1.438-1.528s-.561-1.52-1.437-1.527h-.182c-.876.006-1.437.65-1.437 1.527M14.321 4.018c.62-.62 1.472-.68 2.096-.064l.065.064.064.064c.615.624.555 1.477-.064 2.096-.62.62-1.472.68-2.096.064l-.129-.128c-.615-.624-.555-1.477.064-2.096M3.518 14.821c-.62.62-.679 1.472-.064 2.096l.129.129c.624.615 1.476.555 2.096-.064.62-.62.679-1.472.064-2.096l-.129-.129c-.624-.615-1.476-.555-2.096.064M2.361 12.027c-.876 0-1.52-.56-1.527-1.437v-.181c.006-.877.65-1.437 1.527-1.437s1.521.56 1.528 1.437v.181c-.007.876-.652 1.437-1.528 1.437M17.639 12.027c.876 0 1.52-.56 1.527-1.437v-.181c-.006-.877-.65-1.437-1.527-1.437s-1.521.56-1.528 1.437v.181c.007.876.652 1.437 1.528 1.437M3.518 6.178c-.62-.62-.679-1.472-.064-2.096l.129-.128c.624-.615 1.476-.556 2.096.064s.679 1.472.064 2.096l-.129.128c-.624.615-1.476.556-2.096-.064M14.321 16.982c.62.62 1.472.679 2.096.064l.129-.129c.615-.624.555-1.476-.064-2.096-.62-.62-1.472-.679-2.096-.064l-.129.129c-.615.624-.555 1.476.064 2.096">
                                            </path>
                                        </g>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        class="h-5 w-5 rotate-90 scale-0 transition-all dark:rotate-0 dark:scale-100"
                                        x-show="theme=='dark'">
                                        <path fill="currentColor"
                                            d="M9 19c0 .84.13 1.66.37 2.42-3.84-1.33-6.74-4.86-7.04-8.99-.3-4.39 2.23-8.49 6.32-10.21 1.06-.44 1.6-.12 1.83.11.22.22.53.75.09 1.76a8.2 8.2 0 0 0-.67 3.28c.01 2.04.81 3.93 2.11 5.38A7.99 7.99 0 0 0 9 19">
                                        </path>
                                        <path fill="currentColor"
                                            d="M21.21 17.72a10.5 10.5 0 0 1-8.47 4.27c-.16 0-.32-.01-.48-.02-1-.04-1.97-.23-2.89-.55C9.13 20.66 9 19.84 9 19c0-2.53 1.18-4.79 3.01-6.25a8.4 8.4 0 0 0 5.91 2.82c.63.03 1.26-.02 1.88-.13 1.12-.2 1.57.22 1.73.49.17.27.35.86-.32 1.79"
                                            opacity="0.4"></path>
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link @click="theme = 'light'" class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 21"
                                    class="w-5 h-5 mr-2">
                                    <path fill="currentColor"
                                        d="M10 15.592a5.093 5.093 0 1 0 0-10.185 5.093 5.093 0 0 0 0 10.185"></path>
                                    <g fill="currentColor" opacity="0.35">
                                        <path
                                            d="M8.472 2.86c0-.875.561-1.52 1.437-1.527h.182c.876.007 1.437.652 1.437 1.528s-.561 1.52-1.437 1.527h-.182c-.876-.006-1.437-.651-1.437-1.527M8.472 18.138c0 .876.561 1.521 1.437 1.528h.181c.877-.007 1.438-.652 1.438-1.528s-.561-1.52-1.437-1.527h-.182c-.876.006-1.437.65-1.437 1.527M14.321 4.018c.62-.62 1.472-.68 2.096-.064l.065.064.064.064c.615.624.555 1.477-.064 2.096-.62.62-1.472.68-2.096.064l-.129-.128c-.615-.624-.555-1.477.064-2.096M3.518 14.821c-.62.62-.679 1.472-.064 2.096l.129.129c.624.615 1.476.555 2.096-.064.62-.62.679-1.472.064-2.096l-.129-.129c-.624-.615-1.476-.555-2.096.064M2.361 12.027c-.876 0-1.52-.56-1.527-1.437v-.181c.006-.877.65-1.437 1.527-1.437s1.521.56 1.528 1.437v.181c-.007.876-.652 1.437-1.528 1.437M17.639 12.027c.876 0 1.52-.56 1.527-1.437v-.181c-.006-.877-.65-1.437-1.527-1.437s-1.521.56-1.528 1.437v.181c.007.876.652 1.437 1.528 1.437M3.518 6.178c-.62-.62-.679-1.472-.064-2.096l.129-.128c.624-.615 1.476-.556 2.096.064s.679 1.472.064 2.096l-.129.128c-.624.615-1.476.556-2.096-.064M14.321 16.982c.62.62 1.472.679 2.096.064l.129-.129c.615-.624.555-1.476-.064-2.096-.62-.62-1.472-.679-2.096-.064l-.129.129c-.615.624-.555 1.476.064 2.096">
                                        </path>
                                    </g>
                                </svg>
                                <span class="mr-2">Light</span>
                            </x-dropdown-link>

                            <x-dropdown-link @click="theme = 'dark'" class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    class="w-5 h-5 mr-2">
                                    <path fill="currentColor"
                                        d="M9 19c0 .84.13 1.66.37 2.42-3.84-1.33-6.74-4.86-7.04-8.99-.3-4.39 2.23-8.49 6.32-10.21 1.06-.44 1.6-.12 1.83.11.22.22.53.75.09 1.76a8.2 8.2 0 0 0-.67 3.28c.01 2.04.81 3.93 2.11 5.38A7.99 7.99 0 0 0 9 19">
                                    </path>
                                    <path fill="currentColor"
                                        d="M21.21 17.72a10.5 10.5 0 0 1-8.47 4.27c-.16 0-.32-.01-.48-.02-1-.04-1.97-.23-2.89-.55C9.13 20.66 9 19.84 9 19c0-2.53 1.18-4.79 3.01-6.25a8.4 8.4 0 0 0 5.91 2.82c.63.03 1.26-.02 1.88-.13 1.12-.2 1.57.22 1.73.49.17.27.35.86-.32 1.79"
                                        opacity="0.4"></path>
                                </svg>
                                <span class="mr-2">Dark</span>
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                    <div class=" pl-2">
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-default-500 bg-card hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                    <x-dropdown-link :href="route('profile.preference')">
                                        {{ __('My Preferences') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>

                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center sm:hidden">
                            <button @click="open = ! open"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
