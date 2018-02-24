<!-- 
Atributos

    numConta - Número da Conta
    saldo - Saldo da Conta
    titular - Títular da Conta
    tipo - Tipo da conta, CC ou CP
    status - Status, aberto(true) ou fechado (false)

Métodos

    gets e sets. Status, Titular

    abrirConta(Tipo, Titular)

    Se CC = Saldo 100; Se CP = Saldo 150; Status = true;

    fecharConta

    Não pode ter dinheiro na Conta Não pode estar devendo o banco. Status = false;

    sacar

    Verifica se Conta está aberta. Verificar a quantidade do saldo.

    depositar

    Verifica se Conta está aberta.

    verSaldo

    Verifica se Conta está aberta.

    verTitular
    verNumConta
    gerarNumConta - usar rand()

Contrutor

    Nome do Titular, Tipo da Conta
    Executar a funcao abrirConta();

Exibir na tela;

    o Titular
    o Número da Conta
    o Saldo atual

-->

<?php 

class ContaMetodosMagicosPt2{

	private $numConta;
	private $saldo;
	private $titular;
    private $tipo;    // Tipo da conta, CC ou CP
    private $status = false;  //Status, aberto(true) ou fechado (false)
 
	public function __construct(string $nomeTitular, string $tipoConta){
		$this->setTitular($nomeTitular); 
		$this->gerarConta();
		$this->abrirConta($tipoConta);
	}

	public function abrirConta(string $tipoConta){
		$this->tipo = $tipoConta;
		if($this->tipo == "CC"){
			$this->saldo += 100;
			$this->status = true;
		} 
		if($this->tipo == "CP"){
			$this->saldo += 150;
			$this->status = true;
		}

	}

	public function fecharConta(){
		if($this->saldo < 1){
			echo "sua conta está encerrada";
			$this->status = false;
		}else{
			echo "não é possível fechar conta, você ainda tem saldo";
		}
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
		if($this->status == true){
			$this->saldo += $valorDeposito;
		}else{
			echo "Você não tem conta.";
		}
	}

	public function verSaldo(){ 
		if($this->status == true){
			echo $this->saldo;
		}else{
			"Não é possível ver saldo, você não tem conta.";
		}
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

	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

	public function getStatus(){
		return $this->status;
	}

	public function setStatus($status){
		$this->status = $status;
	}

}

$conta = new ContaMetodosMagicosPt2("Fernando", "CC" );

echo $conta->verSaldo();

echo "<pre>";
print_r($conta);die;

$conta->sacar(100);
$conta->verTitular();
echo "<br>";
$conta->verSaldo();
echo "<br>";
$conta->verNumConta();
echo "<br>";
$conta->fecharConta();

 
echo "<pre>"; 