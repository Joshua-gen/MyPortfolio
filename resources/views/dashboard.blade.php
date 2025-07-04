<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex space-between w-full">
            <livewire:skills/>
            <livewire:project/>
        </div>
    </div>
</x-app-layout>
