{{-- Componente para dar de alta a un beneficiario --}}

<div class="ml-6">
  
    {{-- boton de alta beneficiario --}}
    <x-jet-danger-button wire:click="$set('open', true)">
        Nuevo Beneficiario
    </x-jet-danger-button>


    {{-- modal para registrar un nuevo beneficiario --}}
    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            Registrar nuevo beneficiario
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Contenido del post" />
                <x-jet-input type="text" class="w-full" /> 
            </div>

            <div class="mb-4">
                <x-jet-label value="Contenido del post" />
                <x-jet-input type="text" class="w-full" /> 
            </div>

        </x-slot>

        <x-slot name="footer">
        </x-slot>

    </x-jet-dialog-modal>

</div>
