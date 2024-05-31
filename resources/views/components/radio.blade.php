@props(['name' => 'checkbox', 'value' => '48', 'checked' => '', 'title' => ''])

<div class="flex items-center gap-x-3">
    <input id="push-{{ $name }}" name="{{ $name }}" value="{{ $value }}" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" {{ $checked }}>
    <label for="push-{{ $name }}" class="block text-sm font-medium leading-6 text-gray-900">{{ $title }}</label>
</div>
