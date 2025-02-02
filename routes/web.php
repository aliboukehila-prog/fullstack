<?php

use App\Http\Controllers\Authcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('posts.index');
})->name('home');

Route::view('/register','auth.register')->name('register');
Route::post('/register',[Authcontroller::class,'register']);

Route::view('/login','auth.login')->name('login');
Route::post('/login',[Authcontroller::class,'login']);

Route::post('/',[Authcontroller::class,'logout'])->name("logout");




