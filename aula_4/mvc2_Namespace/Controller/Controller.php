<?php

namespace Controller;

use Model\Model;
use View\View;

class Controller {

    private $model;
    private $view;


    public function __construct() {
        $this->model = new Model();
        $this->view = new View();
    }
    
    public function run() {
        $string = $this->model->getString();
        $msg = 'oi nando';
        $this->view->render(['dados' => $string, 'mensagem' => $msg]);
    }
    
}
