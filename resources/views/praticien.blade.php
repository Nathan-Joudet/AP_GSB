<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Page Praticiens') }}
    </h2>
</x-slot>



@include('searchP') <!-- Permet d'afficher la vue 'searchP' -->

    <!-- Tableau Affichage des Praticiens + Détails -->
        <div class="m-4 ">
            <table class="table-zebra w-full">
                <thead class="bg-red-500 dark:bg-gray-700 ">
                    <tr >
                        <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                            Numéro
                        </th>
                        <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                            Nom 
                        </th>
                        <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                            Prénom
                        </th>
                        <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                            Adresse
                        </th>
                        <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                            Code Postale
                        </th>
                        <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                            Ville
                        </th>
                        <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                            Coef_Notoriete
                        </th>
                        <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                            Type Code
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($praticiens as $info)
                        <tr class="bg-white border-b">
                            <td class="py-4 px-6 text-sm font-medium text-black whitespace-wrap">
                                {{ $info->PRA_NUM }}          <!-- Affiche le "NUMERO" du Praticien -->
                            </td>
                            <td class="py-4 px-6 text-sm text-gray-600 whitespace-wrap"> 
                                {{ $info->PRA_NOM}}           <!-- Affiche le "NOM" du Praticien -->
                            </td>
                            <td class="py-4 px-6 text-sm text-black whitespace-wrap">
                                {{ $info->PRA_PRENOM}}        <!-- Affiche le "PRENOM" du Praticien -->
                            </td>
                            <td class="py-4 px-6 text-sm text-gray-600 whitespace-wrap">
                                {{ $info->PRA_ADRESSE}}       <!-- Affiche l' "ADRESSE" du Praticien -->
                            </td>
                            <td class="py-4 px-6 text-sm text-black whitespace-wrap">
                                {{ $info->PRA_CP}}            <!-- Affiche le "CODE POSTALE" du Praticien -->                                 
                            </td>
                            <td class="py-4 px-6 text-sm text-gray-600 whitespace-wrap">
                                {{ $info->PRA_VILLE}}         <!-- Affiche la "VILLE" du Praticien -->
                            </td>
                            <td class="py-4 px-6 text-sm text-black whitespace-wrap">
                                {{ $info->PRA_COEFNOTORIETE}} <!-- Affiche le "COEFF_NOTORIETE" du Praticien -->
                            </td>
                            <td class="py-4 px-6 text-sm text-black whitespace-wrap">
                                {{ $info->TYP_CODE}}          <!-- Affiche le "TYPE_CODE" du Praticien -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

<style>
    .table-zebra tbody tr:nth-child(even) td{
       background-color: rgb(248, 163, 163);
   }
</style>
   

<!-- "wrap" => retour à la ligne -->

    
  </x-app-layout>
 