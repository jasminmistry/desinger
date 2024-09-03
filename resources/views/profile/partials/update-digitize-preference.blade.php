<section>
    <header>
        <h2 class="text-lg font-medium text-default-900">
            {{ __('Digitizing Preference') }}
        </h2>
    </header>

    <div class="mt-2 grid grid-cols-2 gap-4">
        <div class="col-span-1  flex flex-col gap-2">
            <label
                class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                for="preferred_density">
                <x-input-label for="preferred_density" :value="__('Preferred Density')" />
            </label>
            <div class="flex-1 w-full">
                <x-text-input id="preferred_density" type="text" name="preferred_density" :value="old('preferred_density', $preference->preferred_density ?? '')" autofocus />
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
                <x-text-input id="preferred_trims" type="text" name="preferred_trims" :value="old('preferred_trims', $preference->preferred_trims ?? '')" autofocus />
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
                <x-text-input id="preferred_fabrics" type="text" name="preferred_fabrics" :value="old('preferred_fabrics', $preference->preferred_fabrics ?? '')"
                    autofocus />
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
                    :value="old('preferred_pull_settings', $preference->preferred_pull_settings ?? '')" autofocus />
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
                <x-text-input id="same_color_sew_our" type="text" name="same_color_sew_our" :value="old('same_color_sew_our', $preference->same_color_sew_our ?? '')"
                    autofocus />
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
                <x-text-input id="preferred_formats" type="text" name="preferred_formats" :value="old('preferred_formats', $preference->preferred_formats ?? '')"
                    autofocus />
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
                <x-text-input id="blending" type="text" name="blending" :value="old('blending', $preference->blending ?? '')" autofocus />
                <x-input-error :messages="$errors->get('blending')" class="mt-2" />
            </div>
        </div>
        <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
            <label
                class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                for="dgt_additional_instructions">
                <x-input-label for="dgt_additional_instructions" :value="__('Additional Instructions For Designer')" />
            </label>
            <div class="flex-1 w-full">
                <x-text-input id="dgt_additional_instructions" type="text" name="dgt_additional_instructions"
                    :value="old('dgt_additional_instructions', $preference->dgt_additional_instructions ?? '')" autofocus />
                <x-input-error :messages="$errors->get('dgt_additional_instructions')" class="mt-2" />
            </div>
        </div>
        <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
            <label
                class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                for="dgt_instructions">
                <x-input-label for="dgt_instructions" :value="__('Instructions About Your Logo')" />
            </label>
            <div class="flex-1 w-full">
                <x-text-input id="dgt_instructions" type="text" name="dgt_instructions" :value="old('dgt_instructions', $preference->dgt_instructions ?? '')" autofocus />
                <x-input-error :messages="$errors->get('dgt_instructions')" class="mt-2" />
            </div>
        </div>
    </div>

</section>
