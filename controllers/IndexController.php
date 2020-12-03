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

    public function save() {
        // if (!isset($_POST['submit'])) {
        //     # code...
        //     echo '<script>alert("Opps an Error");</script>';
        //     //header('Location:/');
        // }

        $userName = isset($_POST['userName']);
        $chatMessage = isset($_POST['message']);

        try {
            //code...
            $chat = new IndexModel();
            $chat->setuserName($userName);
            $chat->setMessage($chatMessage);

            $chat->sendMessage();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

/*
$indexModel = New IndexModel();
            $indexController = New IndexController($indexModel);
            $indexView = New IndexView($indexController, $indexModel);
            print $indexView->action();
            */