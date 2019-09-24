<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lugar;

class LugaresController extends Controller
{
    public function index(){
        $lugares =  Lugar::all();
        return $lugares;
    }
}
