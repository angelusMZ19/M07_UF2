<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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

// Utiliza un middleware llamado 'admin_db' para aplicar ciertas reglas o lógica antes de que se maneje la solicitud
Route::middleware(['admin_db'])->group(function(){

    // Ruta para la vista 'admin_view' que maneja solicitudes POST
    Route::post('admin_view', [AdminController::class, 'usuaris'])->name('admin_view');

    // Ruta para la vista 'centres' que maneja solicitudes GET
    Route::get('centres', [AdminController::class, 'centres'])->name('centres');

    // Ruta para la vista 'professorat' que maneja solicitudes GET
    Route::get('professorat', [AdminController::class, 'professorat'])->name('professorat');

    // Ruta para la vista 'alumnat' que maneja solicitudes GET
    Route::get('alumnat', [AdminController::class, 'alumnat'])->name('alumnat');

    // Ruta para la vista 'admin' que maneja solicitudes GET
    Route::get('admin', [AdminController::class, 'vistaAdmin'])->name('admin');

});
