<?php
//admin.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;//ruta de uso al control de adminsitrador

Route::middleware(['admin_db'])->group(function() {
    //todas esta son llamados a las funciones que se encuentran en el archivo AdminController.php
    Route::get('/admin',[AdminController::class,'admin'])->name('admin');//llama a la funcion admin
    Route::get('/centres',[AdminController::class,'centres'])->name('centres');//llama a la funcion centres
    Route::get('/profesores',[AdminController::class,'profesores'])->name('profesores');//llama a la funcion profesores
    Route::get('/alumnat',[AdminController::class,'alumnat'])->name('alumnat');//llama a la funcion alumnat
    //por medio del metodo Post
    Route::post('/users',[AdminController::class,'users'])->name('users');//llama ala funcion users
});
