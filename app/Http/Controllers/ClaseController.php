<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClaseController extends Controller
{
    public function sumar($num1,$num2){
        return $num1+$num2;
    }
    public function multiplicar($num1,$num2){
        return $num1*$num2;
    }
}
