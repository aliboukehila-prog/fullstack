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
            'name' => ['required','max:255'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','confirmed','min:3']


        ]);
        // Register
        $user = User::create($fields);
        
        //Login
        Auth::login($user);

        //redirect
        return redirect()->route('index');

    }
    public function login(Request $request){
    
        //Validation
        $fields = $request->validate([
        'email' => ['required','email'],
        'password' => ['required']
    ]);
    
    //Try to login the user
    if(Auth::attempt($fields,$request->remember)){
        return redirect()->intended();
    }else{
        return back()->withErrors([
            'failed' =>'Not  records!'
        ]
        );
    }
}

public function logout (Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerate();
    return redirect()->route("home");

}


}