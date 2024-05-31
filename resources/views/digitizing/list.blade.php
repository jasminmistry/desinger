<x-app-layout>
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="flex flex-wrap items-center gap-4 mb-1">
            <div class="flex-1">
                <h2 class="text-xl font-medium text-default-700 mb-2">{{ __('Digitizing Order') }}</h2>
            </div>
            <div class="flex-none">
                <x-primary-button href="{{ route('digitizing.create') }}">{{ __('Create Order') }}</x-primary-button>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <table class="w-full caption-top text-sm">
                <thead class="[&amp;_tr]:border-b">
                    <x-table-tr>
                        <x-table-th>{{ __('ID') }}</x-table-th>
                        <x-table-th>{{ __('Name') }}</x-table-th>
                        <x-table-th>{{ __('Status') }}</x-table-th>
                        <x-table-th>{{ __('Created By') }}</x-table-th>
                        <x-table-th>{{ __('action') }}</x-table-th>
                    </x-table-tr>
                </thead>
                <tbody class="[&amp;_tr:last-child]:border-0">

                    @foreach ($digitizing as $digitize)
                        <x-table-tr>
                            <x-table-td>
                                <span class=" text-sm text-default-600 font-medium">{{ $digitize->id }}</span>
                            </x-table-td>
                            <x-table-td>
                                <span class=" text-sm text-default-600 font-medium">{{ $digitize->name }}</span>
                            </x-table-td>
                            <x-table-td>
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary bg-opacity-10 text-primary hover:text-primary capitalize">
                                    {{ App\Enums\OrderStatus::from($digitize->status)->name }}</div>
                            </x-table-td>
                            <x-table-td>
                                <span class=" text-sm text-default-600 font-medium">{{ $digitize->user->name }}</span>
                            </x-table-td>
                            <x-table-td>
                                <div class="flex space-x-3 rtl:space-x-reverse">
                                    {{-- <x-a-view></x-a-view> --}}
                                    @can(['edit orders', 'edit own orders'])
                                        <x-a-edit
                                            href="{{ route('digitizing.edit', ['digitizing' => $digitize->id]) }}"></x-a-edit>
                                    @endcan
                                </div>
                            </x-table-td>
                        </x-table-tr>
                    @endforeach
                </tbody>
            </table>
            {{ $digitizing->links() }}
        </div>
</x-app-layout>
