<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function usuaris(Request $request){
        $email = $request -> input('email');
        $password = $request-> input('password');
        if($email == "hola" && $password == "123"){
            return view('Admin.admin')->with(['result'=>'Aqui se enseña los centros de rol admin']);
        }else{
            return view('signin');
        }
        
    }
    public function centres(){
        return view('Admin.admin')->with(['result'=>'Aqui se enseña los centros de rol admin']);
    }
}
