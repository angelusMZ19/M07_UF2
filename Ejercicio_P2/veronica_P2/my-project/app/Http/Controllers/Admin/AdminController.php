<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function usuaris(Request $request){
        $email = $request -> input('email');
        $password = $request-> input('password');
        $emailAuth = "hola";
        $passwordAuth = "123";
       
        $errors = [];

        if (empty($email)) {
            $errors['email'] = 'El email es obligatorio.';
        }

        if (empty($password)) {
            $errors['password'] = 'La contraseña es obligatoria.';
        }

        if (!empty($email) && !empty($password)) {
            if ($email != $emailAuth) {
                $errors['email'] = 'El email no es correcto.';
            }

            if ($password != $passwordAuth) {
                $errors['password'] = 'La contraseña no es correcta.';
            }
        }

        if (count($errors) > 0) {
            return redirect('veronica/signin')->withErrors($errors);
        } else {
            return view('Admin.admin')->with(['result'=>'Aqui se enseña los centros de rol admin']);
        }
    }
    public function centres(){
        return view('Admin.admin')->with(['result'=>'Aqui se enseña los centros de rol admin']);
    }
}
