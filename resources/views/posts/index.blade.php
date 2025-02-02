
    <x-layout>
        <h1 class="title">Bienvenue sur notre site web </h1>
        @auth
        <h1>Utilisateur authentifié {{auth()->user()->name}}</h1>
    @endauth
    @guest
        <h1>Invité</h1>
    @endguest
 

    </x-layout>
