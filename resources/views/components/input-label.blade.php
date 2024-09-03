@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-default-700']) }}>
    {{ $value ?? $slot }}
</label>
