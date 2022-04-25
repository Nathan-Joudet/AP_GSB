<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>


    <div class="card w-8/12 bg-white shadow-xl mx-auto px-6 py-4 mt-6">
      <figure class="px-10">
        <img class="mx-auto mt-6" src="{{ asset('/image') }}/logo_GSB.PNG" alt="screenshot" >
      </figure>
      <div class="card-body items-center text-justify">
        <p>Le laboratoire GSB (Galaxy Swiss Bourdin) est une industrie pharmaceutique spécialisée dans la recherche et production de nouvelles molécules et médicaments révolutionnaires.

          L'industrie pharmaceutique est un secteur très lucratif dans lequel le mouvement de fusion d'acquisition est très fort. Notre laboratoire est lui issu de la fusion du géant américain Galaxy et le conglomérat européen Swiss Bourdin.</p>
      </div>
      <div class="h-20 grid grid-cols-4 gap-4 mt-3">
        <button class="btn btn-outline hover:bg-blue-500 hover:border-blue-500 border-blue-500 text-blue-500">          
          <a href="/visiteur">Visiteurs</a>
        </button>

        <button class="btn btn-outline hover:bg-red-500 hover:border-red-500 border-red-500 text-red-500">
          <a href="/praticien">Praticiens</a>
        </button>

        <button class="btn btn-outline hover:bg-green-500 hover:border-green-500 border-green-500 text-green-500">
          <a href="/medicament">Médicaments</a>
        </button>

        <button class="btn btn-outline hover:bg-gray-500 hover:border-gray-500 border-gray-500 text-gray-500">
          <a href="/rapport">Rapports</a>
        </button>
      </div>
    </div>

    

    
</x-app-layout>
