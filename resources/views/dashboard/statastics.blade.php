<div class="space-y-6">
    <div class="flex items-center flex-wrap justify-between gap-4">
        <div class="text-2xl font-medium text-default-800">{{__("Dashboard")}}</div>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 md:col-span-4 mt-10 md:mt-0">
            <div class="w-full h-full bg-primary rounded-md  flex p-6 relative ">
                <div class="flex-1 ">
                    <div class="text-lg md:text-2xl font-semibold text-primary-foreground mb-6">{{__("Welcome Back")}} <br>{{ auth()->user()->name }}</div>
                    <div class=" flex flex-col gap-4 sm:flex-row ">
                        <div
                            class="flex items-center w-full max-w-[130px] p-3 rounded bg-white/10 shadow backdrop-blur-sm">
                            <div class="flex-1">
                                <div class="text-xs font-semibold text-primary-foreground/80">
                                    {{ __('Today\'s Orders') }}</div>
                                <div class="text-lg font-semibold text-primary-foreground">{{ $today_order_count }}</div>
                            </div>
                        </div>
                        <div
                            class="flex items-center w-full max-w-[130px] p-3 rounded bg-white/10 shadow backdrop-blur-sm">
                            <div class="flex-1">
                                <div class="text-xs font-semibold text-primary-foreground/80">
                                    {{ __('Over due Invoice') }}</div>
                                <div class="text-lg font-semibold text-primary-foreground">{{ $over_due_invoice_count }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="absolute bottom-0 right-4 md:right-[30%] md:bottom-5 2xl:right-10 w-[100px] ">
                    <img alt="user" loading="lazy" width="117" height="201" decoding="async"
                        data-nimg="1" class="w-full h-full object-cover"
                        src="{{ asset('assets/admin.png') }}">
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-4">
                <div
                    class="bg-card text-card-foreground shadow-sm rounded-lg p-4 xl:p-2 xl:py-6 2xl:p-6  2xl:py-10 flex flex-col items-center 2xl:min-w-[168px]">
                    <div><span
                            class="h-12 w-12 rounded-full flex justify-center items-center bg-primary/10"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="w-6 h-6 text-primary">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5zM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 1 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15m.75 2.25a.75.75 0 1 0 0 1.5H12a.75.75 0 1 0 0-1.5z"
                                    clip-rule="evenodd"></path>
                                <path fill="currentColor"
                                    d="M12.971 1.816a5.23 5.23 0 0 1 1.28 3.434v1.875c0 .207.167.375.374.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.77 9.77 0 0 0-6.963-6.963">
                                </path>
                            </svg></span></div>
                    <div class="mt-4 text-center">
                        <div class="text-base font-medium text-default-600">{{ __('Orders / Month') }}
                        </div>
                        <div class="text-3xl font-semibold text-primary mt-1">{{ $per_month_count }}</div>

                    </div>
                </div>
                <div
                    class="bg-card text-card-foreground shadow-sm rounded-lg p-4 xl:p-2 xl:py-6 2xl:p-6  2xl:py-10 flex flex-col items-center 2xl:min-w-[168px]">
                    <div><span
                            class="h-12 w-12 rounded-full flex justify-center items-center bg-success/10"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="w-6 h-6 text-success">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5zM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 1 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15m.75 2.25a.75.75 0 1 0 0 1.5H12a.75.75 0 1 0 0-1.5z"
                                    clip-rule="evenodd"></path>
                                <path fill="currentColor"
                                    d="M12.971 1.816a5.23 5.23 0 0 1 1.28 3.434v1.875c0 .207.167.375.374.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.77 9.77 0 0 0-6.963-6.963">
                                </path>
                            </svg></span></div>
                    <div class="mt-4 text-center">
                        <div class="text-base font-medium text-default-600">{{ __('Completed Orders') }}
                        </div>
                        <div class="text-3xl font-semibold text-success mt-1">{{ $complete_month_count }}</div>

                    </div>
                </div>
                <div
                    class="bg-card text-card-foreground shadow-sm rounded-lg p-4 xl:p-2 xl:py-6 2xl:p-6  2xl:py-10 flex flex-col items-center 2xl:min-w-[168px]">
                    <div><span
                            class="h-12 w-12 rounded-full flex justify-center items-center bg-destructive/10"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="w-6 h-6 text-destructive">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5zM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 1 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15m.75 2.25a.75.75 0 1 0 0 1.5H12a.75.75 0 1 0 0-1.5z"
                                    clip-rule="evenodd"></path>
                                <path fill="currentColor"
                                    d="M12.971 1.816a5.23 5.23 0 0 1 1.28 3.434v1.875c0 .207.167.375.374.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.77 9.77 0 0 0-6.963-6.963">
                                </path>
                            </svg></span></div>
                    <div class="mt-4 text-center">
                        <div class="text-base font-medium text-default-600">{{ __('In progress') }}
                        </div>
                        <div class="text-3xl font-semibold text-destructive mt-1">{{ $in_progress_count }}</div>

                    </div>
                </div>
                <div
                    class="bg-card text-card-foreground shadow-sm rounded-lg p-4 xl:p-2 xl:py-6 2xl:p-6 2xl:py-10 flex flex-col items-center 2xl:min-w-[168px]">
                    <div><span
                            class="h-12 w-12 rounded-full flex justify-center items-center bg-info/10"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="w-6 h-6 text-info">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5zM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 1 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15m.75 2.25a.75.75 0 1 0 0 1.5H12a.75.75 0 1 0 0-1.5z"
                                    clip-rule="evenodd"></path>
                                <path fill="currentColor"
                                    d="M12.971 1.816a5.23 5.23 0 0 1 1.28 3.434v1.875c0 .207.167.375.374.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.77 9.77 0 0 0-6.963-6.963">
                                </path>
                            </svg></span></div>
                    <div class="mt-4 text-center">
                        <div class="text-base font-medium text-default-600">{{ __('Pending Invoice') }}
                        </div>
                        <div class="text-3xl font-semibold text-info mt-1">{{ $pending_invoice_count }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
