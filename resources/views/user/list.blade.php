<x-app-layout>
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="flex flex-wrap items-center gap-4 mb-1">
            <div class="flex-1">
                <h2 class="text-xl font-medium text-default-700 mb-2">{{ __('Users') }}</h2>
            </div>
            <div class="flex-none">
                <x-primary-button href="{{ route('user.create') }}">{{ __('Add User') }}</x-primary-button>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <table class="w-full caption-top text-sm">
                <thead class="[&amp;_tr]:border-b">
                    <x-table-tr>
                        <x-table-th>{{ __('user') }}</x-table-th>
                        <x-table-th>{{ __('email') }}</x-table-th>
                        <x-table-th>{{ __('role') }}</x-table-th>
                        <x-table-th>{{ __('action') }}</x-table-th>
                    </x-table-tr>
                </thead>
                <tbody class="[&amp;_tr:last-child]:border-0">

                    @foreach ($users as $user)
                        <x-table-tr>
                            <x-table-td>
                                <span class=" text-sm text-default-600 font-medium">{{ $user->name }}</span>
                            </x-table-td>
                            <x-table-td>
                                <span class=" text-sm text-default-600 font-medium">{{ $user->email }}</span>
                            </x-table-td>
                            <x-table-td>

                                @foreach ($user->getRoleNames() as $role)
                                    <div
                                        class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary bg-opacity-10 text-primary hover:text-primary capitalize">
                                        {{ $role }}</div>
                                @endforeach

                            </x-table-td>
                            <x-table-td>
                                <div class="flex space-x-3 rtl:space-x-reverse">
                                    {{-- <x-a-view></x-a-view> --}}
                                    <x-a-edit href="{{ route('user.edit', ['user' => $user->id]) }}"></x-a-edit>
                                    <form method="POST" action={{ route('user.destroy', ['user' => $user->id]) }}>
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <x-a-delete type="submit"></x-a-delete>
                                    </form>
                                </div>
                            </x-table-td>
                        </x-table-tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
</x-app-layout>
