<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('INICIO') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex items-center justify-center">
                <img class="logo mt-4 mb-4" src="/images/acepro-logo.png" width="300px" alt="ACEPRO" width="600px">
            </div>
        </div>
    </div>
</x-app-layout>
