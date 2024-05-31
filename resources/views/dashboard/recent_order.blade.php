<div class="space-y-6">
    <div class="flex items-center flex-wrap justify-between gap-4">
        <div class="text-2xl font-medium text-default-800">{{ __('Recent Orders') }}</div>
        <a class="text-small font-medium text-default-800 pr-2" href="{{route('order.index')}}">{{ __('View all orders') }}</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
        @each('order.order-card', $recent_orders, 'order')
    </div>
</div>
