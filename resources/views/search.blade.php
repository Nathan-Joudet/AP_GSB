
<form action="{{ route('research') }}" class="d-flex m-3">

 

    {{-- Normal --}}
    <div class="form-group mb-0 mr-1 ml-1" style="display:flex">

    <input type="text" name="s" class="input input-bordered input-info w-full max-w-xs" value="{{ request()->s ?? '' }}" placeholder="Rechercher un Visiteur"> <!--Permet de créer la barre de recherche-->
    <button type="submit" name="envoyer" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"><svg class="h-6 w-6 text-white-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="10" cy="10" r="7" />  <line x1="21" y1="21" x2="15" y2="15" /></svg></button> <!--Permet de créer le bouton envoyer-->
    </div>

</form>

    <!--<input  type="text" id="search" placeholder="Rechercher un visiteur"> Permet de créer la barre de recherche-->

  