<?php
    require_once '../conexion/conexion.php';
    Class Modelo{
        private $conn;
        function __construct(){
            $this->conn = Database::connect();
        }
        function SaveImg($nombre, $nomdoc){
            $sql = "INSERT INTO documentos(id, nombre_img, nombre_doc) VALUES (null,'{$nombre}', '{$nomdoc}')";
            $res = mysqli_query($this->conn, $sql);
            if($res){
                return true;
            } else {
                return false;
            }
        }
        function delete($id){
            $sql = "DELETE FROM documentos WHERE id='$id'";
            $res = mysqli_query($this->conn, $sql);
            if($res){
                return true;
            } else {
                return false;
            }
        }
    }
?>