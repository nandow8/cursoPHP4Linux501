<?php

namespace Controller;

use Model\UsuariosModel;
use Model\Usuario;
use Lib\ViewModel\ViewModel;

class UsuariosController {

    private $usuariosModel;
    private $viewModel;

    public function __construct() {
        $this->usuariosModel = new UsuariosModel();
        $this->viewModel = new ViewModel();
    }

    public function index() {
        $usuarios = $this->usuariosModel->all();
        $this->viewModel->render('usuarios/index', ['usuarios' => $usuarios]);
    }

    public function edit($id) {
        $usuarios = $this->usuariosModel->buscar($id);
        $this->viewModel->render('usuarios/edit', ['usuarios' => $usuarios]);
    }

    public function update(Usuario $usuarios) {
        var_dump($usuarios);
        die('controller');
        $this->usuariosModel->edit($usuarios);
        header('Location:?r=usuarios/index');
    }

    public function novo() {
        $this->viewModel->render('usuarios/new');
    }

    public function create() {
        $this->usuariosModel->insert($_POST);
        header('Location:?r=usuarios');
    }

    public function delete($id) {
        echo "delete $id";
    }

}
