<div class="mb-6">
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value=""
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        {{ $attributes->merge(['required' => true]) }}
    />
    @error($name)
        <span class="text-red-600 text-sm">{{ $message }}</span>
    @enderror
</div>
