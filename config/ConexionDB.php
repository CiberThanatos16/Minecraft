<?php
require_once 'config.php';

class ConexionDB{
    
    private static $instance = null;
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            $this->pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("No se pudo conectar a la base de datos:". $e->getMessage());
        }
    }
    
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new ConexionDB;
        }
        return self::$instance;
    }
    
    public function getConexion(){
        return $this->pdo;
    }
}
