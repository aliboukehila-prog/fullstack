<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-100 text-slate-900">
    <header class="bg-slate-800 shadow-lg">
        <nav>
            <a href="{{route("home")}}" class="nav-link">Home</a>
       
            <div class="nav-link">
                <form action="{{route("logout")}}" method="post">
                    @csrf
                   <button class="btn">Logout</button>
                </form> 
                
            </div>
     
            
        @guest
            <div class="flex items-center gap-4">
                <a href="{{route('login')}}" class="nav-link">Login</a>
                <a href="{{route('register')}}" class="nav-link">Register</a>
               
            </div>
        @endguest
        @auth
        <div class="flex items-center gap-4">
            <a href="{{route('cars')}}" class="nav-link">Cars</a>
            
           
        </div>
        @endauth   
        
        </nav>    
    </header>    
    
    <main class="py-8 px-4 mx-auto max-w-screen-lg">
        {{$slot}}
    </main>
    
</body>
</html>