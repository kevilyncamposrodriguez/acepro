<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('SEMINARIOS') }}
    </h2>
</x-slot>
<div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-12 gap-6 bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
            <!-- Name -->
            <div class="col-span-12 sm:col-span-4">
                <x-label for="name" value="{{ __('Nombre del seminario') }}" />
                <x-input id="name" type="text" class="mt-1 block w-full" wire:model="name" />
                <x-input-error for="name" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="col-span-12 sm:col-span-4">
                <x-label for="description" value="{{ __('Descripcion') }}" />
                <x-input id="description" type="email" class="mt-1 block w-full" wire:model="description" />
                <x-input-error for="description" class="mt-2" />
            </div>
            <div class="col-span-12 sm:col-span-4">
                <x-label for="seminar_image" value="{{ __('Imagen de publicidad (370X470)') }}" />
                <x-input id="seminar_image" type="file" accept="image/png,image/jpeg,image/jpg" class="mt-1 block w-full 'border-gray-300 focus:border-purple-950 focus:ring-purple-500 rounded-md shadow-sm'" wire:model="seminar_image" />
                <x-input-error for="seminar_image" class="mt-2" />
            </div>
            <div class="col-span-12 sm:col-span-4">
                <x-label for="start_date" value="{{ __('Inicio de Matricula') }}" />
                <x-input id="start_date" type="date" class="mt-1 block w-full" wire:model="start_date" />
                <x-input-error for="start_date" class="mt-2" />
            </div>
            <div class="col-span-12 sm:col-span-4">
                <x-label for="end_date" value="{{ __('Fin de Matricula') }}" />
                <x-input id="end_date" type="date" class="mt-1 block w-full" wire:model="end_date" />
                <x-input-error for="end_date" class="mt-2" />
            </div>
            <div class="col-span-12 sm:col-span-4">
                <x-label for="class_date" value="{{ __('Inicio de clases') }}" />
                <x-input id="class_date" type="date" class="mt-1 block w-full" wire:model="class_date" />
                <x-input-error for="class_date" class="mt-2" />
            </div>
            <br>
            <div class="flex justify-end col-span-12 sm:col-span-12">
                @if($update)
                <x-secondary-button wire:click.prevent="cleanInputs()" class="mr-2" wire:loading.attr="disabled" wire:loading.class="disabled:opacity-50">
                    {{ __('Cancelar') }}
                </x-secondary-button>
                <x-button wire:click.prevent="update()" wire:loading.attr="disabled" wire:loading.class="disabled:opacity-50">
                    {{ __('Actualizar') }}
                </x-button>
                @else
                <x-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:loading.class="disabled:opacity-50">
                    {{ __('Guardar') }}
                </x-button>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
            @livewire('seminar.seminars-table')
        </div>
    </div>
</div>