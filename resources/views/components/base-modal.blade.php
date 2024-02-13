<template x-teleport="body">
    <div class="fixed inset-0 flex justify-center items-center pointer-events-none" x-show="open" x-transition.opacity>
        <div class="w-screen h-screen bg-gray-900 bg-opacity-70 absolute inset-0 pointer-events-auto" @click="toggle()">
        </div>
        <div {{ $attributes->merge(['class' => 'bg-white p-6 rounded-lg z-10 pointer-events-auto']) }}
            x-show="open" x-transition.scale>
            {{ $slot }}
        </div>
    </div>
</template>
