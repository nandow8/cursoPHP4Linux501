<?php

namespace Model\Usuario;

class Usuario{

    private $usuario;
    private $senha;
    
    public function __construct($usuario, $senha){
        $this->usuario = $usuario;
        $this->senha = $senha;
    }
 
    public function getUsuario()
    {
        return $this->usuario;
    }
 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario; 
        return $this;
    }
 
    public function getSenha()
    {
        return $this->senha;
    }
 
    public function setSenha($senha)
    {
        $this->senha = $senha; 
        return $this;
    }
}