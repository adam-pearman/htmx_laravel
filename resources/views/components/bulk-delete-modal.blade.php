<x-base-modal class="flex flex-col gap-4 text-center max-w-96">
    <h3 class="text-2xl font-semibold capitalize">
        Delete
        <slot x-text="selected.length + (selected.length === 1 ? ' {{ $entity }}' : ' {{ $entity }}s')"></slot>
    </h3>
    <p>
        Are you sure you want to delete <span
            x-text="selected.length === 1 ? 'this {{ $entity }}' : 'these {{$entity}}s'"></span>? This
        action cannot be undone.
    </p>
    <div class="mt-4">
        <button type="button" class="bg-red-500 border border-red-500 text-white p-2 w-24 rounded-lg
            shadow-md shadow-gray-500 hover:bg-red-700 hover:border-red-700 hover:shadow-sm" @click="() => {
                htmx.trigger('#{{ $target }}', 'confirmed')
                toggle()
            }">Delete
        </button>
        <button type="button" class="p-2 w-24 font-semibold hover:opacity-50" @click="toggle()">Cancel</button>
    </div>
</x-base-modal>
