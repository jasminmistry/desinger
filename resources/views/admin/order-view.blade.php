<x-app-layout>
    <div class="p-4 sm:p-8 bg-card/90 backdrop-blur-lg shadow sm:rounded-lg">
        <div class="flex flex-wrap items-center gap-4 mb-1">
            <div class="flex-1">
                <h2 class="text-xl font-medium text-default-700 mb-2">{{ __('Orders') }}</h2>
            </div>
            
        </div>
        
        <livewire:admin.orders />
    </div>
</x-app-layout>
<footer >
    <livewire:show-order orderId='' wire:key="1234549878784" />
</footer>
