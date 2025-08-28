<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/drivers/Mob_driver.php';
include 'plantillas/header.php';
include 'plantillas/navbar.php';

$mobs = new mob_driver();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        $mobs->index();
        break;

    case 'guardar':
        $mobs->guardar();
        break;

    case 'store':
        $mobs->store();
        break;

    case 'listar':
        $mobs->listar();
        break;

    case 'mob_select':
        $mobs->mob_select();
        break;

    case 'edit':
        $mobs->edit();
        break;

    case 'Actualizar':
        $mobs->Actualizar();
        break;

    case 'eliminar':
        $mobs->eliminar();
        break;

    case 'busqueda':
        $mobs->busqueda();
        break;

    case 'ajustes':
        $mobs->ajustes();
        break;

    default:
        header("HTTP/1.0 404 Not Found");
        echo "Página no encontrada";
        break;
}
?>

<script src="AppJS/Ajuste-bg-img.js" defer></script>
<script src="AppJS/Ajuste-text-color.js" defer></script>