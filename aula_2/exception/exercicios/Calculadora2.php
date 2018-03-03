<?php

class NumerosNegativos extends Exception{}
class ResultadoMaiorCinquenta extends Exception{}

class Calculadora{ 

    public static function soma($a, $b){
        if (($a < 0) OR ($b < 0)) {
            throw new NumerosNegativos();
        } 
         
        $c = $a + $b;
        
        if ($c > 50) {
            throw new ResultadoMaiorCinquenta();
        } 

        return $c;
    }

    public static function subt($a, $b){
        return $a - $b;
    }

    public static function div($a, $b){
        return $a / $b;
    }

    public static function mult($a, $b){
        return $a * $b;
    }

}

try{
    echo Calculadora::soma(2,54); 
}catch(ResultadoMaiorCinquenta $e){
    echo "resultado maior que 50";
}