<?php

namespace DAO;

use PDO;

class Conexao {

    private static $user = 'nandao';
    private static $pass = 'nandao';

    private static $dsn = "pgsql:host=localhost;dbname=aula04";
    private static $instance = null;
    
    private function __construct(){}
    private function __clone(){}

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new PDO(self::$dsn, self::$user, self::$pass);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}