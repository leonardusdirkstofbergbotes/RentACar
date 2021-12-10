<div class="relative">
    <label class="text-gray-600 text-sm font-bold pl-1">
        {{ $slot }}
        @if ($required) 
            <span class="text-red-400">*</span>
        @endif
    </label>
    <div class="border-gray-300 border rounded-md py-2 px-3 bg-white flex space-x-3 items-center">
        <i class="{{ $icon }} text-gray-500"></i>
        <input {{ $attributes->merge(['class' => 'w-full outline-none focus:outline-none', 'type' => 'text']) }}>
        @error ($fieldName) 
            <span class="text-red-400 text-sm absolute -bottom-5 right-0">{{ $message }}</span>
        @enderror
    </div>
</div>