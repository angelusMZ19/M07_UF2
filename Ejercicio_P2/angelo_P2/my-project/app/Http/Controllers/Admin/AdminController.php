<?php
//AdminController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users(){
        $email = $request -> input('email');
        $password = $request-> input('password');
        $authenticateEmail = "angelo@gmail.com";
        $authenticatepasswd= "123";
        $usuari= $request=[''];
        if(!$authenticateEmail && !$authenticatepasswd){
            return(angelo/signin);
        }else{
            return  view('Admin.admin');
        }
    }
    public function admin(){
        return view('Admin.admin');
    }

    public function centres(){
         $center= $request=[
            ['id'=>'1', 'name'=>'Instituto TIC de Barcelona','address'=>'C/de sancho Avila','CP'=>'08018','City'=>'Barcelona'],
            ['id'=>'2', 'name'=>'Instituto Joan de austria','address'=>'selva de mar ','CP'=>'08020','City'=>'Barcelona']
        ];
         return  view('Admin.centres')->with(['result'=>$center]);
    }
    
    // public function product(Request $request){
    //     $text = $request=['product']    ;
    //     return view('products')->with(['result'=>$text]);
    // }

    public function profesores(Request $request){
         $profe = $request=[
            ['id'=>'1','rol'=>'profesorat','name'=>'Angelo','surname'=>'Montenegro','password'=>'1111','email'=>'angelo@gmail.com','active'=>'1'],
            ['id'=>'2','rol'=>'profesorat','name'=>'Roger','surname'=>'Sobrino','password'=>'2222','email'=>'roger@gmail.com','active'=>'1'],
            ['id'=>'3','rol'=>'profesorat','name'=>'Xavi','surname'=>'Quezada','password'=>'3333','email'=>'xavi@gmail.com','active'=>'1'],
            ['id'=>'4','rol'=>'profesorat','name'=>'Jordi','surname'=>'Quezada','password'=>'4444','email'=>'jordi@gmail.com','active'=>'1']
        ]; 
         return view('Admin.profesorat')->with(['result'=>$profe]);
    }
    
    public function alumnat(Request $request){
        $alumn = $request=[
            ['id'=>'5','rol'=>'alumnat','name'=>'Joana','surname'=>'Lin-Cheng','password'=>'5555','email'=>'joana@gmail.com','active'=>'1'],
            ['id'=>'6','rol'=>'alumnat','name'=>'Oriana','surname'=>'Rojas','password'=>'6666','email'=>'oriana@gmail.com','active'=>'1'],
            ['id'=>'7','rol'=>'alumnat','name'=>'Neus','surname'=>'Bravo','password'=>'7777','email'=>'neus@gmail.com','active'=>'1'],
            ['id'=>'8','rol'=>'alumnat','name'=>'Vero','surname'=>'Cartagena','password'=>'8888','email'=>'vero@gmail.com','active'=>'1']
        ]    ;
        return view('Admin.alumnat')->with(['result'=>$alumn]);
    }
}
//solo el sigin va fuer, dentro van los centro usuarios y profeosres
