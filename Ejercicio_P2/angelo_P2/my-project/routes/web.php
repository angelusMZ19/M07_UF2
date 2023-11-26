<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;
use App\Http\Controllers\Admin\AdminController;



//controlador
Route::prefix('angelo')->group(function () {//es el prefigo con el que se identifica la ruta (localhost:8000/angelo/resto de parametros
    //ruta on la cantidad de paarametros que seben de pasar cuando se quiera ir al signin
    Route::get('/signin/{dato1?}/{dato2?}/{dato3?}/{dato4?}', [SignController::class, 'signin'])->name("signin");
    
    //ruta on la cantidad de paarametros que seben de pasar cuando se quiera ir al signup
    Route::get('/signup/{dato1?}/{dato2?}/{dato3?}', [SignController::class, 'signup'])->name("signup");
   
});