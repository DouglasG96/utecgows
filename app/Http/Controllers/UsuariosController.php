<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuariosController extends Controller
{
    public function create(Request $request){

        
        $usu = $request->usuario;
        $clave = $request->clave;
        $pregunta = $request->pregunta;
        $tipo=1;

        $usuario  =  new Usuario;

        $usuario->id_usuario =  $usu;
        $usuario->contrasena =  $clave;
        $usuario->recuperacion =  $pregunta;
        $usuario->id_tipo=$tipo;
        
        $usuario->save();

        return $usuario;
        
        

    }
}
