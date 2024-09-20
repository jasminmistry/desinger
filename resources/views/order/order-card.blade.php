<div class="flex" x-on:click="$dispatch('show_order', { orderId: '{{ $order->id }}'})" x-sort:item="{{$order->id}}">
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
        <div data-radix-scroll-area-viewport="" class="h-full w-full rounded-[inherit]" style="overflow: hidden scroll;">
            <div style="min-width: 100%; display: table;">
                <div class="space-y-3 p-3">
                    <div class="rounded-md bg-card text-card-foreground shadow border-default-200 p-3 cursor-pointer group relative"
                        role="button" tabindex="0" aria-disabled="false" aria-roledescription="sortable"
                        aria-describedby="DndDescribedBy-1">
                        <div
                            class="flex border-b border-border space-x-0 space-y-0 p-0 flex-row items-center justify-between mb-0 border-none">
                            <div class="flex items-center gap-1">
                                <div
                                    class="text-[10px] leading-[14px] font-semibold uppercase text-default-600 border border-default-200 px-1.5  rounded-sm">
                                    {{ \App\Enums\OrderType::from($order->order_type)->label() }}</div>

                            </div>
                            {{-- <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100">
                                <button
                                    class="inline-flex items-center justify-center text-sm font-semibold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none text-primary-foreground h-6 w-6 rounded-full bg-transparent hover:bg-transparent"
                                    type="button" id="radix-:rqb:" aria-haspopup="menu" aria-expanded="false"
                                    data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-4 h-4 text-default-900">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg></button><button type="button" role="checkbox" aria-checked="false"
                                    data-state="unchecked" value="on"
                                    class="peer group shrink-0 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 [&amp;_svg]:stroke-primary-foreground border border-default-400 data-[state=checked]:border-primary data-[state=checked]:bg-primary bg-card rounded-xl h-4 w-4 [&amp;_svg]:h-3 [&amp;_svg]:w-3"></button>
                            </div> --}}
                        </div>
                        <div class="p-0">
                            <div class="relative">
                                <div class="text-sm font-semibold text-default-700 my-1 capitalize">
                                    {{ $order->service->po }}
                                </div>
                            </div>
                            <div class="text-[13px] text-default-500">{{ $order->service->name }}</div>
                            <div class="h-[190px] w-full mt-3 rounded">
                                @if ($order->documents()->first() && $order->documents()->first()->file_path)
                                    <img alt="{{ $order->service->name }}" loading="lazy" width="237"
                                        height="190" decoding="async" data-nimg="1"
                                        class="h-full w-full object-cover rounded"
                                        src="{{ asset("storage/".strtolower(\App\Enums\OrderType::from($order->type)->name)."/".$order->documents()->first()->file_path) }}" style="color: transparent;">
                                @else
                                <img alt="{{ $order->service->name }}" loading="lazy" width="237"
                                        height="190" decoding="async" data-nimg="1"
                                        class="h-full w-full object-cover rounded"
                                        src="{{ asset("assets/photo.png") }}" style="color: transparent;">
                                @endif
                            </div>
                            <div class="flex flex-wrap items-center gap-1 mt-2">
                                <div
                                    class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-success border-transparent text-success-foreground text-[10px] px-1 py-0 rounded leading-4 capitalize">
                                    {{ \App\Enums\Priority::from($order->priority)->label() }}</div>
                                <div
                                    class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-success border-transparent text-success-foreground text-[10px] px-1 py-0 rounded leading-4 capitalize">
                                    {{ \App\Enums\OrderStatus::from($order->status)->label() }}</div>
                                {{-- <div
                                    class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-info border-transparent text-info-foreground text-[10px] px-1 py-0 rounded leading-4 capitalize">
                                    planning</div> --}}
                            </div>
                            {{-- <div class="mt-4 flex items-center gap-4">
                                <div>
                                    <div class="relative"><button
                                            class="h-5 w-5 rounded-full bg-default-100 grid place-content-center"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="w-3 h-3 text-primary">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="9" cy="7" r="4">
                                                </circle>
                                                <line x1="19" x2="19" y1="8" y2="14">
                                                </line>
                                                <line x1="22" x2="16" y1="11" y2="11">
                                                </line>
                                            </svg></button></div>
                                </div>
                                <div class="relative w-max-content flex -space-x-3 avatarGroup items-center">
                                    <span
                                        class="relative flex shrink-0 overflow-hidden rounded-full w-5 h-5 ring-1 ring-background ring-offset-[2px] ring-offset-background"
                                        data-state="closed"><img class="aspect-square h-full w-full"
                                            src="/_next/static/media/avatar-7.82cf057d.jpg"></span><span
                                        class="relative flex shrink-0 overflow-hidden rounded-full w-5 h-5 ring-1 ring-background ring-offset-[2px] ring-offset-background"
                                        data-state="closed"><img class="aspect-square h-full w-full"
                                            src="/_next/static/media/avatar-7.82cf057d.jpg"></span><span
                                        class="relative flex shrink-0 overflow-hidden rounded-full w-5 h-5 ring-1 ring-background ring-offset-[2px] ring-offset-background"
                                        data-state="closed"><img class="aspect-square h-full w-full"
                                            src="/_next/static/media/avatar-7.82cf057d.jpg"></span><span
                                        class="relative flex shrink-0 overflow-hidden rounded-full ring-1 ring-background ring-offset-[2px] ring-offset-background w-5 h-5"><span
                                            class="flex h-full w-full items-center justify-center rounded-full bg-muted text-sm font-normal">+4</span></span>
                                </div>
                            </div> --}}
                        </div>
                        <div class="flex items-center p-0 mt-2">
                            <div class="w-full flex flex-wrap items-center gap-x-3 gap-y-2">
                                <div class="flex items-center gap-1 text-xs text-default-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="w-3.5 h-3.5 text-default-500">
                                        <line x1="8" x2="21" y1="6" y2="6"></line>
                                        <line x1="8" x2="21" y1="12" y2="12"></line>
                                        <line x1="8" x2="21" y1="18" y2="18"></line>
                                        <line x1="3" x2="3.01" y1="6" y2="6"></line>
                                        <line x1="3" x2="3.01" y1="12" y2="12"></line>
                                        <line x1="3" x2="3.01" y1="18" y2="18"></line>
                                    </svg>{{ $order->assigned->name ?? '' }}
                                </div>
                                <div class="flex items-center gap-1 text-xs text-default-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" role="img" class="w-4 h-4 iconify iconify--arcticons"
                                        width="1em" height="1em" viewBox="0 0 48 48">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M10.364 4.51a1.994 1.994 0 0 0-1.945 1.994v35.002a1.995 1.995 0 0 0 1.944 1.994h27.224a1.994 1.994 0 0 0 1.994-1.994V14.472h-7.977a1.995 1.995 0 0 1-1.945-1.995V4.5Zm19.205 0l9.962 9.962m-23.693 8.456h16.274M15.838 34.994h16.274m-16.274-6.033h16.274">
                                        </path>
                                    </svg>{{ $order->documents->count() }}
                                    {{-- /5<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="w-3.5 h-3.5 text-default-600">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg> --}}
                                </div>
                                <div class="flex items-center gap-1 text-xs text-default-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" role="img"
                                        class="w-3.5 h-3.5 text-default-500 iconify iconify--heroicons" width="1em"
                                        height="1em" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="M8.625 12a.375.375 0 1 1-.75 0a.375.375 0 0 1 .75 0m0 0H8.25m4.125 0a.375.375 0 1 1-.75 0a.375.375 0 0 1 .75 0m0 0H12m4.125 0a.375.375 0 1 1-.75 0a.375.375 0 0 1 .75 0m0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.8 9.8 0 0 1-2.555-.337A5.97 5.97 0 0 1 5.41 20.97a6 6 0 0 1-.474-.065a4.5 4.5 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25">
                                        </path>
                                    </svg>{{ count($order->comments) }}
                                </div>
                                {{-- <div class="flex items-center gap-1 text-xs text-default-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="w-2.5 h-2.5 text-default-500">
                                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71">
                                        </path>
                                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71">
                                        </path>
                                    </svg>02
                                </div> --}}
                                <div class="flex items-center gap-1 text-xs text-default-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="w-3.5 h-3.5 text-default-500">
                                        <rect width="18" height="18" x="3" y="4" rx="2"
                                            ry="2"></rect>
                                        <line x1="16" x2="16" y1="2" y2="6"></line>
                                        <line x1="8" x2="8" y1="2" y2="6"></line>
                                        <line x1="3" x2="21" y1="10" y2="10"></line>
                                    </svg>{{ $order->created_at }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
