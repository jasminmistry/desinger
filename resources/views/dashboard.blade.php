<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-0">
        <div class=" mx-auto sm:px-3 lg:px-0">
            @role('guest')
                <div class="border border-red-400 rounded-b bg-red-100 mb-5 shadow-sm sm:rounded-lg">
                    <div class="p-6 text-red-900">
                        {{ __("Admin hasn't approved you yet, You can still create order but will not get processed") }}
                    </div>
                </div>
            @endrole
            <main>
            @unlesshasrole('guest')
                @include('dashboard.statastics')
            @endunlessrole
                @include('dashboard.services')
            @unlesshasrole('guest')
                @include('dashboard.recent_order')
            @endunlessrole
            </main>
        </div>
    </div>
</x-app-layout>
