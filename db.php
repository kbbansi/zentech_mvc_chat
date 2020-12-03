<?php
class Db {
    private static $db;
    public $dbHost = 'localhost';
    public $dbName = 'zentech_chat';
    public $dbPassword = 'kb2020#KB';
    public $dbUser = 'root';

    public static function init() {
        if (!self::$db) {
            try {
                //code...
                $domainNameServer = 'mysql:host='.$dbHost.';dbname='.$dbName.';charset=UTF-8';
                self::$db = new PDO($domainNameServer, $dbUser, $dbPassword);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $error) {
                //throw $th;
                die('Database Connection not Established: '. $error->getMessage());
            }
        }
        return self::$db;
    }
}



