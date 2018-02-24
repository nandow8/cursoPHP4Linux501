<?php 

class CanetaMetodos
{ 
	public $cor;
	public $marca; 
	public $tampada;
							//força o tipo permitindo somente string
	public function escrever(string $texto){ 
		echo $texto;
	}

	public function tampar(){
		$this->tampada = true;
	}

	public function destampar(){
		$this->tampada = false;
	}

	public function getCor(){
		return $this->cor;
	}

	public function setCor($cor){
		$this->cor = $cor;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function getTampada(){
		return $this->tampada;
	}

	public function setTampada($tampada){
		$this->tampada = $tampada;
	}
}

$azul = new CanetaMetodos();
$vermelha = new CanetaMetodos();
 
$azul->destampar();

$azul->escrever("estou escrevendo");