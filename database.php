<?php

class Database {
    // db info
    private static $dbName = 'simple_crud';
    private static $host = 'localhost';
    private static $username = 'root';
    private static $pwrd = '';

    private static $cont = null;

    // db constructor
    public function __construct() {
        die('Not allowed.');
    }


    // connect to db
    public static function connect() {
        // One connection trough whole application
        if (null == self::$cont) {
            try {
                self::$cont = new PDO("mysql:host=".self::$host.";". "dbname=".self::$dbName, self::$username, self::$pwrd);
            }
            catch(PDOException $e) {
                die($e -> getMessage());
            }
        }
        return self::$cont;
    }

    public static function disconnect() {
        self::$cont = null;
    }
}

?>