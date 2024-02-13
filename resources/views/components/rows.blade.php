@foreach ($contacts as $contact)
<tr class="{{ $loop->odd ? 'bg-slate-300' : 'bg-slate-200' }} htmx-swapping:opacity-0 transition-opacity duration-1000">
    <x-table-cell>
        <input type="checkbox" name="contact_ids[]" value="{{ $contact->id }}" x-model="selected"
            class="accent-black">
    </x-table-cell>
    <x-table-cell>{{ $contact->first_name }}</x-table-cell>
    <x-table-cell>{{ $contact->last_name }}</x-table-cell>
    <x-table-cell>{{ $contact->phone }}</x-table-cell>
    <x-table-cell>{{ $contact->email }}</x-table-cell>
    <x-table-cell>
        <div x-data="{ menuOpen: false, toggleMenu() { this.menuOpen = !this.menuOpen } }" class="relative">
            <button type="button" aria-haspopup="menu" aria-controls="contact-menu-{{ $contact->id }}" @click="toggleMenu()" @blur="menuOpen = false"
                class="font-semibold hover:opacity-50">
                Options
            </button>
            <x-popover-menu :contact="$contact"/>
        </div>
    </x-table-cell>
</tr>
@endforeach
@if (count($contacts) === 15)
<tr>
    <td colspan="5" style="text-align: center">
        <span hx-target="closest tr" hx-trigger="revealed" hx-swap="outerHTML" hx-select="tbody > tr"
            hx-get="/contacts?page={{ $page + 1 }}">
            Loading More
        </span>
    </td>
</tr>
@endif
