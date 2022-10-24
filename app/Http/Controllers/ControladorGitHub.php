<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarVacio;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class ControladorGitHub extends Controller
{
  function Envio_de_datos(ValidarVacio $datos){
 
    return redirect()->route('form')->with('Exito',"exito :D");
    

  }
}
