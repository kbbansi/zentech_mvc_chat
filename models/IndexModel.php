<?php

class IndexModel {
    private $message = 'Zentech Chat';
    private $actionManMsg = 'Action Man';

    function __construct() {}

    public function welcomeMessage() {
        return $this->message;
    }

    public function actionMan() {
        return $this->actionManMsg;
    }
}