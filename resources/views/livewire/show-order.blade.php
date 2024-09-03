<div>
    @if ($orderId)
        <div role="dialog" id="radix-:r44:" x-data="{ open: true, toggle() { $el.remove(); } }" aria-describedby="radix-:r46:" aria-labelledby="radix-:r45:" data-state="open"
            x-show="open"
            class="fixed z-[999] gap-4 bg-card shadow-lg transition ease-in-out data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:duration-300 data-[state=open]:duration-500 inset-y-0 right-0 h-full border-l data-[state=closed]:slide-out-to-right data-[state=open]:slide-in-from-right max-w-sm w-[85%] md:max-w-[1200px] p-0"
            tabindex="-1" style="pointer-events: auto;">
            <div
                class="flex flex-col text-center sm:text-left sm:flex-row justify-between gap-3 space-y-0 border-b border-default-200 px-2 xl:px-6 py-5">
                <div class="flex items-center gap-2">
                    <div class="text-sm font-medium text-default-600 bg-default-100 py-[2px] px-3 rounded">DT 01</div>
                    <div class="w-fit px-1"><button type="button" role="combobox" aria-controls="radix-:r5i:"
                            aria-expanded="false" aria-autocomplete="none" dir="ltr" data-state="closed"
                            data-placeholder=""
                            class="w-full px-3 flex [&amp;>svg]:h-5 [&amp;>svg]:w-5 justify-between items-center read-only:bg-background disabled:cursor-not-allowed disabled:opacity-50 transition duration-300 border-default-300 text-default-500 focus:outline-none focus:border-default-500/50 disabled:bg-default-200 placeholder:text-accent-foreground/50 [&amp;>svg]:stroke-default-600 border rounded-lg text-sm h-6"><span
                                style="pointer-events: none;">todo</span><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down" aria-hidden="true">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg></button></div>
                </div>
                <div class="flex items-center gap-2 pr-5">
                    <div class="flex items-center gap-2">
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
                        </svg></div>
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
                                    <form class="py-5 px-6 pb-8 border-b border-default-200">
                                        <div class="flex items-center gap-1 mb-2"><button type="button"
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
                                    </form>
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
                                                    <div
                                                        class="relative w-max-content flex -space-x-3 avatarGroup items-center">
                                                        <span
                                                            class="relative flex shrink-0 overflow-hidden rounded-full w-5 h-5 ring-1 ring-background ring-offset-[2px] ring-offset-background"
                                                            data-state="closed"><img
                                                                class="aspect-square h-full w-full"
                                                                src="/_next/static/media/avatar-7.82cf057d.jpg"></span><span
                                                            class="relative flex shrink-0 overflow-hidden rounded-full w-5 h-5 ring-1 ring-background ring-offset-[2px] ring-offset-background"
                                                            data-state="closed"><img
                                                                class="aspect-square h-full w-full"
                                                                src="/_next/static/media/avatar-7.82cf057d.jpg"></span><span
                                                            class="relative flex shrink-0 overflow-hidden rounded-full w-5 h-5 ring-1 ring-background ring-offset-[2px] ring-offset-background"
                                                            data-state="closed"><img
                                                                class="aspect-square h-full w-full"
                                                                src="/_next/static/media/avatar-7.82cf057d.jpg"></span><span
                                                            class="relative flex shrink-0 overflow-hidden rounded-full ring-1 ring-background ring-offset-[2px] ring-offset-background w-5 h-5"><span
                                                                class="flex h-full w-full items-center justify-center rounded-full bg-muted text-sm font-normal">+4</span></span>
                                                    </div>
                                                    <div class="relative"><button
                                                            class="h-5 w-5 rounded-full bg-default-100 grid place-content-center"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="w-3 h-3 text-primary">
                                                                <path d="M5 12h14"></path>
                                                                <path d="M12 5v14"></path>
                                                            </svg></button></div>
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
                                                <div class="w-[100px]"><button type="button" role="combobox"
                                                        aria-controls="radix-:r5n:" aria-expanded="false"
                                                        aria-autocomplete="none" dir="ltr" data-state="closed"
                                                        class="w-full px-3 flex [&amp;>svg]:h-5 [&amp;>svg]:w-5 justify-between items-center disabled:cursor-not-allowed disabled:opacity-50 transition duration-300 border-primary text-primary focus:outline-none focus:border-primary-700 disabled:bg-primary/30 disabled:placeholder:text-primary placeholder:text-primary/70 [&amp;>svg]:stroke-primary rounded-lg h-8 text-xs read-only:bg-primary/10"><span
                                                            style="pointer-events: none;">High</span><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-chevron-down" aria-hidden="true">
                                                            <path d="m6 9 6 6 6-6"></path>
                                                        </svg></button></div>
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
                                                    </div><span
                                                        class="text-sm font-medium text-default-900">List</span>
                                                </div>
                                                <div class="relative"><button
                                                        class="inline-flex items-center justify-center rounded-md ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none h-10 px-4 py-[10px] text-sm font-medium text-default-500 bg-transparent hover:bg-transparent"
                                                        type="button">UI/UX Design</button></div>
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
                                                            class="text-sm font-medium text-default-500  whitespace-normal  ">Due:
                                                            30 Feb, 2024 / 5:23AM</span></button></div>
                                            </div>
                                            <div>
                                                <div class="flex items-center gap-1 mb-1">
                                                    <div
                                                        class="bg-default-100 h-6 w-6 rounded-full grid place-content-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="text-primary w-3.5 h-3.5">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div><span
                                                        class="text-sm font-medium text-default-900">Dependency</span>
                                                </div>
                                                <div class="relative"><button
                                                        class="inline-flex items-center justify-center rounded-md ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none h-10 text-sm font-medium text-primary hover:underline cursor-pointer bg-transparent hover:bg-transparent p-0"
                                                        type="button">Set</button></div>
                                            </div>
                                            <div>
                                                <div class="flex items-center gap-1 mb-3">
                                                    <div
                                                        class="bg-default-100 h-6 w-6 rounded-full grid place-content-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="text-primary w-3.5 h-3.5">
                                                            <line x1="4" x2="20" y1="9"
                                                                y2="9"></line>
                                                            <line x1="4" x2="20" y1="15"
                                                                y2="15"></line>
                                                            <line x1="10" x2="8" y1="3"
                                                                y2="21"></line>
                                                            <line x1="16" x2="14" y1="3"
                                                                y2="21"></line>
                                                        </svg>
                                                    </div><span class="text-sm font-medium text-default-900">Story
                                                        Points</span>
                                                </div>
                                                <div><input placeholder="Set"
                                                        class="w-full border-b border-default-300 focus:outline-none  text-sm font-medium text-default-900 appearance-none placeholder:text-primary"
                                                        type="number"></div>
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <div class="relative">
                                                <div class="flex items-center gap-1">
                                                    <div class="text-sm font-medium text-default-900">Add Tags</div>
                                                    <button
                                                        class="inline-flex items-center justify-center text-sm font-semibold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none text-primary-foreground h-5 w-5 rounded-full bg-default-100 hover:bg-default-200"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="w-3 h-3 text-primary">
                                                            <path d="M5 12h14"></path>
                                                            <path d="M12 5v14"></path>
                                                        </svg></button>
                                                </div>
                                            </div>
                                            <div class="mt-3 flex gap-2">
                                                <div
                                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-success border-transparent text-success-foreground capitalize">
                                                    design</div>
                                                <div
                                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-info border-transparent text-info-foreground capitalize">
                                                    planning</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div dir="ltr" data-orientation="horizontal">
                                        <div role="tablist" aria-orientation="horizontal"
                                            class="items-center text-muted-foreground flex justify-between w-full bg-default-100 h-12 p-0 px-2 xl:px-12 rounded-none"
                                            tabindex="0" data-orientation="horizontal" style="outline: none;">
                                            <button type="button" role="tab" aria-selected="true"
                                                aria-controls="radix-:r5o:-content-subtasks" data-state="active"
                                                id="radix-:r5o:-trigger-subtasks"
                                                class="inline-flex items-center justify-center whitespace-nowrap px-3 ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=active]:text-foreground py-0 h-full bg-transparent text-sm font-medium text-default-600 capitalize rounded-none border-b border-transparent data-[state=active]:border-primary data-[state=active]:bg-transparent data-[state=active]:shadow-none"
                                                tabindex="-1" data-orientation="horizontal"
                                                data-radix-collection-item=""><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img"
                                                    class="w-3.5 h-3.5 mr-1.5 iconify iconify--heroicons"
                                                    width="1em" height="1em" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5"
                                                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9">
                                                    </path>
                                                </svg>subtasks</button><button type="button" role="tab"
                                                aria-selected="false" aria-controls="radix-:r5o:-content-attachments"
                                                data-state="inactive" id="radix-:r5o:-trigger-attachments"
                                                class="inline-flex items-center justify-center whitespace-nowrap px-3 ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=active]:text-foreground py-0 h-full bg-transparent text-sm font-medium text-default-600 capitalize rounded-none border-b border-transparent data-[state=active]:border-primary data-[state=active]:bg-transparent data-[state=active]:shadow-none"
                                                tabindex="-1" data-orientation="horizontal"
                                                data-radix-collection-item=""><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img"
                                                    class="w-3.5 h-3.5 mr-1.5 iconify iconify--heroicons"
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
                                                    role="img"
                                                    class="w-3.5 h-3.5 mr-1.5 iconify iconify--heroicons"
                                                    width="1em" height="1em" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5"
                                                        d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227q1.603.236 3.238.364c.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67q1.635-.13 3.238-.365c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.4 48.4 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741z">
                                                    </path>
                                                </svg>comments</button></div>
                                        <div data-state="active" data-orientation="horizontal" role="tabpanel"
                                            aria-labelledby="radix-:r5o:-trigger-subtasks"
                                            id="radix-:r5o:-content-subtasks" tabindex="0"
                                            class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
                                            style="animation-duration: 0s;">
                                            <div class="pt-3">
                                                <div class="flex mb-2 px-6">
                                                    <div
                                                        class="flex-1 text-base font-medium text-default-700 capitalize">
                                                        Progress</div>
                                                    <div class="flex-1 flex items-center gap-2">
                                                        <div class="flex-none text-xs font-medium text-default-500">3/6
                                                        </div>
                                                        <div class="flex-1">
                                                            <div aria-valuemax="100" aria-valuemin="0"
                                                                role="progressbar" data-state="indeterminate"
                                                                data-max="100"
                                                                class="relative overflow-hidden rounded-full bg-default-200 [&amp;>div]:bg-primary h-2">
                                                                <div data-state="indeterminate" data-max="100"
                                                                    class="flex-1 transition-all h-full w-full flex items-center justify-center"
                                                                    style="transform: translateX(-50%);"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div
                                                        class="flex gap-2 border-b border-dashed border-default-200 py-3 px-6 cursor-pointer">
                                                        <div class="mt-1 flex-none">
                                                            <div><button type="button" role="checkbox"
                                                                    aria-checked="false" data-state="unchecked"
                                                                    value="on"
                                                                    class="peer group shrink-0 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 [&amp;_svg]:stroke-primary-foreground border border-default-400 data-[state=checked]:border-primary data-[state=checked]:bg-primary bg-card rounded h-4 w-4 [&amp;_svg]:h-3 [&amp;_svg]:w-3"></button>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="flex">
                                                                <div
                                                                    class="flex-1 text-base font-medium text-default-900">
                                                                    parsing</div>
                                                                <div class="flex-none flex items-center gap-2">
                                                                    <div>
                                                                        <div
                                                                            class="relative w-max-content flex -space-x-3 avatarGroup items-center">
                                                                            <span
                                                                                class="relative flex shrink-0 overflow-hidden rounded-full ring-1 ring-background ring-offset-[2px] ring-offset-background h-7 w-7"><span
                                                                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">AB</span></span><span
                                                                                class="relative flex shrink-0 overflow-hidden rounded-full ring-1 ring-background ring-offset-[2px] ring-offset-background h-7 w-7"><span
                                                                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">AB</span></span><span
                                                                                class="relative flex shrink-0 overflow-hidden rounded-full ring-1 ring-background ring-offset-[2px] ring-offset-background h-7 w-7"><span
                                                                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">AB</span></span><span
                                                                                class="relative flex shrink-0 overflow-hidden rounded-full ring-1 ring-background ring-offset-[2px] ring-offset-background w-7 h-7"><span
                                                                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted text-sm font-normal">+5</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="relative"><button
                                                                                class="h-5 w-5 rounded-full bg-default-100 grid place-content-center"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="w-3 h-3 text-primary">
                                                                                    <path
                                                                                        d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                                                    </path>
                                                                                    <circle cx="9"
                                                                                        cy="7" r="4"></circle>
                                                                                    <line x1="19"
                                                                                        x2="19" y1="8"
                                                                                        y2="14">
                                                                                    </line>
                                                                                    <line x1="22"
                                                                                        x2="16" y1="11"
                                                                                        y2="11">
                                                                                    </line>
                                                                                </svg></button></div>
                                                                    </div><button
                                                                        class="inline-flex items-center justify-center text-sm font-semibold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none h-6 w-6 bg-default-100 text-primary rounded-full hover:bg-default-100 relative"
                                                                        type="button" id="radix-:r5v:"
                                                                        aria-haspopup="menu" aria-expanded="false"
                                                                        data-state="closed"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            aria-hidden="true" role="img"
                                                                            class="w-4 h-4 text-default-900 iconify iconify--heroicons"
                                                                            width="1em" height="1em"
                                                                            viewBox="0 0 24 24">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="1.5"
                                                                                d="M6.75 12a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m6 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m6 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0">
                                                                            </path>
                                                                        </svg></button>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center gap-3 mt-3">
                                                                <div
                                                                    class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-warning border-transparent bg-opacity-10 text-warning hover:text-warning text-[10px] px-1 py-0 rounded leading-4 capitalize">
                                                                    high</div>
                                                                <div
                                                                    class="text-xs text-default-500 flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        aria-hidden="true" role="img"
                                                                        class="w-3.5 h-3.5 text-default-500 iconify iconify--heroicons"
                                                                        width="1em" height="1em"
                                                                        viewBox="0 0 24 24">
                                                                        <path fill="none" stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="1.5"
                                                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5">
                                                                        </path>
                                                                    </svg><span>May 25, 2024</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex gap-2 border-b border-dashed border-default-200 py-3 px-6 cursor-pointer">
                                                        <div class="mt-1 flex-none">
                                                            <div><button type="button" role="checkbox"
                                                                    aria-checked="false" data-state="unchecked"
                                                                    value="on"
                                                                    class="peer group shrink-0 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 [&amp;_svg]:stroke-primary-foreground border border-default-400 data-[state=checked]:border-primary data-[state=checked]:bg-primary bg-card rounded h-4 w-4 [&amp;_svg]:h-3 [&amp;_svg]:w-3"></button>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="flex">
                                                                <div
                                                                    class="flex-1 text-base font-medium text-default-900">
                                                                    synthesizing</div>
                                                                <div class="flex-none flex items-center gap-2">
                                                                    <div>
                                                                        <div
                                                                            class="relative w-max-content flex -space-x-3 avatarGroup items-center">
                                                                            <span
                                                                                class="relative flex shrink-0 overflow-hidden rounded-full ring-1 ring-background ring-offset-[2px] ring-offset-background h-7 w-7"><span
                                                                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">AB</span></span><span
                                                                                class="relative flex shrink-0 overflow-hidden rounded-full ring-1 ring-background ring-offset-[2px] ring-offset-background h-7 w-7"><span
                                                                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">AB</span></span><span
                                                                                class="relative flex shrink-0 overflow-hidden rounded-full ring-1 ring-background ring-offset-[2px] ring-offset-background h-7 w-7"><span
                                                                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">AB</span></span><span
                                                                                class="relative flex shrink-0 overflow-hidden rounded-full ring-1 ring-background ring-offset-[2px] ring-offset-background w-7 h-7"><span
                                                                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted text-sm font-normal">+6</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="relative"><button
                                                                                class="h-5 w-5 rounded-full bg-default-100 grid place-content-center"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="w-3 h-3 text-primary">
                                                                                    <path
                                                                                        d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                                                    </path>
                                                                                    <circle cx="9"
                                                                                        cy="7" r="4"></circle>
                                                                                    <line x1="19"
                                                                                        x2="19" y1="8"
                                                                                        y2="14">
                                                                                    </line>
                                                                                    <line x1="22"
                                                                                        x2="16" y1="11"
                                                                                        y2="11">
                                                                                    </line>
                                                                                </svg></button></div>
                                                                    </div><button
                                                                        class="inline-flex items-center justify-center text-sm font-semibold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none h-6 w-6 bg-default-100 text-primary rounded-full hover:bg-default-100 relative"
                                                                        type="button" id="radix-:r64:"
                                                                        aria-haspopup="menu" aria-expanded="false"
                                                                        data-state="closed"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            aria-hidden="true" role="img"
                                                                            class="w-4 h-4 text-default-900 iconify iconify--heroicons"
                                                                            width="1em" height="1em"
                                                                            viewBox="0 0 24 24">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="1.5"
                                                                                d="M6.75 12a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m6 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m6 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0">
                                                                            </path>
                                                                        </svg></button>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center gap-3 mt-3">
                                                                <div
                                                                    class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-warning border-transparent bg-opacity-10 text-warning hover:text-warning text-[10px] px-1 py-0 rounded leading-4 capitalize">
                                                                    low</div>
                                                                <div
                                                                    class="text-xs text-default-500 flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        aria-hidden="true" role="img"
                                                                        class="w-3.5 h-3.5 text-default-500 iconify iconify--heroicons"
                                                                        width="1em" height="1em"
                                                                        viewBox="0 0 24 24">
                                                                        <path fill="none" stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="1.5"
                                                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5">
                                                                        </path>
                                                                    </svg><span>February 12, 2024</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex gap-2 border-b border-dashed border-default-200 py-3 px-6 cursor-pointer">
                                                        <div class="mt-1 flex-none">
                                                            <div><button type="button" role="checkbox"
                                                                    aria-checked="false" data-state="unchecked"
                                                                    value="on"
                                                                    class="peer group shrink-0 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 [&amp;_svg]:stroke-primary-foreground border border-default-400 data-[state=checked]:border-primary data-[state=checked]:bg-primary bg-card rounded h-4 w-4 [&amp;_svg]:h-3 [&amp;_svg]:w-3"></button>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="flex">
                                                                <div
                                                                    class="flex-1 text-base font-medium text-default-900">
                                                                    indexing</div>
                                                                <div class="flex-none flex items-center gap-2">
                                                                    <div>
                                                                        <div
                                                                            class="relative w-max-content flex -space-x-3 avatarGroup items-center">
                                                                            <span
                                                                                class="relative flex shrink-0 overflow-hidden rounded-full ring-1 ring-background ring-offset-[2px] ring-offset-background h-7 w-7"><span
                                                                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">AB</span></span><span
                                                                                class="relative flex shrink-0 overflow-hidden rounded-full ring-1 ring-background ring-offset-[2px] ring-offset-background h-7 w-7"><span
                                                                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">AB</span></span><span
                                                                                class="relative flex shrink-0 overflow-hidden rounded-full ring-1 ring-background ring-offset-[2px] ring-offset-background h-7 w-7"><span
                                                                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">AB</span></span><span
                                                                                class="relative flex shrink-0 overflow-hidden rounded-full ring-1 ring-background ring-offset-[2px] ring-offset-background w-7 h-7"><span
                                                                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted text-sm font-normal">+8</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="relative"><button
                                                                                class="h-5 w-5 rounded-full bg-default-100 grid place-content-center"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="w-3 h-3 text-primary">
                                                                                    <path
                                                                                        d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2">
                                                                                    </path>
                                                                                    <circle cx="9"
                                                                                        cy="7" r="4"></circle>
                                                                                    <line x1="19"
                                                                                        x2="19" y1="8"
                                                                                        y2="14">
                                                                                    </line>
                                                                                    <line x1="22"
                                                                                        x2="16" y1="11"
                                                                                        y2="11">
                                                                                    </line>
                                                                                </svg></button></div>
                                                                    </div><button
                                                                        class="inline-flex items-center justify-center text-sm font-semibold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none h-6 w-6 bg-default-100 text-primary rounded-full hover:bg-default-100 relative"
                                                                        type="button" id="radix-:r69:"
                                                                        aria-haspopup="menu" aria-expanded="false"
                                                                        data-state="closed"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            aria-hidden="true" role="img"
                                                                            class="w-4 h-4 text-default-900 iconify iconify--heroicons"
                                                                            width="1em" height="1em"
                                                                            viewBox="0 0 24 24">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="1.5"
                                                                                d="M6.75 12a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m6 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m6 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0">
                                                                            </path>
                                                                        </svg></button>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center gap-3 mt-3">
                                                                <div
                                                                    class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 bg-warning border-transparent bg-opacity-10 text-warning hover:text-warning text-[10px] px-1 py-0 rounded leading-4 capitalize">
                                                                    low</div>
                                                                <div
                                                                    class="text-xs text-default-500 flex items-center gap-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        aria-hidden="true" role="img"
                                                                        class="w-3.5 h-3.5 text-default-500 iconify iconify--heroicons"
                                                                        width="1em" height="1em"
                                                                        viewBox="0 0 24 24">
                                                                        <path fill="none" stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="1.5"
                                                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5">
                                                                        </path>
                                                                    </svg><span>August 4, 2024</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class="relative pr-1.5"><label
                                                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block p-0 m-0 absolute top-1/2 -translate-y-1/2 left-6 z-10 cursor-pointer"
                                                        for="add-subtask"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="w-5 h-5 text-default-500 ">
                                                            <path d="M5 12h14"></path>
                                                            <path d="M12 5v14"></path>
                                                        </svg></label>
                                                    <div class="flex-1 w-full"><input
                                                            class="w-full bg-background dark:border-700 px-3 file:border-0 file:bg-transparent file:text-sm file:font-medium read-only:bg-background disabled:cursor-not-allowed disabled:opacity-50 transition duration-300 focus:outline-none disabled:bg-default-200 placeholder:text-accent-foreground/50 border read-only:leading-9 h-[52px] rounded-none border-b border-default-200 pl-12 text-sm font-medium text-default-600 focus:shadow-sm focus:drop-shadow-sm focus:inset-4 focus:border-default-300"
                                                            id="add-subtask" placeholder="Add a new subtask..."
                                                            name="title"></div>
                                                </form>
                                                <div
                                                    class="px-6 py-4 cursor-pointer text-xs font-medium text-default-500 flex items-center gap-1">
                                                    3 Completed Subtask <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="w-4 h-4">
                                                        <path d="m6 9 6 6 6-6"></path>
                                                    </svg></div>
                                                <div data-state="closed">
                                                    <div data-state="closed" id="radix-:r6b:" hidden=""
                                                        class="CollapsibleContent" style=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-state="inactive" data-orientation="horizontal" role="tabpanel"
                                            aria-labelledby="radix-:r5o:-trigger-attachments" hidden=""
                                            id="radix-:r5o:-content-attachments" tabindex="0"
                                            class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
                                        </div>
                                        <div data-state="inactive" data-orientation="horizontal" role="tabpanel"
                                            aria-labelledby="radix-:r5o:-trigger-comments" hidden=""
                                            id="radix-:r5o:-content-comments" tabindex="0"
                                            class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <div class="text-base font-medium text-default-800">6<span
                                        class="ml-1 capitalize">comments</span></div>
                            </div>
                        </div>
                        <div class="flex-1 pb-0">
                            <div
                                class="relative before:absolute before:top-1/2 -translate-y-1/2 before:left-0 before:w-full before:h-[1px] before:bg-default-300 text-center">
                                <span class="relative bg-card   px-3">Today</span>
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
                                                <div class="flex gap-2">
                                                    <div class="felx-none"><span
                                                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"><span
                                                                class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">CS</span></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex items-center gap-2">
                                                            <div
                                                                class="text-sm font-medium text-default-900 capitalize">
                                                                Marlon
                                                                Kris</div>
                                                            <div class="text-xs text-default-400">July 8, 2024</div>
                                                            <div class="text-xs text-default-400"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="w-3 h-3">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg></div>
                                                        </div>
                                                        <div class="mt-1 text-default-600 font-medium ">Aduro benigne
                                                            claro
                                                            possimus. Error viridis aveho audacia.</div>
                                                    </div>
                                                </div>
                                                <div class="flex gap-2">
                                                    <div class="felx-none"><span
                                                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"><span
                                                                class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">CS</span></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex items-center gap-2">
                                                            <div
                                                                class="text-sm font-medium text-default-900 capitalize">
                                                                Gerardo Langworth-Harris</div>
                                                            <div class="text-xs text-default-400">July 8, 2024</div>
                                                            <div class="text-xs text-default-400"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="w-3 h-3">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg></div>
                                                        </div>
                                                        <div class="mt-1 text-default-600 font-medium ">Cur cattus
                                                            paulatim
                                                            quasi cura patior alveus. Uter attero argentum synagoga
                                                            aqua.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex gap-2">
                                                    <div class="felx-none"><span
                                                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"><span
                                                                class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">CS</span></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex items-center gap-2">
                                                            <div
                                                                class="text-sm font-medium text-default-900 capitalize">
                                                                Freddie Beahan Sr.</div>
                                                            <div class="text-xs text-default-400">July 8, 2024</div>
                                                            <div class="text-xs text-default-400"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="w-3 h-3">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg></div>
                                                        </div>
                                                        <div class="mt-1 text-default-600 font-medium ">Tepidus soleo
                                                            venustas
                                                            impedit conculco centum acceptus velut defetiscor sit.
                                                            Sollers
                                                            maxime colligo possimus ulterius carus pax.</div>
                                                    </div>
                                                </div>
                                                <div class="flex gap-2">
                                                    <div class="felx-none"><span
                                                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"><span
                                                                class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">CS</span></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex items-center gap-2">
                                                            <div
                                                                class="text-sm font-medium text-default-900 capitalize">
                                                                Louis
                                                                Deckow</div>
                                                            <div class="text-xs text-default-400">July 8, 2024</div>
                                                            <div class="text-xs text-default-400"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="w-3 h-3">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg></div>
                                                        </div>
                                                        <div class="mt-1 text-default-600 font-medium ">Theatrum atqui
                                                            apostolus asporto officiis appello cometes. Viridis utroque
                                                            voluptas.</div>
                                                    </div>
                                                </div>
                                                <div class="flex gap-2">
                                                    <div class="felx-none"><span
                                                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"><span
                                                                class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">CS</span></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex items-center gap-2">
                                                            <div
                                                                class="text-sm font-medium text-default-900 capitalize">
                                                                Moses
                                                                Jones</div>
                                                            <div class="text-xs text-default-400">July 8, 2024</div>
                                                            <div class="text-xs text-default-400"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="w-3 h-3">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg></div>
                                                        </div>
                                                        <div class="mt-1 text-default-600 font-medium ">Iure concido
                                                            adsidue
                                                            defleo. Apto magni attonbitus libero ara concido adipiscor
                                                            coniecto
                                                            suffoco.</div>
                                                    </div>
                                                </div>
                                                <div class="flex gap-2">
                                                    <div class="felx-none"><span
                                                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"><span
                                                                class="flex h-full w-full items-center justify-center rounded-full bg-muted font-semibold text-sm">CS</span></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex items-center gap-2">
                                                            <div
                                                                class="text-sm font-medium text-default-900 capitalize">
                                                                Alan
                                                                Murphy</div>
                                                            <div class="text-xs text-default-400">July 8, 2024</div>
                                                            <div class="text-xs text-default-400"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="w-3 h-3">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg></div>
                                                        </div>
                                                        <div class="mt-1 text-default-600 font-medium ">Aufero vehemens
                                                            adiuvo
                                                            commemoro constans in. Absconditus antepono ocer toties
                                                            basium
                                                            teneo
                                                            desparatus auditor.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-none">
                            <div class="w-full flex items-end gap-4 px-4">
                                <div class="flex-1">
                                    <form>
                                        <div class="flex  gap-1 relative">
                                            <textarea placeholder="Type your message..." class="bg-default-100 rounded-xl break-words px-3 flex-1 h-10 pt-2 p-1 "
                                                style="min-height: 40px; max-height: 120px; overflow-y: auto; resize: none;"></textarea><button
                                                class="inline-flex items-center justify-center text-sm font-semibold ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-0 disabled:opacity-50 whitespace-nowrap disabled:pointer-events-none text-primary-foreground rounded-full bg-default-100 hover:bg-default-100 h-[42px] w-[42px] p-0 self-end"
                                                type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="w-5 h-8 text-primary">
                                                    <path d="m3 3 3 9-3 9 19-9Z"></path>
                                                    <path d="M6 12h16"></path>
                                                </svg></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><button type="button"
                @click="toggle()"
                class="absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none  disabled:pointer-events-none data-[state=open]:bg-secondary"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="h-4 w-4 relative top-4">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg></button>
        </div>
    @else
        <div></div>
    @endif
</div>
