<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier Profil') }}
        </h2>
    </x-slot>

    <div class="card w-8/12 bg-white shadow-xl mx-auto px-6 py-4 mt-6">
        <form action="/edit" method="POST">
            @csrf 
           
            <!-- Affiche le "NOM" du visiteur connecté -->
            <div class="mt-1">
                <span class="block ml-1 mb-2 mt-1 text-sm font-medium text-gray-900 dark:text-gray-300">Nom</span>
            <div class="indicator w-11/12">
                <input  value="{{$visiteurs = auth()->user()->VIS_NOM}}" type="text" name="nom" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 input" placeholder="Entrer un Motif" required>
            </div>
                
            <!-- Affiche le "PRENOM" du visiteur connecté -->
            <div class="mt-6">
                <span class="block ml-1 mb-2 mt-6 text-sm font-medium text-gray-900 dark:text-gray-300">Prénom</span>
            <div class="indicator w-11/12">
                <input value="{{$visiteurs = auth()->user()->Vis_PRENOM}}" type="text" name="prenom" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 input" placeholder="Entrer un Motif" required>
            </div>

            <!-- Affiche l' "ADRESSE" du visiteur connecté -->
            <div class="mt-6">
                <span class="block ml-1 mb-2 mt-6 text-sm font-medium text-gray-900 dark:text-gray-300">Adresse</span>
            <div class="indicator w-11/12">
                <input value="{{$visiteurs = auth()->user()->VIS_ADRESSE}}" type="text" name="adresse" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 input" placeholder="Entrer un Motif" required>
            </div>

            <!-- Affiche le "CODE POSTAL" du visiteur connecté -->
            <div class="mt-6">
                <span class="block ml-1 mb-2 mt-6 text-sm font-medium text-gray-900 dark:text-gray-300">Code Postal</span>
            <div class="indicator w-11/12">
                <input value="{{$visiteurs = auth()->user()->VIS_CP}}" type="text" name="cp" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 input" placeholder="Entrer un Motif" required>
            </div>

            <!-- Affiche la "VILLE" du visiteur connecté -->
            <div class="mt-6">
                <span class="block ml-1 mb-2 mt-6 text-sm font-medium text-gray-900 dark:text-gray-300">Ville</span>
            <div class="indicator w-11/12">
                <input value="{{$visiteurs = auth()->user()->VIS_VILLE}}" type="text" name="ville" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 input" placeholder="Entrer un Motif" required>
            </div>

            <!-- Bouton "Modifier les informations" -->
            <button type="submit" class="btn btn-outline mt-6 hover:bg-gray-500 hover:border-gray-500 border-gray-500 text-gray-500">
              Modifier les informations
            </button>
          </form>
    </div>
    





</x-app-layout>