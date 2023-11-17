<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\SignController;
class SignController extends Controller
{
    //
    public function usuari1($dato1=''){//aqui se le pasan los parametro que se obtiene de la ruta
        $textFinal= 'usuari1: Angelo';
        $textFinal=($dato1=='')?'Sense cognom':$dato1;//esto es lo que muestra en la pagina 
        return view ('viewUsuaris')->with('nomUsuari',$textFinal);
    }

    public function usuari2($dato1, $dato2, $dato3){//aqui se le pasan los parametro que se obtiene de la ruta
        $textFinal= 'usuari2: Fernanda';
        $textFinal= $dato1."". $dato2."te ".$dato3;//esto es lo que muestra en la pagina 
        return view ('viewUsuaris')->with('nomUsuari',$textFinal);
    }
}
