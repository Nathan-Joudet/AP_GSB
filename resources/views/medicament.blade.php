<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Page Médicaments') }}
        </h2>
    </x-slot>


    @include('searchM') <!-- Ctrl + Espace -->
   
      <div class="m-4">
                    <table class="table-zebra">
                        <thead class="bg-green-500 dark:bg-gray-700">
                            <tr >
                                <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left  text-white uppercase">
                                    Depot
                                </th>
                                <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase">
                                    Nom Commercial
                                </th>
                                <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase">
                                    Code
                                </th>
                                <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase">
                                    Composition
                                </th>
                                <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase">
                                    Effets
                                </th>
                                <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase">
                                    Contre indication
                                </th>
                                <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase">
                                    Prix Echantillon
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($medicaments as $infoM)
                            <!-- Product 1 -->
                            <tr class="bg-white border-b">
                                <td class="py-4 px-6 text-sm font-medium text-black whitespace-wrap">
                                    {{ $infoM->MED_DEPOTLEGAL }}
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-600 whitespace-wrap"> <!-- "wrap" => retour à la ligne -->
                                    {{ $infoM->MED_NOMCOMMERCIAL }}
                                </td>
                                <td class="py-4 px-6 text-sm text-black whitespace-wrap">
                                    {{ $infoM->FAM_CODE }}
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-600 whitespace-wrap">
                                    {{ $infoM->MED_COMPOSITION }}
                                </td>
                                <td class="py-4 px-6 text-sm text-black whitespace-wrap">
                                    {{ $infoM->MED_EFFETS }}
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-600 whitespace-wrap">
                                    {{ $infoM->MED_CONTREINDIC }}
                                </td>
                                <td class="py-4 px-6 text-sm text-black whitespace-wrap">
                                    {{ $infoM->MED_PRIXECHANTILLON }}
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
    </div>

    <style>
        .table-zebra tbody tr:nth-child(even) td{
           background-color: rgb(189, 250, 174);
       }
   </style>
    </x-app-layout>
