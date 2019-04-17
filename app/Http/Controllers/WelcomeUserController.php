<?php

namespace SistemaVentas\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
     public function __invoke($nombre,$apellido=null)
    {
        $nombre=ucfirst($nombre);
        if($apellido){
            return "{$nombre} {$apellido}";
        }else return "{$nombre}, no tienes apellido";
    }
}
