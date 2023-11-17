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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('/veronica') ->group(function(){
    Route::get('/signin/{iniciar}/{sesion}/{de}/{usuario}', [SignController::class,'signin']);
    Route::get('/signup/{creacion}/{usuario}/{nuevo}', [SignController::class,'signup']);
});
