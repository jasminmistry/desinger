<div class="relative z-100 " aria-labelledby="modal-title" role="dialog" x-show="open" style="display: none;" aria-modal="true">
    <!--
      Background backdrop, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-100 w-screen overflow-y-auto">
      <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
        <!--
          Modal panel, show/hide based on modal state.

          Entering: "ease-out duration-300"
            From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            To: "opacity-100 translate-y-0 sm:scale-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100 translate-y-0 sm:scale-100"
            To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        -->
        <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl">
          <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
            <div class="">

              <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">{{ __('My Preferences optional fields') }}</h3>
                <div class="mt-2 grid grid-cols-2 gap-4">
                    <div class="col-span-1  flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="preferred_density">
                            <x-input-label for="preferred_density" :value="__('Preferred Density')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="preferred_density" type="text" name="preferred_density"
                                :value="old('preferred_density')" autofocus />
                            <x-input-error :messages="$errors->get('preferred_density')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-1  flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="preferred_trims">
                            <x-input-label for="preferred_trims" :value="__('Preferred Trims')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="preferred_trims" type="text" name="preferred_trims"
                                :value="old('preferred_trims')" autofocus />
                            <x-input-error :messages="$errors->get('preferred_trims')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="preferred_fabrics">
                            <x-input-label for="preferred_fabrics" :value="__('Preferred Fabrics')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="preferred_fabrics" type="text" name="preferred_fabrics"
                                :value="old('preferred_fabrics')" autofocus />
                            <x-input-error :messages="$errors->get('preferred_fabrics')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="preferred_pull_settings">
                            <x-input-label for="preferred_pull_settings" :value="__('Preferred Pull Settings')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="preferred_pull_settings" type="text" name="preferred_pull_settings"
                                :value="old('preferred_pull_settings')" autofocus />
                            <x-input-error :messages="$errors->get('preferred_pull_settings')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="same_color_sew_our">
                            <x-input-label for="same_color_sew_our" :value="__('Same Color Fabric of Sew Out')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="same_color_sew_our" type="text" name="same_color_sew_our"
                                :value="old('same_color_sew_our')" autofocus />
                            <x-input-error :messages="$errors->get('same_color_sew_our')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="preferred_formats">
                            <x-input-label for="preferred_formats" :value="__('Preferred Formats')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="preferred_formats" type="text" name="preferred_formats"
                                :value="old('preferred_formats')" autofocus />
                            <x-input-error :messages="$errors->get('preferred_formats')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="blending">
                            <x-input-label for="blending" :value="__('Blending')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="blending" type="text" name="blending" :value="old('blending')"
                                autofocus />
                            <x-input-error :messages="$errors->get('blending')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="additional_instructions">
                            <x-input-label for="additional_instructions" :value="__('Additional Instructions For Designer')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="additional_instructions" type="text" name="additional_instructions"
                                :value="old('additional_instructions')" autofocus />
                            <x-input-error :messages="$errors->get('additional_instructions')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
                        <label
                            class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                            for="instructions">
                            <x-input-label for="instructions" :value="__('Instructions About Your Logo')" />
                        </label>
                        <div class="flex-1 w-full">
                            <x-text-input id="instructions" type="text" name="instructions" :value="old('instructions')"
                                autofocus />
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
