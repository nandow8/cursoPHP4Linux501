<?php

namespace Model;

use DAO\UsuariosDAO;
use Model\Usuario;

class UsuariosModel {

    private $usuariosDAO;

    public function __construct() {
        $this->usuariosDAO = new UsuariosDAO();
    }

    public function all() {
        return $this->usuariosDAO->all();
    }

    public function insert(array $dados) {
        $this->usuariosDAO->insert($dados);
    }

    public function edit(Usuario $usuarios) {
        var_dump($usuarios);
        die('usuariosModel');
        return $this->usuariosDAO->update($usuarios);
    }

    public function buscar($id) {
        return $this->usuariosDAO->find($id);
    }

}
