<?php

class Caneta{

    private static $tamanho = 10;
    private $cor;
    
    public function __construct($cor){
        $this->cor = $cor;
    }
 
    public function getCor()
    {
        return $this->cor;
    }

    public function getTamanho()
    {
        return self::$tamanho;
    }
  
}

echo Caneta::tamanho;