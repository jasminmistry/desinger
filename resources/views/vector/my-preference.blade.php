<div class="relative z-100 " aria-labelledby="modal-title" role="dialog" x-show="open" style="display: none;" aria-modal="true">

    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-100 w-screen overflow-y-auto">
      <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
        <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl">
          <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
            <div class="">

              <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">{{ __('My Preferences optional fields') }}</h3>
                <div class="mt-2 grid grid-cols-2 gap-4">
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="underbase">
                            <x-input-label for="underbase" :value="__('Underbase')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="underbase" type="text" name="underbase"
                                :value="old('underbase')" required autofocus />
                            <x-input-error :messages="$errors->get('underbase')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="vector_detail_work">
                            <x-input-label for="vector_detail_work" :value="__('Vector Super Detailed Work')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="vector_detail_work" type="text" name="vector_detail_work"
                                :value="old('vector_detail_work')" required autofocus />
                            <x-input-error :messages="$errors->get('vector_detail_work')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="vector_file_format">
                            <x-input-label for="vector_file_format" :value="__('Vector File Format')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="vector_file_format" type="text" name="vector_file_format"
                                :value="old('vector_file_format')" required autofocus />
                            <x-input-error :messages="$errors->get('vector_file_format')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="vector_printing_process">
                            <x-input-label for="vector_printing_process" :value="__('Vector Printing Process List')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="vector_printing_process" type="text" name="vector_printing_process"
                                :value="old('vector_printing_process')" required autofocus />
                            <x-input-error :messages="$errors->get('vector_printing_process')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="vector_color_list">
                            <x-input-label for="vector_color_list" :value="__('Vector Color List')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="vector_color_list" type="text" name="vector_color_list"
                                :value="old('vector_color_list')" required autofocus />
                            <x-input-error :messages="$errors->get('vector_color_list')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="vector_separation">
                            <x-input-label for="vector_separation" :value="__('Vector Always Want Separations')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="vector_separation" type="text" name="vector_separation"
                                :value="old('vector_separation')" required autofocus />
                            <x-input-error :messages="$errors->get('vector_separation')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="additional_instruction">
                            <x-input-label for="additional_instruction" :value="__('Additional Instructions For Designer')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="additional_instruction" type="text" name="additional_instruction" :value="old('additional_instruction')" required
                                autofocus />
                            <x-input-error :messages="$errors->get('additional_instruction')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="instructions">
                            <x-input-label for="instructions" :value="__('Instructions')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="instructions" type="text" name="instructions"
                                :value="old('instructions')" required autofocus />
                            <x-input-error :messages="$errors->get('instructions')" class="mt-2" />
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
            <x-secondary-button @click="open=!open">{{ __("Save")}}</x-secondary-button>
          </div>
        </div>
      </div>
    </div>
  </div>
