<?php  
    require_once 'modelo.php';
    $activador = new Modelo();
    
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
?>