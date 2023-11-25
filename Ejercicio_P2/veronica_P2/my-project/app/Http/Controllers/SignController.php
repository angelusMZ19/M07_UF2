<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
   //funcion que retorna la vista de signin
   public function signin(){
    return view('signin'); 
}

public function signup(){
    return view('signup'); 
}

}
