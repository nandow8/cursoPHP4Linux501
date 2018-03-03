<?php

interface FreteStrategy{
    public function calcular();
}

class FreteNormal implements FreteStrategy{
    public function calcular($preco){
        return 2 + $preco;
    }
}

class FreteExpresso implements FreteStrategy{
    public function calcular($preco){
        return 5 + $preco;
    }
}

class FreteTurbo implements FreteStrategy{
    public function calcular($preco){
        return 10 + $preco;
    }
}

class Pedido{

   /* public function __construct($tipoFrete)
    {
        if($tipoFrete === 'frete_normal'){
            echo "frete normal";
        }

        elseif($tipoFrete === 'frete_expresso'){
            echo "frete  expresso";
        }

        elseif($tipoFrete === 'frete_turbo'){
            echo "frete turbo";
        }
        else{
            echo "nenhum frete encontrado";
        }
    } */

    private $freteStrategy;
    private $totalPedido;

    public function __construct(int $preco, FreteStrategy $tipoFrete){
        $this->totalPedido = $preco;
        $this->freteStrategy = $tipoFrete;
    }

    public function calcularTotalPedido(){
        return $this->freteStrategy->calcular($this->totalPedido);
    }
}

$pedido = new Pedido(50, new FreteNormal());

echo $pedido->calcularTotalPedido();