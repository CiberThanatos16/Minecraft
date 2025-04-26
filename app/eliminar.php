<?php
    require_once '../config/Conexion.php';
    require_once '../app/Mobs.php';
    
    $deb = new Conexion();
    $con = $deb -> getConexion();
    $mob = new Mobs($con);
    
    if (isset($_GET['id_mob'])){
        $mob -> id_mob = $_GET["id_mob"];
        
        $query = "SELECT nombre, tipo, descripcion, img_mob FROM mobs WHERE id_mob = :id_mob LIMIT 0,1";
        $stmt = $con->prepare($query);
        $stmt -> bindParam(":id_mob", $mob->id_mob);
        $stmt -> execute();
        $data = $stmt -> fetch(PDO::FETCH_ASSOC);
        
        if($mob -> eliminar()){
            if(file_exists($data["img_mob"])){
                unlink($data["img_mob"]);
            }
            echo '<script>alert("El mob se elimino con exito "); window.location.href = "../Listar.php";</script>';
        }else{
            echo '<script>alert("Error al eliminar al mob"); window.location.href = "../Listar.php";</script>';
        }
    }else{
        echo '<script>alert("ID no especificada"); window.location.href = "../Listar.php";</script>';
    }
    
    
?>
