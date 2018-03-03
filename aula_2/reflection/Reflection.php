<?php
//                  PAGINA 137
class Conta{

    private $nome;

    public function soma(){
        return $this->nome  ;
    }

}


$ref = new ReflectionClass('Conta');

echo "<pre>";
print_r($ref->getProperties());
print_r($ref->getMethods());

echo "</pre>";
 