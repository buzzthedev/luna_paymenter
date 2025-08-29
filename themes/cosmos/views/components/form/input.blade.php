@props(['name', 'label' => null, 'required' => false, 'divClass' => null, 'class' => null,'placeholder' => null, 'id' => null, 'type' => null, 'hideRequiredIndicator' => false, 'dirty' => false])
<fieldset class="flex flex-col relative mt-3 w-full {{ $divClass ?? '' }}">
    @if ($label)
    @endif
    <input type="{{ $type ?? 'text' }}" id="{{ $id ?? $name }}" name="{{ $name }}"
        class="block w-full text-sm text-base bg-background-secondary border border-neutral rounded-2xl shadow-sm focus:outline-none transition-all duration-300 ease-in-out disabled:bg-background-secondary/50 disabled:cursor-not-allowed {{ $class ?? '' }} @if ($type !== 'color') px-2.5 py-2 @endif"
        placeholder="{{ $placeholder ?? ($label ?? '') }}"
        @if ($dirty && isset($attributes['wire:model'])) wire:dirty.class="!border-yellow-600" @endif
        {{ $attributes->except(['placeholder', 'label', 'id', 'name', 'type', 'class', 'divClass', 'required', 'hideRequiredIndicator', 'dirty']) }} @required($required) />
    @error($name)
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
</fieldset>
