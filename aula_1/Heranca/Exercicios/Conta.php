<?php

class Conta{
	
	private $titular;
	private $saldo;
	private $numConta;
	private $tipo;
	
	public function __construct($nome = null,  $numeroConta){
		$this->titular = $nome;
		$this->numConta = $numeroConta;
	}
	
	public function sacar($valor){ 
		if($this->saldo > 0){
			if ("CC" == $this->tipo){
				$this->saldo -= ($this->saldo * 5) / 100;
				$this->saldo -= $valor;
			}
			if("CP" == $this->tipo){
				$this->saldo -= ($this->saldo * 10) / 100;
				$this->saldo -= $valor; 
			}
		}else{ 
			echo "A sua conta " . $this->tipo . " não possui creditos";
		}
	}
	
	public function depositar($valor){
		 
			if ("CC" == $this->tipo){
				$this->saldo = ($this->saldo * 5) / 100;
				$this->saldo += $valor;
			}
			if("CP" == $this->tipo){
				$this->saldo = ($this->saldo * 10) / 100;
				$this->saldo += $valor;
			}
		  
	}
	
	public function getTitular(){
		return $this->titular;
	} 
	public function setTitular($nome){
		$this->titular = $nome;
	}
	
	public function getSaldo(){
		return $this->titular;
	}
	
	public function setSaldo($valor){
		$this->saldo = $valor;
	}
	
	public function getNumConta(){
		return $this->numConta;
	}
	
	public function setNumConta($numeroConta){
		$this->cnumCon = $numeroConta;
	}
	
	public function getTipo(){
		return $this->tipo;
	}
	
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
}

class ContaCorrente extends Conta{
	
	private $chequeEspecial;
	 
	public function emprestimo($valorEspecial){
		if ($this->chequeEspecial){
			$this->sacar($valorEspecial);
		}else{
			return "não tem cheque especial";
		}
	}
	
	public function getChequeEspecial(){
		return $this->chequeEspecial;
	}
	
	public function setChequeEspecial(bool $chequeEspecial){
		$this->chequeEspecial = $chequeEspecial;
	}
	 
}

class ContaPoupanca extends Conta{
	
	
	
}

$contaCP = new ContaPoupanca("Fernado", rand(110,399) . "." . rand(110,999) . "." . rand(110,999) . "-" . rand(1,9) );
$contaCC = new ContaCorrente("Franciele", rand(110,399) . "." . rand(110,999) . "." . rand(110,999) . "-" . rand(1,9) );

$contaCP->SetTipo("CP");
$contaCC->setTipo("CC");

$contaCP->depositar(300);
$contaCP->sacar(200);

$contaCC->depositar(400);
$contaCC->sacar(100);

echo "<pre>";
print_r($contaCP);
print_r($contaCC);



















