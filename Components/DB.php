<?php

namespace Components;

class DB {  

    public static function getConnection(){
        $dsn = 'mysql:host=127.0.0.1;dbname=phpconferences;';
        $pdo = new \PDO($dsn, 'root', 'root'); 
        return $pdo;
    }
}