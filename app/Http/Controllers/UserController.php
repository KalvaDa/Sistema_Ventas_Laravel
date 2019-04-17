<?php

namespace SistemaVentas\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index(){
        
        if(request()->has('empty')){
            $users=[];
        }else
            $users=['Darwin','Juan','Maria','<script>echo("Hola")</script>'];            
        
        $title='Listado de Usuarios';
        // FORMA 1
        //return view('usuarios',['users'=>$users,'title'=>'Listado de Usuarios']);
        // FORMA 2
        /*
        return view('usuarios')
        ->with('users',$users)
        ->with('title','Listado de Usuarios');
        */
        //FORMA 3
        //dd(compact('users','title')); dd se usa para verificar rapidamente el contenido de algo en vez de echo()
        return view('usuarios',compact('users','title'));//La funcion compact convierte una palabraen un array asociativo
    }

    public function Show($id){
        return ("Mostrando el {$id}");
    }

    public function Create(){
        return ("Mostrando el {$id}");
    }

}
