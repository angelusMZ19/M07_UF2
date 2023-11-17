<?php

//use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//controlador
Route::prefix('SignController')->group(function () {//es el prefigo con el que se identifica la ruta (localhost:8000/SignController/usuari)
    Route::get('/usuari1/{cognom?}', [SignController::class, 'usuari1']);
    Route::get('/usuari2/{cognom1}/{cognom2}/{edad}', [SignController::class, 'usuari2']);
});