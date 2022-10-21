{{-- Componente para dar de alta a un beneficiario --}}

<div class="ml-6">
  
    {{-- boton de alta beneficiario --}}
    <x-jet-danger-button wire:click="$set('open', true)">
        Nuevo Beneficiario
    </x-jet-danger-button>


    {{-- modal para registrar un nuevo beneficiario --}}
    <x-jet-dialog-modal wire:model="open">

        {{-- Titulo del modal --}}
        <x-slot name="title">
            <div class="mx-auto w-full max-w-[550px]">
                Registrar nuevo beneficiario
            </div>    
        </x-slot>
            
        <x-slot name="content">

            {{-- Numero de Documento --}}
            <div class="mx-auto w-full max-w-[550px]">    
                <div class="mb-5">
                    <x-jet-label value="Numero de Documento" />
                    <x-jet-input type="text" class="w-full" wire:model.defer="numero_doc" />
                </div>
            </div>
            
            {{-- Clase y Tipo de documento --}}
            <div class="mx-auto w-full max-w-[550px]">     
                <div class="-mx-3 flex flex-wrap">                
                    <div class="w-full px-3 sm:w-1/3">
                        <div class="mb-5">
                            <x-jet-label value="Clase Documento" />
                            <select class="form-control w-full" wire:model.defer="clase_documento_benef">
                                <option value="P">Propio</option>
                                <option value="A">Ajeno</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-2/3">
                        <div class="mb-5">
                            <x-jet-label value="Tipo Documento" />
                            <select class="form-control w-full" wire:model.defer="tipo_documento">
                                <option value="DNI">Documento Nacional de Identidad</option>
			                    <option value="CM">Certificado Migratorio</option>
			                    <option value="DEX">Documento Extranjero</option>
                            </select>
                        </div>
                    </div>  
                </div>
            </div>

            {{-- Apellidos y Nombres --}}
            <div class="mx-auto w-full max-w-[550px]">     
                <div class="-mx-3 flex flex-wrap">               
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <x-jet-label value="Apellidos" />
                            <x-jet-input type="text" class="w-full" wire:model.defer="apellido_benef" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <x-jet-label value="Nombres" />
                            <x-jet-input type="text" class="w-full" wire:model.defer="nombre_benef" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mail y Celular --}}
            <div class="mx-auto w-full max-w-[550px]">     
                <div class="-mx-3 flex flex-wrap">               
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <x-jet-label value="Mail" />
                            <x-jet-input type="text"  class="w-full" wire:model.defer="mail" /> 
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <x-jet-label value="Celular" />
                            <x-jet-input type="text" class="w-full" wire:model.defer="celular" /> 
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sexo y Fecha de nacimiento --}}
            <div class="mx-auto w-full max-w-[550px]">     
                <div class="-mx-3 flex flex-wrap">               
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <x-jet-label value="Sexo" />
                            <select class="form-control w-full" wire:model.defer="sexo">
                                <option value="">Seleccione</option>
			                    <option value="F">Femenino</option>
			                    <option value="M">Masculino</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <x-jet-label value="Fecha de Nacimiento" />
                            <x-jet-input type="date" class="w-full" wire:model.defer="fecha_nacimiento_benef" />
                        </div>
                    </div>
                </div>
            </div>

            {{-- Pais de Nacimiento --}}
            <div class="mx-auto w-full max-w-[550px]">     
                <div class="-mx-3 flex flex-wrap">               
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <x-jet-label value="Pais de Nacimiento" />
                            <select class="form-control w-full" wire:model.defer="pais_nac">
                                <option value="">Seleccione Pais</option>
                                @foreach ($paices as $pais)
                                    <option value="{{$pais->nombre}}">{{$pais->nombre}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Observaciones --}}
            <div class="mx-auto w-full max-w-[550px]">    
                <div class="mb-5">
                    <x-jet-label value="Observaciones" />
                    <textarea wire:model.defer="observaciones" class="form-control w-full" rows="3"></textarea>
                </div>
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
