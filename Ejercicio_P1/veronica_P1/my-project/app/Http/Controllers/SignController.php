<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller

{
    //funcion que recoge los parametros por url, tiene unos valores definidos por defecto
    public function signin($dato1='Login',$dato2='to',$dato3='your',$dato4='account'){
        $textFinal = ' ';
        $textFinal .= $dato1 . " ".$dato2." ".$dato3." ".$dato4;
        
        return view('signin')-> with('titulo',$textFinal); // envia el valor a la variable de la view
    }
    public function signup($dato1='New',$dato2='user',$dato3='registration'){
        $textFinal = ' ';
        $textFinal .= $dato1 . " ".$dato2." ".$dato3;
        return view('signup') -> with('titulo',$textFinal); // envia el valor a la variable de la view
    }
}

?>
