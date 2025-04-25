<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class actividadController extends Controller
{
    public function cuadratica($a,$b,$c){
        $resultado=0;
        $discriminante=($b*$b)-(4*$a*$c);
        if ($a==0) {
            $texto="no es una ecuacion cuadratica";
            return view('resultadosCuadratica',compact('texto'));
        }elseif ($discriminante>0) {
            $resultado1=(((-$b)+sqrt($discriminante))/($a*2));
            $resultado2=(((-$b)-sqrt($discriminante))/($a*2));
            $texto="al ser el discriminante mayor a 0 ($discriminante), se hace la doble solucion, usando (+): x1=$resultado1, usando (-): x2=$resultado2";
            return view('resultadosCuadratica',compact('texto'));
        }elseif($discriminante==0){
            $resultado=-$b/($a*2);
            $texto="al ser el discriminante igual a 0 ($discriminante), se hace una unica solucion = $resultado";
            return view('resultadosCuadratica',compact('texto'));
        }else{
            $real = -$b / (2 * $a);
            $imaginaria = sqrt(abs($discriminante)) / (2 * $a);
            $texto = "al ser el discriminante menor a 0 ($discriminante), las soluciones son complejas: x1=$real + $imaginaria i /// y /// x2=$real - $imaginaria i";
            return view('resultadosCuadratica', compact('texto'));
        }
    }


    public function amigos($n1, $n2) {
        $suma1 = 0;
        $suma2 = 0;


        ///cambiossssss
        for ($i = 1; $i <= $n1 / 2; $i++) {
            if ($n1 % $i == 0) {
                $suma1 += $i;
            }
        }

        for ($j = 1; $j <= $n2 / 2; $j++) {
            if ($n2 % $j == 0) {
                $suma2 += $j;
            }
        }

        if ($suma1 == $n2 && $suma2 == $n1) {
            $texto="son amigos uwu";
        } else {
            $texto="son enemigos :(";
        }
        return view('resultados_amigos',compact('texto'));
    }

}
