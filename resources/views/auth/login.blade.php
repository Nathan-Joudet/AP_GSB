<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{ asset('/image') }}/GSB.PNG" width="100" height="100">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Authentification du visiteur par son "NOM" -->
            <div>
                <x-label for="nom" :value="__('Nom')" />

                <x-input id="nom" class="block mt-1 w-full" type="text" placeholder="Landré" name="nom" :value="old('nom')" required autofocus />
            </div>

            <!-- Authentification du visiteur par sa "DATE EMBAUCHE" -->
            <div class="mt-4">
                <x-label for="date" :value="__('Date')" />

                <x-input id="date" class="block mt-1 w-full"
                                type="text"
                                placeholder="16-dec-1992"
                                name="date"
                                required />
            </div>

            <!-- Remember Me -->
            {{-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

            <div class="flex items-center justify-end mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}

                <x-button class="ml-3 bg-blue-500">
                    {{ __('Connexion') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
