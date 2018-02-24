<!-- 
Classe Conta, 
  Atributos: 
    numConta, saldo, titular,tipo da conta(CC ou CP), 
    status(aberto(true) ou fechado(false))
  
  Métodos:    
    sacar(), depositar(), verSaldo(), verTitular(),verNumConta(), erarNumConta()

  Construtor: 
  	Passar o Nome do Titular, saldo(caso nao passe, saldo = 0), gerar numero da conta (usar função rand());

  Exibir na tela:
  	Titular, Numero da conta, o saldo atual.
-->

<?php 

class ContaMetodosMagicos{

	private $numConta;
	private $saldo;
	private $titular;


	public function __construct(string $nomeTitular, float $saldo = 0){
		$this->titular  = $nomeTitular;
		$this->saldo    = $saldo;
		$this->gerarConta();
	}

	public function sacar($valorSacar){
		if($this->saldo > 0){
			$this->saldo -= $valorSacar;
		}else{
			echo "Desculpe, você não tem saldo para sacar.";
		}
	}

	private function gerarConta(){
		$this->numConta = rand();
	}

	public function depositar($valorDeposito){
		$this->saldo += $valorDeposito;
	}

	public function verSaldo(){
		echo $this->saldo;
	}

	public function verTitular(){
		echo $this->titular;
	}

	public function verNumConta(){
		echo $this->numConta;
	}

	public function getNumConta(){
		return $this->numconta; 
	}

	public function setNumConta($numConta){
		$this->numconta = $numConta;
	}

	public function getSaldo(){
		return $this->saldo;
	}

	public function setSaldo($saldo){
		$this->saldo = $saldo;
	}

	public function getTitular(){
		return $this->titular;
	}

	public function setTitular($titular){
		$this->titular = $titular;
	}

}

$conta = new ContaMetodosMagicos("Fernando", 500 );

$conta->sacar(100);
$conta->depositar(500);
$conta->verTitular();
echo "<br>";
$conta->verSaldo();
echo "<br>";
$conta->verNumConta();

 
echo "<pre>"; 