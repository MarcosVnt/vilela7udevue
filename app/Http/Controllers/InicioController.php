<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // solo un metodo 
    public function __invoke(Request $request)
    {
        //
        //return "desde Inicio Controller";
        return view('inicio.index');
    }
}
