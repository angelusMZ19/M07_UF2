<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SignController extends Controller
{
    //se crea funcion con el nombre sigin y se pasan los valores que toman los parametro por medio de las rutas especificadas en el web.php
    public function signin($dato1, $dato2, $dato3, $dato4)
    {
        $parametro =' ';
        $parametro .= " ".$dato1." ". $dato2. " ".$dato3." ". $dato4;
        return view('signin')->with('dato', ($parametro));
        
    }
    //se crea funcion con el nombre sigup y se pasan los valores que toman los parametro por medio de las rutas especificadas en el web.php
    public function signup($dato1, $dato2, $dato3)
    {
        $parametro = ' ';
        $parametro .= " ".$dato1." ". $dato2. " ".$dato3;
        return view('signup')->with('dato',  ($parametro));
    }
}
//Este método with se utiliza para pasar datos a la vista. En este caso, le estás pasando un dato llamado dato con el valor de la variable parametro, estos se obtiene de la views correspondiente a la funcio signin(signin.blade.php), signup(signup.balde.php)
 