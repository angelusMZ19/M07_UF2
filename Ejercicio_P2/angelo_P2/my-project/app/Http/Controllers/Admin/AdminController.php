<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function usuaris(){
        $usuari= $request=[''];
        return  view('Admin.admin')->with(['result'=>$usuari]);
    }
    public function centres(){
        $center= $request=['id'=>'1', 'name'=>'Instituto TIC de Barcelona','address'=>'C/de sancho Avila','CP'=>'08018','City'=>'Barcelona'];
        return  view('Admin.admin')->with(['result'=>$center]);
    }
    
    public function product(Request $request){
        $product = $request=['product']    ;
        return view('products')->with(['result'=>$product]);
    }
    public function profesores(Request $request){
        $profe = $request=['product']    ;
        return view('products')->with(['result'=>$profe]);
    }
    public function alumnat(Request $request){
        $alumn = $request=['']    ;
        return view('products')->with(['result'=>$alumn]);
    }
}
//solo el sigin va fuer, dentro van los centro usuarios y profeosres
