<section>
    <header>
        <h2 class="text-lg font-medium text-default-900">
            {{ __('Vector Preference') }}
        </h2>
    </header>

    <div class="mt-2 grid grid-cols-2 gap-4">
        <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
            <label
                class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                for="underbase">
                <x-input-label for="underbase" :value="__('Underbase')" />
            </label>
            <div class="flex-1 w-full">
                <x-text-input id="underbase" type="text" name="underbase"
                    :value="old('underbase', $preference->underbase ?? '')" required autofocus />
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
                    :value="old('vector_detail_work', $preference->vector_detail_work ?? '')" required autofocus />
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
                    :value="old('vector_file_format', $preference->vector_file_format ?? '')" required autofocus />
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
                    :value="old('vector_printing_process', $preference->vector_printing_process ?? '')" required autofocus />
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
                    :value="old('vector_color_list', $preference->vector_color_list ?? '')" required autofocus />
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
                    :value="old('vector_separation', $preference->vector_separation ?? '')" required autofocus />
                <x-input-error :messages="$errors->get('vector_separation')" class="mt-2" />
            </div>
        </div>
        <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
            <label
                class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                for="vc_additional_instruction">
                <x-input-label for="vc_additional_instruction" :value="__('Additional Instructions For Designer')" />
            </label>
            <div class="flex-1 w-full">
                <x-text-input id="vc_additional_instruction" type="text" name="vc_additional_instruction" :value="old('vc_additional_instruction', $preference->vc_additional_instruction ?? '')" required
                    autofocus />
                <x-input-error :messages="$errors->get('vc_additional_instruction')" class="mt-2" />
            </div>
        </div>
        <div class="col-span-2 lg:col-span-1 flex flex-col gap-2">
            <label
                class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-50 inline-block mb-2 font-medium text-default-600"
                for="vc_instructions">
                <x-input-label for="vc_instructions" :value="__('Instructions')" />
            </label>
            <div class="flex-1 w-full">
                <x-text-input id="vc_instructions" type="text" name="vc_instructions"
                    :value="old('vc_instructions', $preference->vc_instructions ?? '')" required autofocus />
                <x-input-error :messages="$errors->get('vc_instructions')" class="mt-2" />
            </div>
        </div>
    </div>

</section>
