<?php  
    require_once 'modelo.php';
    $activador = new Modelo();
    die();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $res = $activador->delete($id);

        if($res){
            echo '<script type="text/javascript">
                    alert("Datos eliminados con exito.");
                    window.location.href="../index.php";
                    </script>';   
        } else {
            echo '<script type="text/javascript">
                    alert("Datos no eliminados.");
                    window.location.href="../index.php";
                    </script>';   
        }
    }

    if(isset($_GET['idimg'])){
        $nombre = $_GET['idimg'];
        $res = $activador->deleteimg($nombre);

        if($res){
            echo '<script type="text/javascript">
                    alert("Datos eliminados con exito.");
                    window.location.href="../index.php";
                    </script>';   
        } else {
            echo '<script type="text/javascript">
                    alert("Datos no eliminados.");
                    window.location.href="../index.php";
                    </script>';   
        }
    }

    if(isset($_GET['iddoc'])){
        $nombre = $_GET['iddoc'];
        $res = $activador->deletedoc($nombre);

        if($res){
            echo '<script type="text/javascript">
                    alert("Datos eliminados con exito.");
                    window.location.href="../index.php";
                    </script>';   
        } else {
            echo '<script type="text/javascript">
                    alert("Datos no eliminados.");
                    window.location.href="../index.php";
                    </script>';   
        }
    }
?>