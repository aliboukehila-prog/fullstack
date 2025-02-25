<x-layout>
    <h1 class="title">Espace pour l'inscription</h1>
    
    <div class="mx-auto max-w-screen-sm card">
        <form action="{{route('register')}}" method="post">
            @csrf
            {{--username--}}

            <div class="nb-4">
                <label for="name">Username</label>
                <input type="text" name="name" value="{{old('name')}}" class="input @error('name')
                    ring ring-red-500
                @enderror">
                @error('name')
                   <p class="error"> {{$message}}</p>
                @enderror
            </div>
            {{--email--}}
            <div class="nb-4">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{old('email')}}" class="input">
                @error('email')
                {{$message}}
            @enderror
            </div>
            {{--password--}}
            <div class="nb-4">
                <label for="password">Password</label>
                <input type="password" name="password"  class="input">
                @error('password')
                   <p class="error"> {{$message}}</p>
                @enderror
            {{--confirmpwassword--}}
            </div><div class="nb-4">
                <label for="password_confirmation">Confirm password</label>
                <input type="password" name="password_confirmation"  class="input">
                @error('password_confirmation')
                   <p class="error"> {{$message}}</p>
                @enderror
            </div>
            {{--Bouton--}}
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Register
              </button>
              
        </form>
    </div>

   
</x-layout>