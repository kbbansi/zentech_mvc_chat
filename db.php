<?php
class Db {
    private static $db;
   // $dbHost = 'localhost';
   // $dbName = 'zentech_chat';

    public static function init() {
        if (!self::$db) {
            try {
                //code...
                $dbPassword = 'kb2020#KB';
                $dbUser = 'root';
                $domainNameServer = 'mysql:host=localhost;dbname=zentech_chat;';

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



