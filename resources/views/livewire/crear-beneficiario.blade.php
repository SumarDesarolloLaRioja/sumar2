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
                <x-jet-label value="Numero Documento" />
                <x-jet-input type="text" wire:model.defer="num_doc" class="w-full" /> 
            </div>
            <div class="mb-4">
                <x-jet-label value="Clase Documento" />
                <x-jet-input type="text" wire:model.defer="clase_doc" class="w-full" /> 
            </div>
            <div class="mb-4">
                <x-jet-label value="Tipo Documento" />
                <x-jet-input type="text" wire:model.defer="tipo_doc" class="w-full" /> 
            </div>
            <div class="mb-4">
                <x-jet-label value="Apellidos" />
                <x-jet-input type="text" wire:model.defer="apellido" class="w-full" /> 
            </div>
            <div class="mb-4">
                <x-jet-label value="Nombres" />
                <x-jet-input type="text" wire:model.defer="nombre" class="w-full" /> 
            </div>
            <div class="mb-4">
                <x-jet-label value="Mail" />
                <x-jet-input type="text" wire:model.defer="mail" class="w-full" /> 
            </div>
            <div class="mb-4">
                <x-jet-label value="Celular" />
                <x-jet-input type="text" wire:model.defer="celular" class="w-full" /> 
            </div>
            <div class="mb-4">
                <x-jet-label value="Observaciones" />
                <textarea wire:model.defer="observaciones" class="form-control w-full" rows="6"></textarea> 
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button class="mr-4" wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save">
                Guardar
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>
