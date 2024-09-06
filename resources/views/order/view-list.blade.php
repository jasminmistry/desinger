<table class="w-full caption-top text-sm">
    <thead class="[&amp;_tr]:border-b">
        <x-table-tr>
            <x-table-th>{{ __('ID') }}</x-table-th>
            <x-table-th>{{ __('Type') }}</x-table-th>
            <x-table-th>{{ __('Name') }}</x-table-th>
            <x-table-th>{{ __('Status') }}</x-table-th>
            <x-table-th>{{ __('Created By') }}</x-table-th>
            <x-table-th>{{ __('Created On') }}</x-table-th>
            <x-table-th>{{ __('action') }}</x-table-th>
        </x-table-tr>
    </thead>
    <tbody class="[&amp;_tr:last-child]:border-0">

        @foreach ($orders as $order)
            <x-table-tr>
                <x-table-td>
                    <span class=" text-sm text-default-600 font-medium">{{ $order->id }}</span>
                </x-table-td>
                <x-table-td>
                    <span
                        class=" text-sm text-default-600 font-medium">{{ App\Enums\OrderType::from($order->type)->label() }}</span>
                </x-table-td>
                <x-table-td>
                    <span class=" text-sm text-default-600 font-medium">{{ $order->service->name }}</span>
                </x-table-td>
                <x-table-td>
                    <div
                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary bg-opacity-10 text-primary hover:text-primary capitalize">
                        {{ App\Enums\OrderStatus::from($order->status)->name }}</div>
                </x-table-td>
                <x-table-td>
                    <span class=" text-sm text-default-600 font-medium">{{ $order->user->name }}</span>
                </x-table-td>
                <x-table-td>
                    <span class=" text-sm text-default-600 font-medium">{{ $order->created_at }}</span>
                </x-table-td>
                <x-table-td>
                    <div class="flex space-x-3 rtl:space-x-reverse">
                        @can(['view orders', 'view own orders'])
                            <x-a-view
                                href="javascript:void(0);" @click="$dispatch('show_order', { orderId: '{{ $order->id }}'})"></x-a-view>
                        @endcan
                        {{-- <x-a-view></x-a-view> --}}
                        @can(['edit orders', 'edit own orders'])
                            <x-a-edit
                                href="{{ route('digitizing.edit', ['digitizing' => $order->id]) }}"></x-a-edit>
                        @endcan
                    </div>
                </x-table-td>
            </x-table-tr>
        @endforeach
    </tbody>
</table>
