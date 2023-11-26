<?php
//AdminController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users(Request $datos){
        $email = $datos -> input('email');//toma los datos del input con nombre email
        $password = $datos-> input('password');//toma los datos del imput con nombre password
        $authenticateEmail = "angelo@gmail.com";//email para poder ingresar
        $authenticatePasswd= "123";//contraseña para poder ingresar
        if ($email == $authenticateEmail && $password == $authenticatePasswd) {
            // Si las credenciales son correctas, redirigir a la vista de administrador
            return view('Admin.admin');
        } else {
            // Si no son correctas, redirige al signin con un mensaje de error
            return redirect()->route('signin');
        }
    }
    public function admin(){
        //retorna a la vista del adminsitrador
        return view('Admin.admin');
    }

    public function centres(){
        //arrays con los datos que se van a mostrar por pantalla sobre centros
         $centres=[
            ['id'=>'1', 'name'=>'Instituto TIC de Barcelona','address'=>'C/de sancho Avila','CP'=>'08018','City'=>'Barcelona'],
            ['id'=>'2', 'name'=>'Instituto Joan de austria','address'=>'C/selva de mar ','CP'=>'08020','City'=>'Barcelona']
        ];
        //redirige a la view de centres.blade.php
         return view('Admin.centres')->with(['centres'=>$centres]);
    }
    
    public function profesores(){
        //arrays con los datos que se van a mostrar por pantalla sobre profesores
         $profesores =[
            ['id'=>'1','rol'=>'profesorat','name'=>'Angelo','surname'=>'Montenegro','password'=>'1111','email'=>'angelo@gmail.com','active'=>'1'],
            ['id'=>'2','rol'=>'profesorat','name'=>'Roger','surname'=>'Sobrino','password'=>'2222','email'=>'roger@gmail.com','active'=>'1'],
            ['id'=>'3','rol'=>'profesorat','name'=>'Xavi','surname'=>'Quezada','password'=>'3333','email'=>'xavi@gmail.com','active'=>'1'],
            ['id'=>'4','rol'=>'profesorat','name'=>'Jordi','surname'=>'Quezada','password'=>'4444','email'=>'jordi@gmail.com','active'=>'1']
        ]; 
        //redirige a la view de profesorat.blade.php
         return view('Admin.profesorat')->with(['profesores'=>$profesores]);
    }
    
    public function alumnat(){
        //arrays con los datos que se van a mostrar por pantalla sobre alumnat
        $alumn =[
            ['id'=>'5','rol'=>'alumnat','name'=>'Joana','surname'=>'Lin-Cheng','password'=>'5555','email'=>'joana@gmail.com','active'=>'1'],
            ['id'=>'6','rol'=>'alumnat','name'=>'Oriana','surname'=>'Rojas','password'=>'6666','email'=>'oriana@gmail.com','active'=>'1'],
            ['id'=>'7','rol'=>'alumnat','name'=>'Neus','surname'=>'Bravo','password'=>'7777','email'=>'neus@gmail.com','active'=>'1'],
            ['id'=>'8','rol'=>'alumnat','name'=>'Vero','surname'=>'Cartagena','password'=>'8888','email'=>'vero@gmail.com','active'=>'1']
        ];
        //redirige a la view de alumnat.blade.php
        return view('Admin.alumnat')->with(['alumnos'=>$alumn]);
    }
}
