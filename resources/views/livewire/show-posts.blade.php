<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{$search}}

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Table -->

        <x-table>

            <div class="px-6 py-4">
                <input type="text" wire:model="search">
            </div>

            <table class="table-auto w-full">
                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">ID</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Nombre</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Apellido</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Numero Doc</div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    
                    @foreach ($beneficiarios as $beneficiario)
                      
                    <tr>
                        <td class="p-2">
                            <div class="flex items-center">
                                <div class="font-medium text-gray-800">
                                    {{$beneficiario->id_beneficiarios}}
                                </div>
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="flex items-center">
                                <div class="font-medium text-gray-800">
                                    {{$beneficiario->nombre_benef}}
                                </div>
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="flex items-center">
                                <div class="font-medium text-gray-800">
                                    {{$beneficiario->apellido_benef}}
                                </div>
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="flex items-center">
                                <div class="font-medium text-gray-800">
                                    {{$beneficiario->numero_doc}}
                                </div>
                            </div>
                        </td>
                        
                    </tr>

                    @endforeach
                
                </tbody>
            </table>

        </x-table>

    </div>
</div>
