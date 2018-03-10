<?php

namespace Model\Usuario;

use DAO\UsuarioDAO\UsuarioDAO;
use Model\Usuario\Usuario;

class Usuario{

    private $usuario;
    private $senha;
    private $id;
    
    public function __construct($usuario, $senha, $id = null){
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->id = $id;
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
 
    public function getId()
    {
        return $this->id;
    }
 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public static function all(){
        $dao = new UsuarioDAO();
        return $dao->all();
    }

    public static function find(int $id){
		$dao = new UsuarioDAO();
		return $dao->find($id);
    }

    public static function remove(Usuario $usuario){
        $dao = new UsuarioDAO(); 
		return $dao->delete($usuario);
    }

    public static function remove2(int $id){
		$dao = new UsuarioDAO();
		return $dao->delete2($id);
    }

    public function save(){ 
        $dao = new UsuarioDAO();
        if(is_null($this->id)){
            $dao->insert($this);
        } else {
            $dao->update($this);
        }  
    }
}