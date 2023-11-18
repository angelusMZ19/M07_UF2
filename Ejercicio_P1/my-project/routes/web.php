<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\SingController;
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

Route::prefix('/veronica') ->group(function(){
    //definicion de ruta con parametros 
    Route::get('/signin/{iniciar?}/{sesion?}/{de?}/{usuario?}', [SignController::class,'signin']);
    Route::get('/signup/{creacion?}/{usuario?}/{nuevo?}', [SignController::class,'signup']);
    //definicion de ruta sin parametros
    Route::get('/signup', [SignController::class,'signup']);
    Route::get('/signin', [SignController::class,'signin']);
});
