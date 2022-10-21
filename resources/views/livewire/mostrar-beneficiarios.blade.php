<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



        <!-- Table -->

        <x-table>

            <div class="px-6 py-4 flex items-center">           
                <x-jet-input class="flex-1 mr-3" placeholder="Escriba lo que desea buscar" type="text" wire:model="search" />          
               @livewire('crear-beneficiario')
            </div>

            @if ($beneficiarios->count())

                <table class="min-w-min w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="cursor-pointer py-3 px-6 text-left"
                                wire:click="order('id_beneficiarios')">
                                ID
                                {{-- sort --}}
                                @if ($sort == 'id_beneficiarios')

                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt fa-pull-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt fa-pull-right mt-1"></i>
                                    @endif
                                
                                @else
                                    <i class="fas fa-sort fa-pull-right mt-1"></i>    
                                @endif   
                            </th>
                            <th class="cursor-pointer py-3 px-6 text-left"
                                wire:click="order('clave_beneficiario')">
                                Clave Beneficiario
                                {{-- sort --}}
                                @if ($sort == 'clave_beneficiario')

                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt fa-pull-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt fa-pull-right mt-1"></i>
                                    @endif
                                
                                @else
                                    <i class="fas fa-sort fa-pull-right mt-1"></i>    
                                @endif
                            </th>
                            <th class="cursor-pointer py-3 px-6 text-left"
                                wire:click="order('clase_documento_benef')">
                                Clase Doc
                                {{-- sort --}}
                                @if ($sort == 'clase_documento_benef')

                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt fa-pull-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt fa-pull-right mt-1"></i>
                                    @endif
                                
                                @else
                                    <i class="fas fa-sort fa-pull-right mt-1"></i>    
                                @endif
                            </th>
                            <th class="cursor-pointer py-3 px-6 text-left"
                                wire:click="order('numero_doc')">
                                Documento
                                {{-- sort --}}
                                @if ($sort == 'numero_doc')

                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt fa-pull-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt fa-pull-right mt-1"></i>
                                    @endif
                                
                                @else
                                    <i class="fas fa-sort fa-pull-right mt-1"></i>    
                                @endif
                            </th>
                            <th class="cursor-pointer py-3 px-6 text-left"
                                wire:click="order('apellido_benef')">
                                Apellidos
                                {{-- sort --}}
                                @if ($sort == 'apellido_benef')

                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt fa-pull-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt fa-pull-right mt-1"></i>
                                    @endif
                                
                                @else
                                    <i class="fas fa-sort fa-pull-right mt-1"></i>    
                                @endif
                            </th>
                            <th class="cursor-pointer py-3 px-6 text-left"
                                wire:click="order('nombre_benef')">
                                Nombres
                                {{-- sort --}}
                                @if ($sort == 'nombre_benef')

                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt fa-pull-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt fa-pull-right mt-1"></i>
                                    @endif
                                
                                @else
                                    <i class="fas fa-sort fa-pull-right mt-1"></i>    
                                @endif
                            </th>
                            <th class="cursor-pointer py-3 px-6 text-left"
                                wire:click="order('cuie_ea')">
                                Efector
                                {{-- sort --}}
                                @if ($sort == 'cuie_ea')

                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt fa-pull-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt fa-pull-right mt-1"></i>
                                    @endif
                                
                                @else
                                    <i class="fas fa-sort fa-pull-right mt-1"></i>    
                                @endif
                            </th>
                            <th class="cursor-pointer py-3 px-6 text-left"
                                wire:click="order('fecha_inscripcion')">
                                Fecha Insc
                                {{-- sort --}}
                                @if ($sort == 'fecha_inscripcion')

                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt fa-pull-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt fa-pull-right mt-1"></i>
                                    @endif
                                
                                @else
                                    <i class="fas fa-sort fa-pull-right mt-1"></i>    
                                @endif
                            </th>
                            <th class="cursor-pointer py-3 px-6 text-left"
                                wire:click="order('fecha_nacimiento_benef')">
                                Fecha Nac
                                {{-- sort --}}
                                @if ($sort == 'fecha_nacimiento_benef')

                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt fa-pull-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt fa-pull-right mt-1"></i>
                                    @endif
                                
                                @else
                                    <i class="fas fa-sort fa-pull-right mt-1"></i>    
                                @endif
                            </th>
                            <th class="cursor-pointer py-3 px-6 text-left"
                                wire:click="order('usuario_carga')">
                                Usuario
                                {{-- sort --}}
                                @if ($sort == 'usuario_carga')

                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt fa-pull-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt fa-pull-right mt-1"></i>
                                    @endif
                                
                                @else
                                    <i class="fas fa-sort fa-pull-right mt-1"></i>    
                                @endif
                            </th>
                            <th class="cursor-pointer py-3 px-6 text-left">
                                Cert
                            </th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-600 text-sm font-light">

                        @foreach ($beneficiarios as $beneficiario)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">

                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{ $beneficiario->id_beneficiarios }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{ $beneficiario->clave_beneficiario }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{ $beneficiario->clase_documento_benef }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{ $beneficiario->numero_doc }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{ $beneficiario->apellido_benef }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{ $beneficiario->nombre_benef }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{ $beneficiario->cuie_ea }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{ date('d-n-Y', strtotime($beneficiario->fecha_inscripcion)) }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{ date('d-n-Y', strtotime($beneficiario->fecha_nacimiento_benef)) }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{ $beneficiario->usuario_carga }}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        cert
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            @else
                <div class="px-6 py-4">
                    No existen registos coincidentes
                </div>
            @endif

        </x-table>

    </div>

</div>
