<div class="space-y-6 py-6">
    <div class="flex items-center flex-wrap justify-between gap-4">
        <div class="text-2xl font-medium text-default-800">{{ __('Our Main Services') }}</div>
    </div>
    <div>
        <div class="p-0">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-6 gap-4">
                <div
                    class="flex flex-col gap-1.5 p-4 rounded-sm overflow-hidden items-start relative before:absolute before:left-1/2 before:-translate-x-1/2 before:bottom-1 before:h-[2px] before:w-9 before:bg-primary/50 dark:before:bg-primary-foreground before:hidden bg-primary/40 dark:bg-primary/70">
                    <span
                        class="h-[95px] w-[95px] rounded-full absolute -top-8 -right-8 ring-[20px] bg-primary/50 ring-primary/20 dark:bg-primary dark:ring-primary/40"></span>

                    <span
                        class="mt-3 text-sm text-default-500 text-primary-foreground font-medium capitalize relative z-10">
                        {{ __('Place Order') }}</span>
                    <a href="{{ route('digitizing.create') }}">
                        <div class="flex items-center gap-1"><span
                                class="text-lg font-semibold text-primary-foreground">{{ __('DIGITIZING ORDER') }}</span>
                        </div>
                    </a>
                </div>
                <div
                    class="flex flex-col gap-1.5 p-4 rounded-sm overflow-hidden items-start relative before:absolute before:left-1/2 before:-translate-x-1/2 before:bottom-1 before:h-[2px] before:w-9 before:bg-primary/50 dark:before:bg-primary-foreground before:hidden bg-primary/40 dark:bg-primary/70">
                    <span
                        class="h-[95px] w-[95px] rounded-full absolute -top-8 -right-8 ring-[20px] bg-primary/50 ring-primary/20 dark:bg-primary dark:ring-primary/40"></span>
                    <span
                        class="mt-3 text-sm text-default-700 text-primary-foreground font-medium capitalize relative z-10">
                        {{ __('Place Order') }}</span>
                    <a href="{{ route('digitizing.create', ['quote' => 1]) }}">
                        <div class="flex items-center gap-1"><span
                                class="text-lg font-semibold text-primary-foreground">{{ __('DIGITIZING QUOTES') }}</span>
                        </div>
                    </a>
                </div>
                <div
                    class="flex flex-col gap-1.5 p-4 rounded-sm overflow-hidden items-start relative before:absolute before:left-1/2 before:-translate-x-1/2 before:bottom-1 before:h-[2px] before:w-9 before:bg-primary/50 dark:before:bg-primary-foreground before:hidden bg-primary/40 dark:bg-primary/70">
                    <span
                        class="h-[95px] w-[95px] rounded-full absolute -top-8 -right-8 ring-[20px] bg-primary/50 ring-primary/20 dark:bg-primary dark:ring-primary/40"></span>
                    <span
                        class="mt-3 text-sm text-default-700 text-primary-foreground font-medium capitalize relative z-10">
                        {{ __('Place Order') }}</span>
                    <a href="{{ route('vector.create') }}">
                        <div class="flex items-center gap-1"><span
                                class="text-lg font-semibold text-primary-foreground">{{ __('VECTOR ORDER') }}</span>
                        </div>
                    </a>
                </div>
                <div
                    class="flex flex-col gap-1.5 p-4 rounded-sm overflow-hidden items-start relative before:absolute before:left-1/2 before:-translate-x-1/2 before:bottom-1 before:h-[2px] before:w-9 before:bg-primary/50 dark:before:bg-primary-foreground before:hidden bg-primary/40 dark:bg-primary/70">
                    <span
                        class="h-[95px] w-[95px] rounded-full absolute -top-8 -right-8 ring-[20px] bg-primary/50 ring-primary/20 dark:bg-primary dark:ring-primary/40"></span>
                    <span
                        class="mt-3 text-sm text-default-700 text-primary-foreground font-medium capitalize relative z-10">
                        {{ __('Place Order') }}</span>
                    <a href="{{ route('vector.create', ['quote' => 1]) }}">
                        <div class="flex items-center gap-1"><span
                                class="text-lg font-semibold text-primary-foreground">{{ __('VECTOR QUOTES') }}</span>
                        </div>
                    </a>
                </div>
                <div
                    class="flex flex-col gap-1.5 p-4 rounded-sm overflow-hidden items-start relative before:absolute before:left-1/2 before:-translate-x-1/2 before:bottom-1 before:h-[2px] before:w-9 before:bg-primary/50 dark:before:bg-primary-foreground before:hidden bg-primary/40 dark:bg-primary/70">
                    <span
                        class="h-[95px] w-[95px] rounded-full absolute -top-8 -right-8 ring-[20px] bg-primary/50 ring-primary/20 dark:bg-primary dark:ring-primary/40"></span>
                    <span
                        class="mt-3 text-sm text-default-700 text-primary-foreground font-medium capitalize relative z-10">
                        {{ __('Place Order') }}</span>
                    <a href="{{ route('patch.create') }}">
                        <div class="flex items-center gap-1"><span
                                class="text-lg font-semibold text-default-900  text-primary-foreground">{{ __('PATCH ORDER') }}</span>
                        </div>
                    </a>
                </div>
                <div
                    class="flex flex-col gap-1.5 p-4 rounded-sm overflow-hidden items-start relative before:absolute before:left-1/2 before:-translate-x-1/2 before:bottom-1 before:h-[2px] before:w-9 before:bg-primary/50 dark:before:bg-primary-foreground before:hidden bg-primary/40 dark:bg-primary/70">
                    <span
                        class="h-[95px] w-[95px] rounded-full absolute -top-8 -right-8 ring-[20px] bg-primary/50 ring-primary/20 dark:bg-primary dark:ring-primary/40"></span>

                    <span
                        class="mt-3 text-sm text-default-700 text-primary-foreground font-medium capitalize relative z-10">
                        {{ __('Place Order') }}</span>
                    <a href="{{ route('other-service.create') }}">
                        <div class="flex items-center gap-1"><span
                                class="text-lg font-semibold text-default-900  text-primary-foreground">{{ __('OTHER SERVICES ORDER') }}</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
