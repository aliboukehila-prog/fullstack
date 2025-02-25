
<x-layout>
    @vite('resources/css/app.css')
    <h2 class="title">Welcome to our car web site</h2>
    @auth
       <h1 class="car-name">Logged user {{auth()->user()->name}}</h1>
    @endauth
    @guest
        <h1>Cras list </h1>
    @endguest
    
   
        

         
             <style>
                 body {
                     font-family: Arial, sans-serif;
                     background-color: #f4f4f4;
                     margin: 0;
                     padding: 20px;
                 }
         
                 .container {
                     max-width: 800px;
                     margin: auto;
                 }
         
                 h1 {
                     text-align: center;
                     color: #333;
                 }
         
                 .car-list {
                     display: flex;
                     flex-direction: column;
                     gap: 15px;
                 }
         
                 .car-card {
                     background: white;
                     padding: 15px;
                     border-radius: 8px;
                     box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                     display: flex;
                     justify-content: space-between;
                     align-items: center;
                     transition: transform 0.2s;
                 }
         
                 .car-card:hover {
                     transform: scale(1.03);
                 }
         
                 .car-name {
                     font-size: 18px;
                     font-weight: bold;
                     color: #070b0d;
                 }
         
                 .car-speed {
                     font-size: 16px;
                     color: #555;
                     background: #007bff;
                     color: white;
                     padding: 5px 10px;
                     border-radius: 5px;
                 }
             </style>
         </head>
         <body>
         
             <div class="container">
                 
                 <div class="car-list">          
                    
                    @foreach ($voitures as $voiture)
                     <div class="car-card">
                         <span class="car-name">{{$voiture->marque}}McLaren P1</span>
                         <span class="car-speed">{{$voiture->vitesse}}350 km/h</span>
                     </div>
                    @endforeach
                 </div>
             </div>
         
         </body>
         </html>
           
    </x-layout>

   