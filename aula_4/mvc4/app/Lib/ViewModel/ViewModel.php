<?php

namespace Lib\ViewModel;

class ViewModel {

    private $header = BASEDIR . 'app/View/layout/header.php';
    private $footer = BASEDIR . 'app/View/layout/footer.php';

    public function render($view, $data = null) {
        $container = BASEDIR . 'app/View/layout/' . $view . '.php';
        $this->loadPage($container, $data);
    }

    private function loadPage($container, $data) {
        if (is_array($data)) {
            extract($data);
        }
        include $this->header;
        include $container;
        include $this->footer;
    }

}
