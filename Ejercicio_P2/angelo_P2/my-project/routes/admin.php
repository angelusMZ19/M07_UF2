<?php
//admin.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::middleware(['admin_db'])->group(function() {
    Route::get('/centres',[AdminController::class, 'centres']);
    // Route::get('/profes',[AdminController::class, 'centres']);
    // Route::get('/alumnos',[AdminController::class, 'centres']);
});
