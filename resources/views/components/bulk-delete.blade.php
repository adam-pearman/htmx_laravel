<div class="flex flex-col gap-2 font-semibold pb-6" x-show="selected.length > 0" x-cloak x-data="{
                 open: false,
                 toggle() { this.open = !this.open },
                 }">
    <slot x-text="selected.length"></slot>
    contracts selected
    <div>
        <button type="button" id="bulk-del-btn" hx-delete="/contacts" @click="toggle()" hx-trigger="confirmed"
            hx-target="body" class="bg-red-500 border border-red-500 text-white p-2 w-24 rounded-lg
                                    shadow-md shadow-gray-500 hover:bg-red-700 hover:border-red-700 hover:shadow-sm">
            Delete
        </button>
        <button type="button" class="p-2 w-24 font-semibold hover:opacity-50" @click="selected = []">Cancel</button>
    </div>
    <x-bulk-delete-modal entity="contact" target="bulk-del-btn" />
</div>
