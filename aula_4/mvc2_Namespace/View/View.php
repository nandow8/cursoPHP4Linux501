<?php

namespace View;

class View {
    
    public function render(array $dados){
        extract($dados);  // extract transforma um array em variaveis . Tem que ser array assciativo
        include 'src/hello.php';
    }
    
}
