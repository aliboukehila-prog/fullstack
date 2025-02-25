<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VoitureController;
use Database\Factories\VoitureFactory;
use App\Http\Controllers\AIController;
use Illuminate\Support\Facades\Route;


Route::view('/','posts.index')->name('home');

Route::resource('cars_view', VoitureController::class);
Route::redirect("/cars","cars_view")->name("cars");


Route::get('/ask-ai', [AIController::class, 'askAI']);


//Route::view("/")
Route::middleware("guest")->group(function(){


Route::view('/register','auth.register')->name('register');
Route::post('/register',[Authcontroller::class,'register']);









Route::view('/login','auth.login')->name('login');
Route::post('/login',[Authcontroller::class,'login']);
});

Route::middleware("auth")->group(function(){
Route::post('/',[Authcontroller::class,'logout'])->name("logout");
});



