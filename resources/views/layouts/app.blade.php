<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ theme: $persist('light') }" :class="theme" style="color-scheme: light;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @livewireStyles
    @livewireScripts
    @vite(['resources/css/globals.scss', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased theme-blue" x-data="{sidebar: @unlesshasrole('guest') {{'true'}} @else {{'false'}} @endunlessrole}">
    <div class="h-full">
        <!-- Page Heading -->
        @include('layouts.header')
        @unlesshasrole('guest')
        @include('layouts.navigation')
        @endunlessrole
        <!-- Page Content -->

        <div class="content-wrapper transition-all duration-150 xl:ml-[272px]" :class="sidebar? 'xl:ml-[248px]' : 'xl:ml-[72px]'">
            <div class="md:pt-6 pb-[37px] pt-[15px] page-min-height-semibox">
                <main class="py-6">
                    <div class="xl:mx-10 mx-4">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </div>
    <x-slot:footer class="text-sm">
    </x-slot>
</body>
</html>
