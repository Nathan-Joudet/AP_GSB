<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un nouveau rapport de visite') }}
        </h2>
    </x-slot>

    <div class="card w-8/12 bg-white shadow-xl mx-auto px-6 py-4 mt-6">
        <form action="/nouveaurapport" method="POST">
            @csrf 

            <div class="mb-6">
                <span class="block ml-1 mb-2 mt-6 text-sm font-medium text-gray-900 dark:text-gray-300">Praticiens</span>
                <!-- Permet de créer une datalist des Praticiens -->
                <select class="select select-bordered w-full max-w-xs" name="praticien" required > <!---->
                    <option selected="selected" disabled>Choisissez un Praticien</option>
                    @foreach ($praticiens as $info)
                        <option value="{{ $info->PRA_NUM }}">{{ $info->PRA_NOM." ".$info->PRA_PRENOM }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Permet de créer un input de type "datetime-local" pour la date et l'heure du rapport -->
            <div class="mt-6">
                <span class="block ml-1 mb-2 mt-6 text-sm font-medium text-gray-900 dark:text-gray-300">Date</span>
                <input type="datetime-local" name="date" placeholder="2018-06-12T19:30" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-11/12 p-2.5 input">
            </div>

            <!-- Permet de créer un input de type "text" pour le motif du rapport -->
            <div class="mt-6">
                <span class="block ml-1 mb-2 mt-6 text-sm font-medium text-gray-900 dark:text-gray-300">Motif</span>
            <div class="indicator w-11/12">
                <span class="indicator-item badge ">Obligatoire</span>
                <input type="text" name="motif" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 input" placeholder="Entrer un Motif" required>
            </div>

            <!-- Permet de créer un input de type "text" pour le bilan du rapport -->
            <div class="mt-6">
                <span class="block ml-1 mb-2 mt-6 text-sm font-medium text-gray-900 dark:text-gray-300">Bilan</span>
            <div class="indicator w-11/12">
                <span class="indicator-item badge ">Obligatoire</span>
                <input type="text" name="bilan" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 input" placeholder="Entrer un Bilan" required>
            </div>

            <!-- Bouton pour créer un nouveau rapport -->
            <button class="btn btn-outline mt-6 hover:bg-gray-500 hover:border-gray-500 border-gray-500 text-gray-500">
              Créer un nouveau rapport
            </button>
          </form>
    </div>
 
</x-app-layout>
