<div x-show="menuOpen" x-cloak x-data="{open: false, toggle() { this.open = !this.open }}" x-transition class="bg-white absolute rounded-lg z-10 left-full -top-13 text-sm py-2 px-4 divide-y
    divide-gray-500 items-center flex flex-col text-center shadow-md shadow-gray-500">
    <a href="/contacts/{{ $contact->id }}/edit" class="py-2 w-full hover:opacity-50 font-semibold">Edit</a>
    <a href="/contacts/{{ $contact->id }}" class="py-2 w-full hover:opacity-50 font-semibold">View</a>
    @csrf
    <button type="button" id="menu-del-{{ $contact->id }}" hx-delete="/contacts/{{ $contact->id }}" hx-swap="outerHTML swap:1s"
        @click="open = true" hx-trigger="confirmed" hx-target="closest tr"
        class="py-2 w-full hover:opacity-50 font-semibold text-red-500">Delete</button>
    <x-delete-modal :contact="$contact" target="menu-del-{{ $contact->id }}" />
</div>
