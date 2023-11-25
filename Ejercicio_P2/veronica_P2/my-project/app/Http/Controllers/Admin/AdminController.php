<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Funcion que se encarga de validar los datos que recibe del formulario
    //signin.
    public function usuaris(Request $request){
        $email = $request -> input('email');
        $password = $request-> input('password');
        $emailAuth = "veronica@gmail.com";
        $passwordAuth = "123";
       
        $errors = [];

        if (empty($email)) {
            $errors['email'] = 'El campo email es obligatorio.';
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

        //verifica si tiene algun error y si hay alguno retorna a la vista signin 
        //con los errores
        if (count($errors) > 0) {
            return redirect('veronica/signin')->withErrors($errors);
        } else {
            return view('Admin.admin'); //sin ningun error entra a la vista Admin.admin
        }
    }

    /*Funcion que se encarga de retornar la vista de centros junto con los
    datos de los centros */
    public function centres(){
        $arrayDatos = [
            [
                'id' => '1',
                'Name' => 'Instituti TIC de Barcelona',
                'Address' => 'C/Sancho de Avila',
                'CP' => '08018',
                'City' => 'Barcelona',
            ],
            [
                'id' => '2',
                'Name' => 'Joan d\'Austria',
                'Address' => 'C/fluvia 65',
                'CP' => '08020',
                'City' => 'Barcelona',
            ]
        ];
        
        return view('Admin.centers')->with(['centros' => $arrayDatos]);
    }
    /*Funcion que se encarga retornar la vista de alumnos junto con 
    los datos de los alumnos en un array asociativo */
     public function alumnat(){
        $arrayDatos = [
            [
                'id' => '4',
                'rol' => 'student',
                'name' => 'laia',
                'surname' => 'perez',
                'password' => '12345',
                'email' => 'laia@gmail.com',
                'active' => '0'
            ],
            [
                'id' => '5',
                'rol' => 'student',
                'name' => 'pedro',
                'surname' => 'perez',
                'password' => '123456',
                'email' => 'pedro@gmail.com',
                'active' => '0'
            ],
            [
                'id' => '16',
                'rol' => 'student',
                'name' => 'pedro',
                'surname' => 'ramires',
                'password' => '12345',
                'email' => 'pedro@inetum',
                'active' => '0' 
            ]
        ];
         return view('Admin.alumnat')->with(['alumnos'=>$arrayDatos]);
     }
     /*Funcion que se encarga de retorna la vista de profesores junto 
     con un array asociativo de los datos*/
    public function professorat(){
        $arrayDatos = [
            [
                'id' => '13',
                'rol' => 'teacher',
                'name' => 'Diego',
                'surname' => 'lima',
                'password' => '1234567',
                'email' => 'diego@gmail.com',
                'active' => '0'
            ],
            [
                'id' => '7',
                'rol' => 'teacher',
                'name' => 'veronica',
                'surname' => 'cartagena',
                'password' => '12345',
                'email' => 'veronica@gmail.com',
                'active' => '0'
            ],
            [
                'id' => '11',
                'rol' => 'teacher',
                'name' => 'Roger',
                'surname' => 'Sobrino',
                'password' => '12345',
                'email' => 'Roger@gmail.com',
                'active' => '0' 
            ]
        ];
        return view('Admin.professorat')->with(['profesores'=>$arrayDatos]);
    }
    /*Funcion que retorna la vista de Admin */
    public function vistaAdmin(){
        return view('Admin.admin');
    }
}
