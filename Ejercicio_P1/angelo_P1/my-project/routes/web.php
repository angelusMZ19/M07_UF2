<?php

//use Illuminate\Support\Facades\Route;
//ruta donde se encutra el archivo que se desea usar para pasarle los parametros
use App\Http\Controllers\SignController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//controlador
Route::prefix('angelo')->group(function () {//es el prefigo con el que se identifica la ruta (localhost:8000/angelo/resto de parametros
    //ruta on la cantidad de paarametros que seben de pasar cuando se quiera ir al signin
    Route::get('/signin/{dato1}/{dato2}/{dato3}/{dato4}', [SignController::class, 'signin']);
    //ruta on la cantidad de paarametros que seben de pasar cuando se quiera ir al signup
    Route::get('/signup/{dato1}/{dato2}/{dato3}', [SignController::class, 'signup']);
});
//se debe tener en cuanta que la ruta completa en ambos casos se debe utilizar el prefijo que seria localhost:8000/angelo/signin o signup segun corresponda/resto de parametros