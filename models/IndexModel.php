<?php
require_once 'db.php';

class IndexModel {
    private $message = 'Zentech Chat';
    private $actionManMsg = 'Action Man';
    private $chatMessage;
    private $userName;
    private $dbHandle;

    

    function __construct() {
        $this->dbHandle = Db::init();
    }

    public function welcomeMessage() {
        return $this->message;
    }

    public function actionMan() {
        return $this->actionManMsg;
    }

    public function setuserName($userName) {
        return $this->userName = $userName;
    }

    public function setMessage($chatMessage) {
        return $this->chatMessage = $chatMessage;
    }

    public function sendMessage() {
        $query = "Insert into messages (userName, message) Values(?,?)";

        $data = array(
            $this->$userName,
            $this->$chatMessage
        );

        $sqlStmt = $this->dbHandle->prepare($query);
        return $sqlStmt->execute($data);
    }
}