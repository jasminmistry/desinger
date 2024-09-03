<x-app-layout>
    <div class="p-4 sm:p-8 bg-card shadow sm:rounded-lg">
        <div class="flex flex-wrap items-center gap-4 mb-1 border-b border-border ">
            <div class="flex-1">
                <h2 class="text-xl font-medium text-default-700 mb-2">{{ __('Patch Order') }}</h2>
            </div>
        </div>
        <div class="pt-2">
            <form method="POST" action="{{ route('patch.store') }}" enctype='multipart/form-data'>
                @csrf
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-3 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="email">
                            <x-input-label for="email" :value="__('Name Of The Order')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="name" class="" type="text" name="name" :value="old('name')"
                                required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="po">
                            <x-input-label for="po" :value="__('PO#')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="po" class="" type="text" name="po" :value="old('po')"
                                required autofocus />
                            <x-input-error :messages="$errors->get('po')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="placement">
                            <x-input-label for="placement" :value="__('Placement')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="placement" type="text" name="placement" :value="old('placement')" required
                                autofocus />
                            <x-input-error :messages="$errors->get('placement')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="width">
                            <x-input-label for="width" :value="__('Width')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="width" type="text" name="width" :value="old('width')" required
                                autofocus />
                            <x-input-error :messages="$errors->get('width')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="height">
                            <x-input-label for="height" :value="__('Height')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="height" type="text" name="height" :value="old('height')" required
                                autofocus />
                            <x-input-error :messages="$errors->get('height')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="unit">
                            <x-input-label for="unit" :value="__('Unit')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="unit" type="text" name="unit" :value="old('unit')" required
                                autofocus />
                            <x-input-error :messages="$errors->get('unit')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="no_of_colors">
                            <x-input-label for="no_of_colors" :value="__('Number Of Colors In Mind')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="no_of_colors" type="text" name="no_of_colors" :value="old('no_of_colors')"
                                required autofocus />
                            <x-input-error :messages="$errors->get('no_of_colors')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-3 flex flex-col gap-2">
                        <div class="dropzone border-none p-0">
                            <div class="hidden">
                                <input name="picture[]" type="file" id="picture" multiple />
                            </div>
                            <div
                                class="w-full text-center border-dashed border rounded-md py-[52px] flex items-center flex-col clickable: fileinput-button">
                                <div
                                    class="h-12 w-12 inline-flex rounded-md bg-muted items-center justify-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-default-500">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="17 8 12 3 7 8"></polyline>
                                        <line x1="12" x2="12" y1="3" y2="15"></line>
                                    </svg>
                                </div>
                                <h4 class="text-2xl font-medium mb-1 text-card-foreground/80">Drop files here or click
                                    to upload.</h4>
                                <div class="text-xs text-red-600">(Max 5 files are allowed.)</div>
                            </div>
                        </div>
                        <div id="previews"></div>
                        <div>
                            <div id="template"
                                class="dz-preview dz-file-preview flex justify-between border px-3.5 py-3 my-6 rounded-md">
                                <div class="flex space-x-3 items-center">
                                    <div class="file-preview"><img data-dz-thumbnail /></div>
                                    <div>
                                        <div class=" text-sm  text-card-foreground"><span data-dz-name></span></div>
                                        <div class=" text-xs font-light text-muted-foreground">
                                            <div class="dz-size" data-dz-size></div>
                                        </div>
                                    </div>
                                </div>
                                <button data-dz-remove class="btn btn-danger delete">
                                    <div class="dz-error-mark"><span>✘</span></div>
                                </button>
                            </div>
                        </div>

                        <div class="flex-1 w-full">
                            <x-input-error :messages="$errors->get('picture')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <x-primary-button>{{ __('Place Order') }}</x-primary-button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
