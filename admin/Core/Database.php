<?php

class Database
{
    const HOST = 'adminer.test';
    const USERNAME = 'root';
    const DB_NAME = 'QLSV';
    const PASSWORD = 'password';
    // private $connect;
    public function connect(){
        try {
            $connect = "mysql:host=".self::HOST.";dbname=".self::DB_NAME.";charset=utf8";
            $pdo = new PDO($connect, self::USERNAME, self::PASSWORD);
            // set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}