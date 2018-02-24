<?php  

class Caneta
{ 
	public $cor;
	public $marca;
}

$azul = new Caneta();
$vermelha = new Caneta();

$azul->cor = "Azul";
$azul->marca = "BIC";

$vermelha->cor = "Vermelha";
$vermelha->marca = "BIC";


echo "<pre>";
print_r($azul);
print_r($vermelha);


echo $azul->cor;
echo $vermelha->marca;