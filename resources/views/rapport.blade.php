<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rapports de Visite') }}
        </h2>
        
    </x-slot>

    <br>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                      <!-- Bouton permettant d'accéder à la vue 'nouveaurapport' -->
                      <button class="btn btn-ghost">
                        <a href="/nouveaurapport">Nouveau Rapport</a>
                      </button>

                      <!-- Tableau Affichage des Rapports -->
                      <div class="mt-6 ">
                        <table class="table-zebra w-full">
                            <thead class="bg-gray-500 dark:bg-gray-700">
                                <tr >
                                    <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left  text-white uppercase">
                                        Numéro
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left  text-white uppercase">
                                        Date
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left  text-white uppercase">
                                        Motif
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left  text-white uppercase">
                                        Bilan
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left  text-white uppercase">
                                        PDF
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rapports as $infoR)
                                <tr class="bg-white border-b">
                                    <td class="py-4 px-6 text-sm font-medium text-black whitespace-wrap">
                                        {{ $infoR->RAP_NUM }} <!-- Affiche le "NUMERO" du Rapport -->
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-600 whitespace-wrap">
                                        {{ $infoR->RAP_DATE }} <!-- Affiche "DATE + HEURE" du Rapport -->
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-600 whitespace-wrap">
                                        {{ $infoR->RAP_MOTIF }} <!-- Affiche le "MOTIF" du Rapport -->
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-black whitespace-wrap">
                                        {{ $infoR->RAP_BILAN }} <!-- Affiche le "BILAN" du Rapport -->
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-600 whitespace-wrap">
                                        <a href="/download-PDF/{{ $infoR->RAP_NUM }}" target="blank"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                          </svg></a> <!-- Affiche le "PDF" du Rapport -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>   
    </div>

  

<style>
.table-zebra tbody tr:nth-child(even) td{
background-color: rgb(220,220,220);
}
</style>
    <!-- This is an example component -->

</x-app-layout>
