<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Table -->

        {{ $search }}

        <x-table>

            <div class="px-6 py-4">
                <input type="text" wire:model="search">
            </div>

            <table class="min-w-max w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Nombres</th>
                        <th class="py-3 px-6 text-left">Apellidos</th>
                        <th class="py-3 px-6 text-left">Numero Doc</th>
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
                                    {{ $beneficiario->nombre_benef }}
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    {{ $beneficiario->apellido_benef }}
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    {{ $beneficiario->numero_doc }}
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

        </x-table>

    </div>

</div>
