<?php

require_once __DIR__ . '/../config/ConexionDB.php';

class Mobs
{

    public $id_mob;
    public $nombre;
    public $tipo;
    public $descripcion;
    public $img;

    public $busqueda;

    private $pdo;

    public function __construct($id_mob = null, $nombre = "", $tipo = "", $descripcion = "", $img = "", $busqueda = "")
    {
        $this->id_mob = $id_mob;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
        $this->img = $img;
        $this->busqueda = $busqueda;
        $this->pdo = ConexionDB::getInstance()->getConexion();
    }

    public function guardar()
    {
        $stmt = $this->pdo->prepare("INSERT INTO  mobs (nombre, tipo, descripcion, img_mob) VALUES (:nombre, :tipo, :descripcion, :img)");
        $stmt->execute([
            ':nombre' => $this->nombre,
            ':tipo' => $this->tipo,
            ':descripcion' => $this->descripcion,
            ':img' => $this->img
        ]);
        $this->id_mob = $this->pdo->lastInsertID();
        return $this->id_mob;
    }

    public static function read()
    {
        $pdo = ConexionDB::getInstance()->getConexion();
        $stmt = $pdo->prepare("SELECT * FROM mobs");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Actualizar()
    {
        $stmt = $this->pdo->prepare("UPDATE mobs SET nombre = :nombre, tipo = :tipo, descripcion = :descripcion, img_mob = :img_mob 
                       WHERE id_mob = :id_mob");
        return $stmt->execute([
            ':nombre' => $this->nombre,
            ':tipo' => $this->tipo,
            ':descripcion' => $this->descripcion,
            ':img_mob' => $this->img,
            ':id_mob' => $this->id_mob
        ]);
    }

    public static function read_one($id_mob)
    {
        $pdo = ConexionDB::getInstance()->getConexion();
        $stmt = $pdo->prepare("SELECT * FROM mobs WHERE id_mob = :id_mob");
        $stmt->execute([':id_mob' => $id_mob]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function eliminar()
    {
        $stmt = $this->pdo->prepare("DELETE FROM mobs WHERE id_mob = :id_mob");
        return $stmt->execute([':id_mob' => $this->id_mob]);
    }

    public static function search($busqueda)
    {
        $pdo = ConexionDB::getInstance()->getConexion();
        $stmt = $pdo->prepare("SELECT * FROM mobs WHERE nombre LIKE :busqueda OR descripcion LIKE :busqueda OR tipo LIKE :busqueda");
        $stmt->execute([
            ':busqueda' => '%' . $busqueda . '%'
        ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
