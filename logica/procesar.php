<?php
    require_once 'modelo.php';
    if(isset($_POST['Enviar'])){
        $activador = new Modelo();

        $nombre = $_FILES['imagen']['name'];
        $nomdoc = $_FILES['documento']['name'];

        $ruta1 = $_SERVER['DOCUMENT_ROOT'] . '/taller/img/';
        $ruta2 = $_SERVER['DOCUMENT_ROOT'] . '/taller/documentos/';

        $activador->SaveImg($nombre, $nomdoc);

        if(move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta1.$nombre) && move_uploaded_file($_FILES['documento']['tmp_name'], $ruta2.$nomdoc)){
            echo '<script type="text/javascript">
                    alert("Datos Enviados con exito.");
                    window.location.href="../index.php";
                    </script>';            
        }
    }
?>