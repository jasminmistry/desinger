<div>
    @if ($orderId)
        <div role="dialog" wire:key="opopup-{{ $orderDetails->id }}" x-data="{ open: true, toggle() { open = !open; } }" x-show="open"
            id="opopup-{{ $orderDetails->id }}" aria-describedby="radix-:r46:" aria-labelledby="radix-:r45:"
            data-state="open" x-show="open"
            class="fixed z-[999] gap-4 bg-card shadow-lg transition ease-in-out data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:duration-300 data-[state=open]:duration-500 inset-y-0 right-0 h-full border-l data-[state=closed]:slide-out-to-right data-[state=open]:slide-in-from-right max-w-sm w-[85%] md:max-w-[1200px] p-0"
            tabindex="-1" style="pointer-events: auto;">
            <div
                class="flex flex-col text-center sm:text-left sm:flex-row justify-between gap-3 space-y-0 border-b border-default-200 px-2 xl:px-6 py-5">
                <div class="flex items-center gap-2">
                    <div class="text-sm font-medium text-default-600 bg-default-100 py-[2px] px-3 rounded">
                        {{ $orderDetails->service->name }}</div>
                    <div class="w-fit px-1">
                        @can('change order statuses')
                            <select id="status" name="status" wire:model="status" wire:change="change"
                            class="w-full px-3 flex [&amp;>svg]:h-5 [&amp;>svg]:w-5 justify-between items-center read-only:bg-background disabled:cursor-not-allowed disabled:opacity-50 transition duration-300 border-default-300 text-default-500 focus:outline-none focus:border-default-500/50 disabled:bg-default-200 placeholder:text-accent-foreground/50 [&amp;>svg]:stroke-default-600 border rounded-lg text-sm h-10">
                            @foreach (\App\Enums\OrderStatus::cases() as $status)
                                <option value="{{ $status->value }}"
                                    @if ($status->value == $orderDetails->status) {{ 'selected=selected' }}
                                @else
                                    {{ '' }} @endif>
                                    {{ $status->label() }}</option>
                            @endforeach
                        </select>
                        @else
                            <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary bg-opacity-10 text-primary hover:text-primary capitalize">{{ App\Enums\OrderStatus::from($orderDetails->status)->name }}</span>
                        @endcan
                        {{-- <button type="button" role="combobox" aria-controls="radix-:r5i:"
                            aria-expanded="false" aria-autocomplete="none" dir="ltr" data-state="closed"
                            data-placeholder=""
                            class="w-full px-3 flex [&amp;>svg]:h-5 [&amp;>svg]:w-5 justify-between items-center read-only:bg-background disabled:cursor-not-allowed disabled:opacity-50 transition duration-300 border-default-300 text-default-500 focus:outline-none focus:border-default-500/50 disabled:bg-default-200 placeholder:text-accent-foreground/50 [&amp;>svg]:stroke-default-600 border rounded-lg text-sm h-6"><span
                                style="pointer-events: none;">todo</span><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down" aria-hidden="true">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg></button> --}}
                    </div>
                </div>
                <div class="flex items-center gap-2 pr-5">
                    {{-- <div class="flex items-center gap-2">
                        <p class="text-sm font-medium text-default-600">00:00:00</p><button
                            class="inline-flex items-center justify-center text-sm font-semibold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none text-primary-foreground bg-transparent rounded-full hover:bg-default-200 h-8 w-8"
                            type="button" data-state="closed"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                class="h-[14px] w-[14px] text-default-500 iconify iconify--heroicons" width="1em"
                                height="1em" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5"
                                    d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986z">
                                </path>
                            </svg></button>
                    </div><button
                        class="inline-flex items-center justify-center text-sm font-semibold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none text-primary-foreground h-10 w-10 bg-transparent hover:bg-default-50 rounded-full"
                        type="button"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            class="w-5 h-5 text-default-500 iconify iconify--heroicons" width="1em" height="1em"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M14.857 17.082a24 24 0 0 0 5.454-1.31A8.97 8.97 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.97 8.97 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.3 24.3 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0">
                            </path>
                        </svg></button>
                    <div class="cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            class="w-5 h-5 text-default-500 iconify iconify--heroicons" width="1em" height="1em"
                            viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5">
                                <path
                                    d="M2.036 12.322a1 1 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178c.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178">
                                </path>
                                <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0"></path>
                            </g>
                        </svg></div>
                    <div class="cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            class="w-5 h-5 text-default-500 iconify iconify--heroicons" width="1em" height="1em"
                            viewBox="0 0 16 16">
                            <path fill="currentColor"
                                d="M2 8a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0m4.5 0a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0m6-1.5a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3">
                            </path>
                        </svg></div>
                    <div class="cursor-pointer hidden xl:block"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            class="w-5 h-5 text-default-500 iconify iconify--heroicons" width="1em" height="1em"
                            viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M15.97 2.47a.75.75 0 0 1 1.06 0l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 1 1-1.06-1.06l3.22-3.22H7.5a.75.75 0 0 1 0-1.5h11.69l-3.22-3.22a.75.75 0 0 1 0-1.06m-7.94 9a.75.75 0 0 1 0 1.06l-3.22 3.22H16.5a.75.75 0 0 1 0 1.5H4.81l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 0"
                                clip-rule="evenodd"></path>
                        </svg></div> --}}
                    <button type="button" @click="toggle()"
                        class="absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none  disabled:pointer-events-none data-[state=open]:bg-secondary"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-4 w-4 relative top-4">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg></button>
                </div>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-2">
                <div class="border-r border-default-200 min-h-screen">
                    <div class="h-[calc(100vh-70px)]">
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
                                style="overflow: hidden scroll;">
                                <div style="min-width: 100%; display: table;">
                                    {{-- <form class="py-5 px-6 pb-8 border-b border-default-200">
                                        {{-- <div class="flex items-center gap-1 mb-2"><button type="button"
                                                role="checkbox" aria-checked="false" data-state="unchecked"
                                                value="on"
                                                class="peer group shrink-0 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 [&amp;_svg]:stroke-primary-foreground border border-default-300 data-[state=checked]:bg-default-300/90 bg-card rounded [&amp;_svg]:h-4 [&amp;_svg]:w-4 w-4 h-4"></button><input
                                                aria-hidden="true" tabindex="-1" type="checkbox" value="on"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><input
                                                class="h-7 w-full border border-transparent text-sm font-medium text-default-900 rounded-sm focus:border focus:border-default-200 focus:outline-none px-1 focus:bg-default-50 bg-card"
                                                type="text" name="title"></div>
                                        <div class="flex gap-1 relative">
                                            <div class="mt-1"><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img"
                                                    class="w-5 h-5 text-default-900 iconify iconify--heroicons"
                                                    width="1em" height="1em" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5"
                                                        d="m11.25 11.25l.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0a9 9 0 0 1 18 0m-9-3.75h.008v.008H12z">
                                                    </path>
                                                </svg></div>
                                            <textarea
                                                class="w-full h-16 border-none border border-transparent focus:border-default-200 focus:outline-none p-1 text-sm text-default-700 peer bg-card focus:bg-default-50"
                                                placeholder="Add Task Descriptions" rows="1" name="desc" style="resize: none; overflow-y: hidden;"></textarea>
                                        </div>
                                        <div class="flex justify-end"></div>
                                    </form> --}}
                                    <div class="py-5 px-4 lg:px-6 border-b border-default-200">
                                        <div class="grid  grid-cols-2  md:grid-cols-3 md:gap-2 gap-y-6">
                                            <div>
                                                <div class="flex items-center gap-1 mb-3">
                                                    <div
                                                        class="bg-default-100 h-6 w-6 rounded-full grid place-content-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            aria-hidden="true" role="img"
                                                            class="text-primary w-3.5 h-3.5 iconify iconify--heroicons"
                                                            width="1em" height="1em" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0a3.375 3.375 0 0 1 6.75 0M3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.3 12.3 0 0 1 9.374 21C7.043 21 4.862 20.355 3 19.234">
                                                            </path>
                                                        </svg>
                                                    </div><span
                                                        class="text-sm font-medium text-default-900">Assigned</span>
                                                </div>
                                                <div class="flex items-center gap-3">
                                                    @can('assign order')
                                                    <select id="user_id" name="user_id" wire:model="userId" wire:change="changeAssign"
                                                        class="w-full px-3 flex [&amp;>svg]:h-5 [&amp;>svg]:w-5 justify-between items-center disabled:cursor-not-allowed disabled:opacity-50 transition duration-300 border-primary text-primary focus:outline-none focus:border-primary-700 disabled:bg-primary/30 disabled:placeholder:text-primary placeholder:text-primary/70 [&amp;>svg]:stroke-primary rounded-lg h-8 text-xs read-only:bg-primary/10">
                                                        @foreach ($assignedUsers as $user)
                                                            <option value="{{ $user->id }}"
                                                                @if ($user->id == $orderDetails->user_id) {{ 'selected=selected' }}
                                                            @else
                                                                {{ '' }} @endif>
                                                                {{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @else
                                                        <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary bg-opacity-10 text-primary hover:text-primary capitalize">{{ $orderDetails->assigned->name ?? '' }}</span>
                                                    @endcan
                                                </div>
                                            </div>
                                            <div>
                                                <div class="flex items-center gap-1 mb-3">
                                                    <div
                                                        class="bg-default-100 h-6 w-6 rounded-full grid place-content-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            aria-hidden="true" role="img"
                                                            class="text-primary w-3.5 h-3.5 iconify iconify--heroicons"
                                                            width="1em" height="1em" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48 48 0 0 0 12 4.5c-2.291 0-4.545.16-6.75.47m13.5 0q1.515.215 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a6 6 0 0 1-2.031.352a6 6 0 0 1-2.031-.352c-.483-.174-.711-.703-.59-1.202zm-16.5.52q1.485-.305 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a6 6 0 0 1-2.031.352a6 6 0 0 1-2.031-.352c-.483-.174-.711-.703-.59-1.202z">
                                                            </path>
                                                        </svg>
                                                    </div><span
                                                        class="text-sm font-medium text-default-900">Priority</span>
                                                </div>
                                                <div class="w-[100px]">
                                                    @can('change order statuses')
                                                    <select id="priority" name="priority" wire:model="priority" wire:change="changePriority"
                                                        class="w-full px-3 flex [&amp;>svg]:h-5 [&amp;>svg]:w-5 justify-between items-center disabled:cursor-not-allowed disabled:opacity-50 transition duration-300 border-primary text-primary focus:outline-none focus:border-primary-700 disabled:bg-primary/30 disabled:placeholder:text-primary placeholder:text-primary/70 [&amp;>svg]:stroke-primary rounded-lg h-8 text-xs read-only:bg-primary/10">
                                                        @foreach (\App\Enums\Priority::cases() as $priority)
                                                            <option value="{{ $priority->value }}"
                                                                @if ($priority->value == $orderDetails->priority) {{ 'selected=selected' }}
                                                            @else
                                                                {{ '' }} @endif>
                                                                {{ $priority->label() }}</option>
                                                        @endforeach
                                                    </select>
                                                    @else
                                                        <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary bg-opacity-10 text-primary hover:text-primary capitalize">{{ App\Enums\Priority::from($orderDetails->priority)->label() }}</span>
                                                    @endcan
                                                </div>
                                            </div>
                                            <div>
                                                <div class="flex items-center gap-1 mb-2">
                                                    <div
                                                        class="bg-default-100 h-6 w-6 rounded-full grid place-content-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="text-primary w-3.5 h-3.5">
                                                            <line x1="8" x2="21" y1="6"
                                                                y2="6"></line>
                                                            <line x1="8" x2="21" y1="12"
                                                                y2="12"></line>
                                                            <line x1="8" x2="21" y1="18"
                                                                y2="18"></line>
                                                            <line x1="3" x2="3.01" y1="6"
                                                                y2="6"></line>
                                                            <line x1="3" x2="3.01" y1="12"
                                                                y2="12"></line>
                                                            <line x1="3" x2="3.01" y1="18"
                                                                y2="18"></line>
                                                        </svg>
                                                    </div><span class="text-sm font-medium text-default-900">Order
                                                        Type</span>
                                                </div>
                                                <div class="relative"><button
                                                        class="inline-flex items-center justify-center rounded-md ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none h-10 px-4 py-[10px] text-sm font-medium text-default-500 bg-transparent hover:bg-transparent"
                                                        type="button">{{ \App\Enums\OrderType::from($orderDetails->order_type)->label() }}</button>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="flex items-center gap-1 mb-3">
                                                    <div
                                                        class="bg-default-100 h-6 w-6 rounded-full grid place-content-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            aria-hidden="true" role="img"
                                                            class="text-primary w-3.5 h-3.5 iconify iconify--heroicons"
                                                            width="1em" height="1em" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5">
                                                            </path>
                                                        </svg>
                                                    </div><span
                                                        class="text-sm font-medium text-default-900">Date</span>
                                                </div>
                                                <div class="relative"><button
                                                        class="inline-flex items-center justify-center rounded-md text-sm font-semibold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none text-primary-foreground h-10 bg-transparent hover:bg-transparent text-start p-0"
                                                        type="button"><span
                                                            class="text-sm font-medium text-default-500  whitespace-normal  ">{{ $orderDetails->created_at }}</span></button>
                                                </div>
                                            </div>
                                            @include(
                                                'livewire/_partials/' .
                                                    strtolower(
                                                        \App\Enums\OrderType::from(
                                                            $orderDetails->order_type)->name),
                                                ['orderDetails' => $orderDetails->service]
                                            )
                                        </div>
                                    </div>
                                </div>
                                <div dir="ltr" data-orientation="horizontal">
                                    <div role="tablist" aria-orientation="horizontal"
                                        class="items-center text-muted-foreground flex justify-between w-full bg-default-100 h-12 p-0 px-2 xl:px-12 rounded-none"
                                        tabindex="0" data-orientation="horizontal" style="outline: none;">
                                        <button type="button" role="tab" aria-selected="false"
                                            aria-controls="radix-:r5o:-content-attachments" data-state="inactive"
                                            id="radix-:r5o:-trigger-attachments"
                                            class="inline-flex items-center justify-center whitespace-nowrap px-3 ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=active]:text-foreground py-0 h-full bg-transparent text-sm font-medium text-default-600 capitalize rounded-none border-b border-transparent data-[state=active]:border-primary data-[state=active]:bg-transparent data-[state=active]:shadow-none"
                                            tabindex="-1" data-orientation="horizontal"
                                            data-radix-collection-item=""><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" class="w-3.5 h-3.5 mr-1.5 iconify iconify--heroicons"
                                                width="1em" height="1em" viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5"
                                                    d="m18.375 12.739l-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13">
                                                </path>
                                            </svg>attachments</button><button type="button" role="tab"
                                            aria-selected="false" aria-controls="radix-:r5o:-content-comments"
                                            data-state="inactive" id="radix-:r5o:-trigger-comments"
                                            class="items-center justify-center whitespace-nowrap px-3 ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=active]:text-foreground py-0 h-full bg-transparent text-sm font-medium text-default-600 capitalize rounded-none border-b border-transparent data-[state=active]:border-primary data-[state=active]:bg-transparent data-[state=active]:shadow-none flex xl:hidden"
                                            tabindex="-1" data-orientation="horizontal"
                                            data-radix-collection-item=""><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" class="w-3.5 h-3.5 mr-1.5 iconify iconify--heroicons"
                                                width="1em" height="1em" viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5"
                                                    d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227q1.603.236 3.238.364c.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67q1.635-.13 3.238-.365c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.4 48.4 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741z">
                                                </path>
                                            </svg>comments</button>
                                    </div>
                                    <div data-state="active" data-orientation="horizontal" role="tabpanel"
                                        aria-labelledby="radix-:r5o:-trigger-subtasks"
                                        id="radix-:r5o:-content-subtasks" tabindex="0"
                                        class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
                                        style="animation-duration: 0s;">
                                        <table class="w-full caption-top text-sm">
                                            <thead class="[&amp;_tr]:border-b">
                                                <tr
                                                    class="border-b border-default-300 transition-colors data-[state=selected]:bg-muted">

                                                    <th
                                                        class="h-14 px-4 max-w-28 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left align-middle text-sm text-default-800 capitalize ltr:[&amp;:has([role=checkbox])]:pr-0 rtl:[&amp;:has([role=checkbox])]:pl-0 font-semibold">
                                                        File Name</th>
                                                    <th
                                                        class="h-14 px-4 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left align-middle font-semibold text-sm text-default-800 capitalize ltr:[&amp;:has([role=checkbox])]:pr-0 rtl:[&amp;:has([role=checkbox])]:pl-0">
                                                        Type</th>

                                                    <th
                                                        class="h-14 px-4 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left align-middle font-semibold text-sm text-default-800 capitalize ltr:[&amp;:has([role=checkbox])]:pr-0 rtl:[&amp;:has([role=checkbox])]:pl-0 whitespace-nowrap">
                                                        Upload Date</th>
                                                    <th
                                                        class="h-14 px-4 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left align-middle font-semibold text-sm text-default-800 capitalize ltr:[&amp;:has([role=checkbox])]:pr-0 rtl:[&amp;:has([role=checkbox])]:pl-0 text-end">
                                                        Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="[&amp;_tr:last-child]:border-0">
                                                @foreach ($orderDetails->documents as $document)
                                                    <tr class="border-b border-default-300 transition-colors data-[state=selected]:bg-muted hover:bg-muted whitespace-nowrap"
                                                        data-state="false">
                                                        <td
                                                            class="p-4 max-w-28 align-middle text-sm last:text-right rtl:last:text-left ltr:[&amp;:has([role=checkbox])]:pr-0 rtl:[&amp;:has([role=checkbox])]:pl-0 font-medium text-card-foreground/80">
                                                            <div
                                                                class="flex space-x-3  rtl:space-x-reverse items-center">
                                                                <span
                                                                    class=" text-sm text-wrap break-all whitespace-nowrap text-card-foreground">{{ $document->file_name }}</span>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="p-4 align-middle text-sm text-default-600 last:text-right rtl:last:text-left font-normal ltr:[&amp;:has([role=checkbox])]:pr-0 rtl:[&amp;:has([role=checkbox])]:pl-0">
                                                            {{ $document->file_type }}</td>
                                                        <td
                                                            class="p-4 align-middle text-sm text-default-600 last:text-right rtl:last:text-left font-normal ltr:[&amp;:has([role=checkbox])]:pr-0 rtl:[&amp;:has([role=checkbox])]:pl-0">
                                                            {{ $document->created_at }}</td>
                                                        <td
                                                            class="p-4 align-middle text-sm text-default-600 last:text-right rtl:last:text-left font-normal ltr:[&amp;:has([role=checkbox])]:pr-0 rtl:[&amp;:has([role=checkbox])]:pl-0 flex justify-end">
                                                            <div class="flex space-x-3 rtl:space-x-reverse">
                                                                <button
                                                                    class="inline-flex items-center justify-center rounded-md text-sm font-semibold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none border border-current bg-transparent text-primary hover:text-primary-foreground hover:border-primary hover:bg-primary h-7 w-7"
                                                                    onclick="window.open('{{ Storage::disk('public')->url('digitizing/' . $document->file_path) }}', '_blank');"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        aria-hidden="true" role="img"
                                                                        class=" h-4 w-4   iconify iconify--heroicons"
                                                                        width="1em" height="1em"
                                                                        viewBox="0 0 24 24">
                                                                        <path fill="none" stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="1.5"
                                                                            d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3">
                                                                        </path>
                                                                    </svg></button>
                                                                {{-- <button
                                                                    class="inline-flex items-center justify-center rounded-md text-sm font-semibold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none border border-current bg-transparent text-destructive hover:text-destructive-foreground hover:border-destructive hover:bg-destructive h-7 w-7"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        aria-hidden="true" role="img"
                                                                        class=" h-4 w-4   iconify iconify--heroicons"
                                                                        width="1em" height="1em"
                                                                        viewBox="0 0 24 24">
                                                                        <path fill="none" stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="1.5"
                                                                            d="m14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21q.512.078 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48 48 0 0 0-3.478-.397m-12 .562q.51-.088 1.022-.165m0 0a48 48 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a52 52 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a49 49 0 0 0-7.5 0">
                                                                        </path>
                                                                    </svg></button> --}}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <livewire:order-comments orderId="{{ $orderDetails->id }}"
                        wire:key="comment-{{ $orderDetails->id }}" />
            </div>
        </div>
    @else
        <div></div>
    @endif
</div>
