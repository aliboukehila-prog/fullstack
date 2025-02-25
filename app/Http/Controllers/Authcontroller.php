<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function register(Request $request){
     
    // Validation
       $fields= $request->validate([
            'name' => ['required','max:25'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','confirmed','min:3']


        ]);
        // Register
        $user = User::create($fields);
        
        //Login
        Auth::login($user);

        //redirect
        return redirect()->route('home');

    }
    public function login(Request $request){
       // dd("ok");
        //Validation
        $fields = $request->validate([
        'email' => ['required','email'],
        'password' => ['required']
    ]);
    
    //Try to login the user
    if(Auth::attempt($fields,$request->remember)){
        return redirect()->route("home");
    }else{
        return back()->withErrors([
            'failed' =>'Not in the records!'
        ]
        );
    }
}

public function logout (Request $request){
    Auth::logout();
   // $request->session()->invalidate();
    //$request->session()->regenerate();
    return redirect()->route("logout");

}
}