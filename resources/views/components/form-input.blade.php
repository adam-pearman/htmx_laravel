<div {{ $attributes->merge(['class' => 'grid grid-cols-[120px,minmax(0,1fr)] justify-between items-center gap-2']) }}>
    <label for="{{ $name }}">{{ $label }}:</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}" class="border border-black bg-slate-100 rounded-lg p-2 shadow-inner
            shadow-gray-400 focus:outline-none">
    @error($name)
    <span class="text-sm text-red-500 col-start-2">{{ $message }}</span>
    @enderror
</div>
