@props(['name', 'checked' => false])

<input 
    type="checkbox" 
    name="{{ $name }}" 
    {{ $checked ? 'checked' : '' }} 
    {!! $attributes->merge(['class' => 'rounded border-gray-300 text-orange-600 shadow-sm focus:ring-orange-500']) !!}>
