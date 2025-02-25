
    <x-layout>
        <h1 class="title">Welcome </h1>
        @auth
           <h1>Logged user {{auth()->user()->name}}</h1>
        @endauth
        @guest
            <h1>Guest </h1>
        @endguest
        
        <h1></h1>
             
    </x-layout>

       