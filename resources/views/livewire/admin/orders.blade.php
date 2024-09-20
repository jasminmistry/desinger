<div class="p-6 pt-0">
    <div class="overflow-x-auto">
        <div class="flex flex-nowrap gap-6">
            @foreach ($orders as $status => $statusOrders)
                <div
                    class="text-card-foreground max-w-[277px] border-t-4 rounded-md flex-none w-full shadow-lg bg-default-100 dark:bg-default-50  {{ \App\Enums\OrderStatus::from($status)->border() }}">
                    <div
                        class="flex flex-row items-center mb-0 justify-between border-b border-default-200 rounded-sm py-2.5 space-y-0 px-3">
                        <div class="text-sm font-semibold text-default-800 capitalize">
                            {{ \App\Enums\OrderStatus::from($status)->label() }}</div>
                    </div>
                    <div class="p-6 pt-0 px-0 pb-0">
                        <div class="h-[calc(100vh-300px)]">
                            <div dir="ltr" class="relative overflow-hidden h-full"
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
                                    style="overflow: hidden scroll;" x-sort="$wire.changeStatus($item, {{$status}})" x-sort:config="{delay: 100}" x-sort:group="status">
                                    @foreach ($statusOrders as $order)
                                        @include('order.order-card', ['order' => $order])
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
