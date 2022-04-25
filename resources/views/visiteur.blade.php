<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Page Visiteurs') }}
        </h2>
    </x-slot>


    @include('search')
      
    <div class="m-4 ">
        <table class="table-zebra w-full ">
            <thead class="bg-blue-500 dark:bg-gray-700 " >
                <tr>
                    <th scope="col" class="py-3 px-6 text-sm font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                        Matricule
                    </th>
                    <th scope="col" class="py-3 px-6 text-sm  font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                        Nom 
                    </th>
                    <th scope="col" class="py-3 px-6 text-sm  font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                        Prénom
                    </th>
                    <th scope="col" class="py-3 px-6 text-sm  font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                        Adresse
                    </th>
                    <th scope="col" class="py-3 px-6 text-sm  font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                        Code Postale
                    </th>
                    <th scope="col" class="py-3 px-6 text-sm  font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                        Ville
                    </th>
                    <th scope="col" class="py-3 px-6 text-sm  font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                        DateEmbauche
                    </th>
                    <th scope="col" class="py-3 px-6 text-sm  font-bold tracking-wider text-left text-white uppercase dark:text-gray-400">
                        Code Laboratoire
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($visiteurs as $info)
                <!-- Product 1 -->
                <tr class="bg-white border-b">
                    <td class="py-4 px-6 text-sm font-medium text-black whitespace-wrap">
                        {{ $info->VIS_MATRICULE }}
                    </td>
                    <td class="py-4 px-6 text-sm text-gray-600 whitespace-wrap"> <!-- "wrap" => retour à la ligne -->
                        {{ $info->VIS_NOM}}
                    </td>
                    <td class="py-4 px-6 text-sm text-black whitespace-wrap">
                        {{ $info->Vis_PRENOM}}
                    </td>
                    <td class="py-4 px-6 text-sm text-gray-600 whitespace-wra">
                        {{ $info->VIS_ADRESSE}}
                    </td>
                    <td class="py-4 px-6 text-sm  text-black whitespace-wrap">
                        {{ $info->VIS_CP}}                                
                    </td>
                    <td class="py-4 px-6 text-sm text-gray-600 whitespace-wrap">
                        {{ $info->VIS_VILLE}}
                    </td>
                    <td class="py-4 px-6 text-sm text-black whitespace-wrap">
                        {{ $info->VIS_DATEEMBAUCHE}}
                    </td>
                    <td class="py-4 px-6 text-sm text-gray-600 whitespace-wra">
                        {{ $info->LAB_CODE}}                                
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
</div>
<style>
     .table-zebra tbody tr:nth-child(even) td{
        background-color: rgb(171, 206, 245);
    }
</style>
    </x-app-layout>
