
<x-layout>
    <h1 class="title">Welcome </h1>
    @auth
       <h1>Logged user {{auth()->user()->name}}</h1>
    @endauth
    @guest
        <h1>Car list from my cars view</h1>
    @endguest
    
    <h1></h1>
         @foreach ($cars as $car)
                <h2> {{$car->design}}</h2> 
                <h2> {{$car->speed}}</h2>
         @endforeach
    </x-layout>

   