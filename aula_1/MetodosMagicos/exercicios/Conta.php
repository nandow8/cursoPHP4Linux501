<!-- Criar uma classe Conta. Ela deve ter dois atributos numConta e saldo
Você deve atribuir valores para esses atributos mostrando na tela a seguinta mensagem: Saldo atual da conta é 'x' e 'x' 

parte 2 
	criar dois metodos sacar(valor) e depositar(valor)
	escrever na tela sacando x e depositando y-->
<?php 

class Conta{

	private $numConta;
	private $saldo;

	public function sacar(float $valor){
		$this->saldo -= $valor;
		echo "sacou: $valor" . " saldo atual é $this->saldo";
	}

	public function depositar(float $valor){
		echo "depositou: $valor";
	}

	public function getNumConta(){
		return $this->numConta;
	}

	public function setNumConta($numConta){
		$this->numConta = $numConta;
	}
	
	public function getSaldo(){
		return $this->saldo;
	}

	public function setSaldo($saldo){
		$this->saldo = $saldo;
	}	


}

$contaA = new Conta();

$contaA->setNumConta(123456789);
$contaA->setSaldo(200.50);
 
$contaA->sacar(10); echo "<br>";
$contaA->depositar(20);

echo $contaA->getSaldo();

