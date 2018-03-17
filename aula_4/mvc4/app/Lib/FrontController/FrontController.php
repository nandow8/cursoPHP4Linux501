<?php

namespace Lib\FrontController;

class FrontController {

    public function run() {
        //public/?r=usuarios/novo
        $rota = isset($_GET['r']) ? $_GET['r'] : 'index';
        $rotas = explode('/', $rota);
        $controller = isset($rotas[0]) ? $rotas[0] : 'index';

        $action = isset($rotas[1]) ? $rotas[1] : 'index';

        $_GET['id'] = isset($rotas[2]) ? $rotas[2] : null;
        $id = isset($rotas[2]) ? $rotas[2] : null;
        $controller = 'Controller\\' . ucfirst($controller . 'Controller');
        // new Controller\Index;
        $objController = new $controller();
        //obj(Index)->index;
        $objController->$action($id);
    }

}
