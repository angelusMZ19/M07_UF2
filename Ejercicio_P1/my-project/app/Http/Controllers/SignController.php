<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function signin($dato1='',$dato2='',$dato3='',$dato4=''){
        $textFinal = ' ';
        $textFinal .= $dato1 . " ".$dato2." ".$dato3." ".$dato4;
        
        return view('signin')-> with('titulo',$textFinal);
    }
    public function signup($dato1='',$dato2='',$dato3=''){
        $textFinal = ' ';
        $textFinal .= $dato1 . " ".$dato2." ".$dato3;
        return view('signup') -> with('titulo',$textFinal); ;
    }
}

?>
