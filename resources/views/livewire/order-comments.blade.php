<div class="hidden xl:block">
    <div class="flex flex-col justify-between">
        <div class="border-none mb-0 flex-none py-3.5 px-2">
            <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                    class="h-4 w-4 text-default-500 iconify iconify--heroicons" width="1em"
                    height="1em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="1.5"
                        d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227q1.603.236 3.238.364c.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67q1.635-.13 3.238-.365c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.4 48.4 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741z">
                    </path>
                </svg>
                <div class="text-base font-medium text-default-800">{{ count($comments) }}<span
                        class="ml-1 capitalize">comments</span></div>
            </div>
        </div>
        <div class="flex-1 pb-0">
            <div
                class="relative before:absolute before:top-1/2 -translate-y-1/2 before:left-0 before:w-full before:h-[1px] before:bg-default-300 text-center">
                <span class="relative bg-card   px-3"></span>
            </div>
            <div class="h-[calc(100vh-210px)]">
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
                            <div class="space-y-3.5 px-5">
                                @foreach ($comments as $comment)
                                <div class="flex gap-2">
                                    <div class="felx-none"><span
                                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"><span
                                                class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">{{$comment->user->initials}}</span></span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="text-sm font-medium text-default-900 capitalize">
                                                {{$comment->user->name}}</div>
                                            <div class="text-xs text-default-400">{{$comment->created_at}}</div>
                                            <div class="text-xs text-default-400"><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="w-3 h-3">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg></div>
                                        </div>
                                        <div class="mt-1 text-default-600 font-medium ">{{$comment->comment}}</div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-none">
            <div class="w-full flex items-end gap-4 px-4">
                <div class="flex-1">
                    <form wire:submit="save">
                        <div class="text-rose-800">@error('comment') <span class="error">{{ $message }}</span> @enderror</div>
                        <div class="flex  gap-1 relative">
                            <input type="hidden" name="orderId" value="{{$orderId}}" wire:model="orderId" />
                            <textarea placeholder="Type your message..." name="comment" wire:model="comment" autocomplete="false"
                                class="bg-default-100 rounded-xl break-words px-3 flex-1 h-10 pt-2 p-1 "
                                style="min-height: 40px; max-height: 120px; overflow-y: auto; resize: none;"></textarea><button
                                class="inline-flex items-center justify-center text-sm font-semibold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none text-primary-foreground rounded-full bg-default-100 hover:bg-default-100 h-[42px] w-[42px] p-0 self-end"
                                type="submit"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="w-5 h-8 text-primary">
                                    <path d="m3 3 3 9-3 9 19-9Z"></path>
                                    <path d="M6 12h16"></path>
                                </svg></button>
                                <span wire:loading>Saving...</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
