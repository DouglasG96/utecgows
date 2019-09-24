<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;


class LoginController extends Controller
{
    public function index(Request $request){


        if(isset($request->us) && isset($request->contra)){

            $us  = $request->us;
            $contra =  $request->contra;
            $usuario = Usuario::where('id_usuario', '=' , $us)->where('contrasena',  '=' , $contra )->get();
            return $usuario;

        }else if(isset($request->us)){

            $us = $request->us;
            $usuario =  Usuario::find($us);
            return $usuario;
        }

    }



}
