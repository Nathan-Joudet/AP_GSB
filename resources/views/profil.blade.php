<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mon Profil') }}
        </h2>
        
    </x-slot>

    <br>

    {{-- <img class="mx-auto mt-2" src="{{ asset('/image') }}/Capture.PNG" alt="screenshot" > --}}

    <div class="py-12">

    <div class=" mx-auto w-64  px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg profil" style="width:500px">
       
        <x-label for="nom" :value="__('Nom')" />
        <p> {{ Auth::user()->VIS_NOM }} </p>
        <x-label for="nom" :value="__('Prénom')" />
        <p> {{ Auth::user()->Vis_PRENOM }} </p>
        <x-label for="nom" :value="__('Adresse')" />
        <p> {{ Auth::user()->VIS_ADRESSE }} </p>
        <x-label for="nom" :value="__('Code Postal')" />
        <p> {{ Auth::user()->VIS_CP }} </p>
        <x-label for="nom" :value="__('Ville')" />
        <p> {{ Auth::user()->VIS_VILLE }} </p>
        <x-label for="nom" :value="__('Date Embauche')" />
        <p> {{ Auth::user()->VIS_DATEEMBAUCHE }} </p>
        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded m-6">
          <a href="/edit">Modifier mes informations</a>
        </button>

    </div>

      </div>

</x-app-layout>

{{-- <style>
 .profil {
   background-color: red; 
 }
</style> --}}