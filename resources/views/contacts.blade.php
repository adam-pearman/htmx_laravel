<x-layout>
    <form action="/contacts" method="get" class="flex pt-2 items-center justify-between w-full">
        <div class="relative pr-8">
            <input type="search" name="search" id="search" placeholder="Search Contacts" value="{{ $search }}"
                hx-get="/contacts" hx-trigger="search, keyup delay:200ms changed" hx-target="tbody" hx-push-url="true"
                hx-indicator="#spinner"
                class="border border-black bg-slate-100 placeholder-gray-500 rounded-lg p-2 w-64 shadow-inner shadow-gray-400 focus:outline-none" />
            <div class="absolute right-0 inset-y-0 flex flex-col justify-center">
                <x-icons.loading-icon id="spinner" class="htmx-indicator w-6 h-6 shrink-0" />
            </div>
        </div>
        <a href="/contacts/new" class="p-2 bg-blue-500 border-blue-500 rounded-lg shadow-md shadow-gray-500
                text-white hover:bg-blue-700 hover:border-blue-700 hover:shadow-sm">
            Add Contact
        </a>
        </div>
    </form>
    <form x-data="{ selected: [] }" class="w-full">
        <x-bulk-delete />
        <table class="border-b border-gray-500">
            <thead class="border-b border-gray-500">
                <tr>
                    <x-table-header></x-table-header>
                    <x-table-header class="w-1/6">First Name</x-table-header>
                    <x-table-header class="w-1/6">Last Name</x-table-header>
                    <x-table-header class="w-2/6">Phone</x-table-header>
                    <x-table-header class="w-2/6">Email</x-table-header>
                    <x-table-header></x-table-header>
                </tr>
            </thead>
            <tbody>
                <x-rows :contacts="$contacts" :page="$page" />
            </tbody>
        </table>
    </form>
    <span id="contact-count" hx-get="/contacts/count" hx-trigger="revealed" class="self-end">
        <x-icons.loading-icon class="h-6 w-6" />
    </span>
</x-layout>
