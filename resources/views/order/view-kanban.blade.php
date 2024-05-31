<div class="space-y-6 p-4 bg-default-100 dark:bg-default-50 ">
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
        @each('order.order-card', $orders, 'order')
    </div>
</div>
