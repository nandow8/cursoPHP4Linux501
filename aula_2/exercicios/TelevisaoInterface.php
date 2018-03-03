<?php
/* Interfaces 
 * Televisao
 * imoplementar os seguintes métodos:
 * - aumentaVolume()
 * - diminuiVolume()
 * - trocaCanal($canal)
 * - liga()
 * - desliga()  
 * 
 * class TV
 * 	-implementar a Interface Televisao
 *propriedades:
 *	- $volume = 10
 *  - $canal = 5
 *  - $estado = false // Representa ligado ou desligado
 */

interface Televisao{
	
	public function aumentaVolume();
	public function diminuiVolume();
	public function trocaCanal($canal);
	public function liga();
	public function desliga();
	
}

class TV implements Televisao {
	
	private $volume = 10;
	private $canal = 5;
	private $estado = false;
	
	public function aumentaVolume() { 
		return $this->volume += 1;
	}
	
	public function diminuiVolume(){
		return $this->volume -= 1;
	}
	
	public function trocaCanal($canal){
		$this->canal = $canal;
		return "assistindo canal: " . $this->canal;
	}
	
	public function liga(){
		$this->estado = true;
		if ($this->estado == true) {
			return "ligada";
		}
		
	}
	
	public function desliga(){
	    $this->estado = false;
		if ($this->estado == false) {
			return "desligada";
		}
	}
	
}


$tv = new TV();

echo "A tv está " . $tv->liga();
echo "<br>";
echo $tv->aumentaVolume();
echo "<br>";
echo $tv->diminuiVolume();
echo "<br>";
echo $tv->trocaCanal(2);
echo "<br>";
echo "A tv está " . $tv->desliga();























