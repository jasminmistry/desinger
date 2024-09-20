<div>
    <div class="fixed top-0 border-r w-[248px] m-6 bottom-0 bg-card rounded-md"
        :class="sidebar ? 'w-[248px]' : 'w-[72px]'">

        <div class="px-4 py-4 ">
            <div class=" flex items-center">
                <div class="flex flex-1 items-center  space-x-3  ">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>
            </div>
        </div>
        <div data-orientation="horizontal" role="none" class="shrink-0 bg-border h-[1px] w-full"></div>
        <div dir="ltr" class="relative overflow-hidden sidebar-menu h-[calc(100%-80px)] px-4"
            style="position: relative; --radix-scroll-area-corner-width: 0px; --radix-scroll-area-corner-height: 0px;">
            <style>
                [data-radix-scroll-area-viewport] {
                    scrollbar-width: none;
                    -ms-overflow-style: none;
                    -webkit-overflow-scrolling: touch;
                }

                [data-radix-scroll-area-viewport]::-webkit-scrollbar {
                    display: none
                }
            </style>
            <div data-radix-scroll-area-viewport="" class="h-full w-full rounded-[inherit]"
                style="overflow: hidden scroll;">
                <div style="min-width: 100%; display: table;">
                    <ul class="space-y-1">
                        <li>
                            <div class="text-default-900 font-semibold uppercase mb-3 text-xs mt-4">menu</div>
                        </li>
                        @can('view users')
                            <li>
                                <a href="{{ route('user.index') }}"
                                    class="flex text-default-700 font-medium text-sm capitalize px-[10px] py-3 rounded cursor-pointer duration-100 hover:bg-primary hover:text-primary-foreground group {{ Request::routeIs('user.index') ? 'bg-primary text-primary-foreground' : '' }}">
                                    <div class="flex-1  gap-3 flex items-start"><span
                                            class="inline-flex items-center  text-lg "><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32"
                                                class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M28.054 9.587 16.001 16.56 3.948 9.587C4.48 8.6 5.254 7.734 6.12 7.254l7.12-3.947c1.52-.853 4-.853 5.52 0l7.12 3.947c.866.48 1.64 1.346 2.173 2.333"
                                                    opacity="0.35"></path>
                                                <path fill="currentColor"
                                                    d="M16 16.56v12.774c-1 0-2-.214-2.76-.64l-7.12-3.947c-1.612-.893-2.932-3.133-2.932-4.973v-7.547c0-.853.293-1.787.76-2.64z"
                                                    opacity="0.5"></path>
                                                <path fill="currentColor"
                                                    d="M28.814 12.227v7.547c0 1.84-1.32 4.08-2.933 4.973l-7.12 3.947c-.76.426-1.76.64-2.76.64V16.56l12.053-6.973c.467.853.76 1.787.76 2.64">
                                                </path>
                                            </svg></span>
                                        <div class=" ">{{ __('Users') }}</div>
                                    </div>
                                </a>
                                {{-- <div data-state="closed">
                                <div data-state="closed" id="radix-:r2u:" hidden="" class="CollapsibleContent"
                                    style=""></div>
                            </div> --}}
                            </li>
                        @endcan
                        @can('view orders')
                            <li>
                                <a href="{{ route('admin.orders') }}"
                                    class="flex text-default-700 font-medium text-sm capitalize px-[10px] py-3 rounded cursor-pointer duration-100 hover:bg-primary hover:text-primary-foreground group {{ Request::routeIs('order.index') ? 'bg-primary text-primary-foreground' : '' }}">
                                    <div class="flex-1  gap-3 flex items-start"><span
                                            class="inline-flex items-center  text-lg "><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32"
                                                class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M28.054 9.587 16.001 16.56 3.948 9.587C4.48 8.6 5.254 7.734 6.12 7.254l7.12-3.947c1.52-.853 4-.853 5.52 0l7.12 3.947c.866.48 1.64 1.346 2.173 2.333"
                                                    opacity="0.35"></path>
                                                <path fill="currentColor"
                                                    d="M16 16.56v12.774c-1 0-2-.214-2.76-.64l-7.12-3.947c-1.612-.893-2.932-3.133-2.932-4.973v-7.547c0-.853.293-1.787.76-2.64z"
                                                    opacity="0.5"></path>
                                                <path fill="currentColor"
                                                    d="M28.814 12.227v7.547c0 1.84-1.32 4.08-2.933 4.973l-7.12 3.947c-.76.426-1.76.64-2.76.64V16.56l12.053-6.973c.467.853.76 1.787.76 2.64">
                                                </path>
                                            </svg></span>
                                        <div class=" ">{{ __('All Orders') }}</div>
                                    </div>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('order.index') }}"
                                    class="flex text-default-700 font-medium text-sm capitalize px-[10px] py-3 rounded cursor-pointer duration-100 hover:bg-primary hover:text-primary-foreground group {{ Request::routeIs('order.index') ? 'bg-primary text-primary-foreground' : '' }}">
                                    <div class="flex-1  gap-3 flex items-start"><span
                                            class="inline-flex items-center  text-lg "><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32"
                                                class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M28.054 9.587 16.001 16.56 3.948 9.587C4.48 8.6 5.254 7.734 6.12 7.254l7.12-3.947c1.52-.853 4-.853 5.52 0l7.12 3.947c.866.48 1.64 1.346 2.173 2.333"
                                                    opacity="0.35"></path>
                                                <path fill="currentColor"
                                                    d="M16 16.56v12.774c-1 0-2-.214-2.76-.64l-7.12-3.947c-1.612-.893-2.932-3.133-2.932-4.973v-7.547c0-.853.293-1.787.76-2.64z"
                                                    opacity="0.5"></path>
                                                <path fill="currentColor"
                                                    d="M28.814 12.227v7.547c0 1.84-1.32 4.08-2.933 4.973l-7.12 3.947c-.76.426-1.76.64-2.76.64V16.56l12.053-6.973c.467.853.76 1.787.76 2.64">
                                                </path>
                                            </svg></span>
                                        <div class=" ">{{ __('All Orders') }}</div>
                                    </div>
                                </a>
                            </li>

                            <li class="mb-1.5 last:mb-0" x-data="{ open: {{ Request::routeIs('digitizing.*') ? 'true' : 'false' }} }">
                                <div @click="open = ! open">
                                    <div
                                        class="flex items-center gap-3 px-[10px] py-3 rounded-md {{ Request::routeIs('digitizing.*') ? 'bg-primary text-primary-foreground' : 'text-default-600' }} ">
                                        <div class="flex font-medium text-sm capitalize gap-3 cursor-pointer flex-1"><span
                                                class="inline-flex items-center  flex-grow-0"><svg
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                                    class=" h-5 w-5">
                                                    <path fill="currentColor"
                                                        d="M4.292 18.334a.63.63 0 0 1-.625-.625V2.292a.63.63 0 0 1 .625-.625.63.63 0 0 1 .625.625v15.417a.63.63 0 0 1-.625.625">
                                                    </path>
                                                    <path fill="currentColor"
                                                        d="M15.017 10.276 14 9.259a1.16 1.16 0 0 1-.392-.859c-.016-.375.134-.75.409-1.025l1-1c.866-.866 1.191-1.7.916-2.358-.266-.65-1.091-1.008-2.308-1.008H4.292a.33.33 0 0 0-.317.325v10c0 .175.142.316.317.316h9.333c1.2 0 2.008-.366 2.283-1.024.275-.667-.041-1.492-.891-2.35"
                                                        opacity="0.35"></path>
                                                </svg></span><span
                                                class="flex-grow truncate">{{ __('Digitizing Service') }}</span></div>
                                        <div class="flex-none duration-200 text-default-500"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5 ">
                                                <path d="m9 18 6-6-6-6"></path>
                                            </svg></div>
                                    </div>
                                </div>
                                <div x-show="open">
                                    <div
                                        style="--radix-collapsible-content-height: 744px; --radix-collapsible-content-width: 195px;">
                                        <ul
                                            class="sub-menu space-y-3 relative before:absolute before:left-4 before:top-0  before:h-[calc(100%-5px)]  before:w-[2px]  {{ Request::routeIs('digitizing.create') ? ' before:bg-primary' : ' before:bg-primary/10 dark:before:bg-primary/20' }} before:rounded">
                                            @can('create orders')
                                                <li
                                                    class="block ml-[30px] relative first:pt-3 before:absolute first:before:top-4 before: top-0 before:-left-[14px] before:w-[2px] before:h-0  last:pb-1">
                                                    <a class="{{ Request::routeIs('digitizing.create') ? 'text-primary' : 'text-default-700' }}  hover:text-primary "
                                                        href="{{ route('digitizing.create') }}">
                                                        <div class="pl-3 text-sm capitalize font-normal">
                                                            {{ __('Create Order') }}</div>
                                                    </a>
                                                </li>
                                            @endcan
                                            @canany(['view orders', 'view own orders'])
                                                <li
                                                    class="block ml-[30px] relative first:pt-3 before:absolute first:before:top-4 before: top-0 before:-left-[14px] before:w-[2px] before:h-0  last:pb-1">
                                                    <a class="{{ Request::routeIs('digitizing.index') ? 'text-primary' : 'text-default-700' }}  hover:text-primary "
                                                        href="{{ route('digitizing.index') }}">
                                                        <div class="pl-3 text-sm capitalize font-normal">{{ __('List Order') }}
                                                        </div>
                                                    </a>
                                                </li>
                                            @endcanany
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-1.5 last:mb-0" x-data="{ open: {{ Request::routeIs('patch.*') ? 'true' : 'false' }} }">
                                <div @click="open = ! open">
                                    <div
                                        class="flex items-center gap-3 px-[10px] py-3 rounded-md {{ Request::routeIs('patch.*') ? 'bg-primary text-primary-foreground' : 'text-default-600' }} ">
                                        <div class="flex font-medium text-sm capitalize gap-3 cursor-pointer flex-1"><span
                                                class="inline-flex items-center  flex-grow-0"><svg
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                                    class=" h-5 w-5">
                                                    <path fill="currentColor"
                                                        d="M4.292 18.334a.63.63 0 0 1-.625-.625V2.292a.63.63 0 0 1 .625-.625.63.63 0 0 1 .625.625v15.417a.63.63 0 0 1-.625.625">
                                                    </path>
                                                    <path fill="currentColor"
                                                        d="M15.017 10.276 14 9.259a1.16 1.16 0 0 1-.392-.859c-.016-.375.134-.75.409-1.025l1-1c.866-.866 1.191-1.7.916-2.358-.266-.65-1.091-1.008-2.308-1.008H4.292a.33.33 0 0 0-.317.325v10c0 .175.142.316.317.316h9.333c1.2 0 2.008-.366 2.283-1.024.275-.667-.041-1.492-.891-2.35"
                                                        opacity="0.35"></path>
                                                </svg></span><span class="flex-grow truncate">{{ __('Patch') }}</span>
                                        </div>
                                        <div class="flex-none duration-200 text-default-500"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="w-3.5 h-3.5 ">
                                                <path d="m9 18 6-6-6-6"></path>
                                            </svg></div>
                                    </div>
                                </div>
                                <div x-show="open">
                                    <div data-state="open" id="radix-:r1m:" class="CollapsibleContent"
                                        style="--radix-collapsible-content-height: 744px; --radix-collapsible-content-width: 195px;">
                                        <ul
                                            class="sub-menu space-y-3 relative before:absolute before:left-4 before:top-0  before:h-[calc(100%-5px)]  before:w-[2px]  {{ Request::routeIs('patch.create') ? ' before:bg-primary' : ' before:bg-primary/10 dark:before:bg-primary/20' }} before:rounded">
                                            @can('create orders')
                                                <li
                                                    class="block ml-[30px] relative first:pt-3 before:absolute first:before:top-4 before: top-0 before:-left-[14px] before:w-[2px] before:h-0  last:pb-1">

                                                    <a class="{{ Request::routeIs('patch.create') ? 'text-primary' : 'text-default-700' }}  hover:text-primary "
                                                        href="{{ route('patch.create') }}">
                                                        <div class="pl-3 text-sm capitalize font-normal">
                                                            {{ __('Create Order') }}</div>
                                                    </a>
                                                </li>
                                            @endcan
                                            @canany(['view orders', 'view own orders'])
                                                <li
                                                    class="block ml-[30px] relative first:pt-3 before:absolute first:before:top-4 before: top-0 before:-left-[14px] before:w-[2px] before:h-0  last:pb-1">
                                                    <a class="{{ Request::routeIs('patch.index') ? 'text-primary' : 'text-default-700' }}  hover:text-primary "
                                                        href="{{ route('patch.index') }}">
                                                        <div class="pl-3 text-sm capitalize font-normal">
                                                            {{ __('List Order') }}
                                                        </div>
                                                    </a>
                                                </li>
                                            @endcanany
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-1.5 last:mb-0" x-data="{ open: {{ Request::routeIs('vector*') ? 'true' : 'false' }} }">
                                <div @click="open = ! open">
                                    <div
                                        class="flex items-center gap-3 px-[10px] py-3 rounded-md {{ Request::routeIs('vector.*') ? 'bg-primary text-primary-foreground' : 'text-default-600' }} ">
                                        <div class="flex font-medium text-sm capitalize gap-3 cursor-pointer flex-1"><span
                                                class="inline-flex items-center  flex-grow-0"><svg
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                                    class=" h-5 w-5">
                                                    <path fill="currentColor"
                                                        d="M4.292 18.334a.63.63 0 0 1-.625-.625V2.292a.63.63 0 0 1 .625-.625.63.63 0 0 1 .625.625v15.417a.63.63 0 0 1-.625.625">
                                                    </path>
                                                    <path fill="currentColor"
                                                        d="M15.017 10.276 14 9.259a1.16 1.16 0 0 1-.392-.859c-.016-.375.134-.75.409-1.025l1-1c.866-.866 1.191-1.7.916-2.358-.266-.65-1.091-1.008-2.308-1.008H4.292a.33.33 0 0 0-.317.325v10c0 .175.142.316.317.316h9.333c1.2 0 2.008-.366 2.283-1.024.275-.667-.041-1.492-.891-2.35"
                                                        opacity="0.35"></path>
                                                </svg></span><span
                                                class="flex-grow truncate">{{ __('Vector Service') }}</span></div>
                                        <div class="flex-none duration-200 text-default-500"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="w-3.5 h-3.5 ">
                                                <path d="m9 18 6-6-6-6"></path>
                                            </svg></div>
                                    </div>
                                </div>
                                <div x-show="open">
                                    <div data-state="open" id="radix-:r1m:" class="CollapsibleContent"
                                        style="--radix-collapsible-content-height: 744px; --radix-collapsible-content-width: 195px;">
                                        <ul
                                            class="sub-menu space-y-3 relative before:absolute before:left-4 before:top-0  before:h-[calc(100%-5px)]  before:w-[2px]  {{ Request::routeIs('vector.create') ? ' before:bg-primary' : ' before:bg-primary/10 dark:before:bg-primary/20' }} before:rounded">
                                            @can('create orders')
                                                <li
                                                    class="block ml-[30px] relative first:pt-3 before:absolute first:before:top-4 before: top-0 before:-left-[14px] before:w-[2px] before:h-0  last:pb-1">
                                                    <a class="{{ Request::routeIs('vector.create') ? 'text-primary' : 'text-default-700' }}  hover:text-primary "
                                                        href="{{ route('vector.create') }}">
                                                        <div class="pl-3 text-sm capitalize font-normal">
                                                            {{ __('Create Order') }}</div>
                                                    </a>
                                                </li>
                                            @endcan
                                            @canany(['view orders', 'view own orders'])
                                                <li
                                                    class="block ml-[30px] relative first:pt-3 before:absolute first:before:top-4 before: top-0 before:-left-[14px] before:w-[2px] before:h-0  last:pb-1">
                                                    <a class="{{ Request::routeIs('vector.index') ? 'text-primary' : 'text-default-700' }}  hover:text-primary "
                                                        href="{{ route('vector.index') }}">
                                                        <div class="pl-3 text-sm capitalize font-normal">
                                                            {{ __('List Order') }}
                                                        </div>
                                                    </a>
                                                </li>
                                            @endcanany
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-1.5 last:mb-0" x-data="{ open: {{ Request::routeIs('other-service.*') ? 'true' : 'false' }} }">
                                <div @click="open = ! open">
                                    <div
                                        class="flex items-center gap-3 px-[10px] py-3 rounded-md  {{ Request::routeIs('other-service.*') ? 'bg-primary text-primary-foreground' : 'text-default-600' }} ">
                                        <div class="flex font-medium text-sm capitalize gap-3 cursor-pointer flex-1"><span
                                                class="inline-flex items-center  flex-grow-0"><svg
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                                    class=" h-5 w-5">
                                                    <path fill="currentColor"
                                                        d="M4.292 18.334a.63.63 0 0 1-.625-.625V2.292a.63.63 0 0 1 .625-.625.63.63 0 0 1 .625.625v15.417a.63.63 0 0 1-.625.625">
                                                    </path>
                                                    <path fill="currentColor"
                                                        d="M15.017 10.276 14 9.259a1.16 1.16 0 0 1-.392-.859c-.016-.375.134-.75.409-1.025l1-1c.866-.866 1.191-1.7.916-2.358-.266-.65-1.091-1.008-2.308-1.008H4.292a.33.33 0 0 0-.317.325v10c0 .175.142.316.317.316h9.333c1.2 0 2.008-.366 2.283-1.024.275-.667-.041-1.492-.891-2.35"
                                                        opacity="0.35"></path>
                                                </svg></span><span
                                                class="flex-grow truncate">{{ __('Other Service') }}</span></div>
                                        <div class="flex-none duration-200 text-default-500"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="w-3.5 h-3.5 ">
                                                <path d="m9 18 6-6-6-6"></path>
                                            </svg></div>
                                    </div>
                                </div>
                                <div x-show="open">
                                    <div data-state="open" id="radix-:r1m:" class="CollapsibleContent"
                                        style="--radix-collapsible-content-height: 744px; --radix-collapsible-content-width: 195px;">
                                        <ul
                                            class="sub-menu space-y-3 relative before:absolute before:left-4 before:top-0  before:h-[calc(100%-5px)]  before:w-[2px] {{ Request::routeIs('other-service.create') ? ' before:bg-primary' : ' before:bg-primary/10 dark:before:bg-primary/20' }} before:rounded">
                                            @can('create orders')
                                                <li
                                                    class="block ml-[30px] relative first:pt-3 before:absolute first:before:top-4 before: top-0 before:-left-[14px] before:w-[2px] before:h-0 last:pb-1 ">
                                                    <a class="{{ Request::routeIs('other-service.create') ? 'text-primary' : 'text-default-700' }}  hover:text-primary "
                                                        href="{{ route('other-service.create') }}">
                                                        <div class="pl-3 text-sm capitalize font-normal">
                                                            {{ __('Create Order') }}</div>
                                                    </a>
                                                </li>
                                            @endcan
                                            @canany(['view orders', 'view own orders'])
                                                <li
                                                    class="block ml-[30px] relative first:pt-3 before:absolute first:before:top-4 before: top-0 before:-left-[14px] before:w-[2px] before:h-0  last:pb-1">
                                                    <a class="{{ Request::routeIs('other-service') ? 'text-primary' : 'text-default-700' }}  hover:text-primary "
                                                        href="{{ route('other-service.index') }}">
                                                        <div class="pl-3 text-sm capitalize font-normal">
                                                            {{ __('List Order') }}
                                                        </div>
                                                    </a>
                                                </li>
                                            @endcanany
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        @endcan

                    </ul>
                </div>
            </div>
        </div>
    </div>


</div>
