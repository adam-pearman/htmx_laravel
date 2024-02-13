<x-layout>
    <h3 class="font-semibold text-xl">{{$contact->first_name}} {{$contact->last_name}}</h3>
    <div class="space-y-4 max-w-72 w-full">
        <div class="flex justify-between">
            <span>Phone:</span>
            <span class="font-semibold">{{$contact->phone}}</span>
        </div>
        <div class="flex justify-between">
            <span>Email:</span>
            <span class="font-semibold">{{$contact->email}}</span>
        </div>
    </div>
    <div class="flex mt-4 bg-slate-200 border border-slate-500 py-2 divide-x divide-black" x-data="{
            open: false,
            toggle() { this.open = !this.open },
        }">
        <a href="/contacts/{{ $contact->id }}/edit" class="text-blue-700 font-semibold hover:opacity-50 px-2">Edit</a>
        <button type="button" id="del-btn-{{ $contact->id }}" hx-delete="/contacts/{{ $contact->id }}" @click="toggle()"
            hx-trigger="confirmed" hx-headers='{ "X-CSRF-TOKEN": "{{ csrf_token() }}" }' hx-target="body"
            hx-push-url="true" class="px-2 w-full hover:opacity-50 font-semibold text-red-500">
            Delete
        </button>
        <a href="/contacts" class="font-semibold hover:opacity-50 px-2">Back</a>
        <x-delete-modal :contact="$contact" target="del-btn-{{ $contact->id }}" />
    </div>
</x-layout>
