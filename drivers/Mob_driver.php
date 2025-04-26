<?php
require_once __DIR__ . '/../app/Mobs.php';

class Mob_driver
{

    public function index(){
        $filter = isset($_GET['filter']) ? $_GET['filter']: '';
        if ($filter){
            $mob = Mobs::search($filter);
        }else{
            $mob = Mobs::read();
        }
        include __DIR__ . '/../pages/index.php';
    }

    public function busqueda(){
        $search = isset($_GET['buscar']) ? $_GET['buscar']: '';
        $mobs=[];

        if($search){
            $mobs = Mobs::search($search);
        }
        include __DIR__. '/../pages/buscar.php';
    }

    public function guardar()
    {
        include __DIR__ . '/../pages/crear.php';
    }

    public function store()
    {
        $nombre = $_POST['nombreM'];
        $tipo = $_POST['tipo'];
        $descripcion = $_POST['des'];
        

        if (isset($_FILES['imgM']) && $_FILES['imgM']['error'] == 0) {
            $fileN = time() . '_' . basename($_FILES['imgM']['name']);
            $uploadP = __DIR__ . '/../views/img_mobs/' . $fileN;

            if (move_uploaded_file($_FILES['imgM']['tmp_name'], $uploadP)) {
                $img = $fileN;
            }
        }
        $mob = new Mobs(null, $nombre, $tipo, $descripcion, $img);
        $mob->guardar();
        header("Location: index.php");
        exit;
    }

    public function listar()
    {
        $mobs = Mobs::read();
        include __DIR__ . '/../pages/listar.php';
    }

    public function mobInfo()
    {
        $id_mob = $_GET['id_mob'];
        $mobData = Mobs::read_one($id_mob);
        include __DIR__ . '/../pages/inf_mob.php';
    }

    public function edit()
    {
        $id_mob = $_GET['id_mob'];
        $mobData = Mobs::read_one($id_mob);
        include __DIR__ . '/../pages/edit.php';
    }

    public function Actualizar()
    {
        $id_mob = $_POST['idM'];
        $nombre = $_POST['nombreM'];
        $tipo = $_POST['tipo'];
        $descripcion = $_POST['des'];

        $mobData = Mobs::read_one($id_mob);
        $img = $mobData['imgM'];

        if (isset($_FILES['imgM']) && $_FILES['imgM']['error'] === 0) {
            $fileN = time() . '_' . basename($_FILES['imgM']['name']);
            $uploadP = __DIR__ . '/../views/img_mobs/' . $fileN;
            if (move_uploaded_file($_FILES['imgM']['tmp_name'], $uploadP)) {
                $img = $fileN;
            }
        }
        $mobs = new Mobs($id_mob, $nombre, $tipo, $descripcion, $img);
        $mobs->Actualizar();
        header("Location: index.php");
        exit;
    }

    public function eliminar()
    {
        $id_mob = $_GET['id_mob'];
        $mob = new Mobs($id_mob);
        $mob->eliminar();
        header("Location: index.php");
        exit;
    }


}
