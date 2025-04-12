<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{//el metodo invoke es cuando queresmos que el controlador solo administre una ruta.
    public function __invoke(){
        return "holaaaaaa ";
    }
}
