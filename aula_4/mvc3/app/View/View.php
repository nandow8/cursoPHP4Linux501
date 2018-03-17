<?php

namespace View;

class View {
    
    public function render($view, array $dados) {
        extract($dados);
        include '../src/' . $view . '.php';
    }
}
