<?php
require_once __DIR__. '/drivers/mob_driver.php';
include 'plantillas/header.php';
include 'plantillas/navbar.php';

$mobs = new mob_driver();

$action = isset($_GET['action']) ? $_GET['action']: 'index';

switch ($action){
    case 'index':
        $mobs -> index();
        break;
    
    case 'guardar': 
        $mobs -> guardar();
        break;
    
    case 'store':
        $mobs -> store();
        break;

    case 'listar':
        $mobs -> listar();
        break;
    
    case 'edit':
        $mobs -> edit();
        break;
    
    case 'Actualizar':
        $mobs -> Actualizar();
        break;
    
    case 'eliminar':
        $mobs -> eliminar();
        break;

    case 'busqueda':
        $mobs -> busqueda();
        break;

    default:
        header("HTTP/1.0 404 Not Found");
        echo "Página no encontrada";
        break;
}



