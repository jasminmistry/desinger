<x-app-layout>
    <div class="p-4 sm:p-8 bg-card/90 backdrop-blur-lg shadow sm:rounded-lg ">
        <div class="flex flex-wrap items-center gap-4 mb-1">
            <div class="flex-1">
                <h2 class="text-xl font-medium text-default-700 mb-2">{{ __('All Orders') }}</h2>
            </div>
            <div class="flex-none flex items-center gap-4">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="w-full px-3 flex [&>svg]:h-5 [&>svg]:w-5 justify-between items-center read-only:bg-background disabled:cursor-not-allowed disabled:opacity-50 transition duration-300 border-default-300 text-default-500 focus:outline-none focus:border-default-500/50 disabled:bg-default-200 placeholder:text-accent-foreground/50 [&>svg]:stroke-default-600 border rounded-lg h-10 text-sm pr-2 min-w-[160px]">
                            <div>{{ $view == 'list' ? __('List') : __('Kanban') }}</div>

                            <div class="ms-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down"
                                    aria-hidden="true">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('order.index', ['page'=> request()->get('page'), 'view'=> 'list'])">
                            {{ __('List') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('order.index', ['page'=> request()->get('page'), 'view'=> 'kanban'])">
                            {{ __('Kanban') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            @include('order.view-'.$view)
            {{ $orders->links() }}
        </div>
</x-app-layout>
<footer >
    <livewire:show-order orderId='' wire:key="1234549878784" />
</footer>
