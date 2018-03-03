<?php

class Calculadora{ 

    public static function soma($a, $b){
        if (($a < 0) OR ($b < 0)) {
            throw new Exception('Não é permitido somar com numeros < 0');
        } 
         
        $c = $a + $b;
        
        if ($c > 50) {
            throw new Exception('Não é permitido resultado > 50');
        } 

        return $c;
    }

    public static function subt($a, $b){
        $c = $a - $b;
        
        if ($c < 0) {
            throw new Exception('Não é permitido resultado < 0');
        } 

        return $c;
    }

    public static function div($a, $b){
        if (($a == 0) OR ($b == 0)) {
            throw new Exception('Não é permitido dividir por zero');
        } 
        return $a / $b;
    }

    public static function mult($a, $b){
        if ($a === 0 OR $b === 0) {
            throw new Exception('Não é permitido multiplicar por zero');
        } 
        $c = $a * $b;
        
        if ($c > 50) {
            throw new Exception('Não é permitido resultado > 50');
        }

        return $c;
    }

}

try{
    echo Calculadora::soma(2,54); 
}catch(Exception $e){
    echo $e->getMessage() . "<br>";
}


try{
    echo Calculadora::div(2,0); 
}catch(Exception $e){
    echo $e->getMessage() . "<br>";
}

try{
    echo Calculadora::mult(2,2); 
}catch(Exception $e){
    echo $e->getMessage() . "<br>";
}

try{
    echo Calculadora::subt(2,2); 
}catch(Exception $e){
    echo $e->getMessage() . "<br>";
}