<x-layout>
    <form action="/contacts" method="post">
        @csrf
        <fieldset class="flex flex-col gap-4">
            <legend class="text-center w-full text-xl font-semibold mb-6">Add a New Contact</legend>
            <x-form-input label="Email" name="email" type="email" value="{{ old('email') }}" />
            <x-form-input label="First Name" name="first_name" type="text" value="{{ old('first_name') }}" />
            <x-form-input label="Last Name" name="last_name" type="text" value="{{ old('last_name') }}" />
            <x-form-input label="Phone" name="phone" type="text" value="{{ old('last_name') }}" />
            <div class="self-center flex items-center mt-4">
                <button class="w-min py-2 px-8 text-white rounded-lg shadow-md shadow-gray-500 bg-blue-500 border-blue-500
                               hover:bg-blue-700 hover:border-blue-700 hover:shadow-sm">Save</button>
                <a href="/contacts" class="py-2 px-8 font-semibold hover:opacity-50">Back</a>
            </div>
        </fieldset>
    </form>
</x-layout>
