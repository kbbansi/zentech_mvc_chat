<?php
 require_once './viewLoader/View.php';
class IndexController {
    private $model; //find an appropirate name

    private $view;

    function __construct($model) {
        $this->model = $model;
    }

    // find appropirate function name
    public function sayWelcome() {
        return $this->model->welcomeMessage();
    }

    public function takeAction() {
        // try to return a view here
        // return $this->model->actionMan();
        $this->view = new View('landing.php');
        $this->view->set('title', 'Zentech Chat');
        $this->view->set('greeting', 'Hello User');

        return $this->view->output();
    }
}