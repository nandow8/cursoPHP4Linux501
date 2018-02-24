<?php 
 
class MetodosMagicos 
{
	private  $cor;
	private  $marca; 
	private  $tampada;

    public function __construct($cor){
        $this->cor = $cor;
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

$azul = new MetodosMagicos("verde");
 echo $azul->getCor();