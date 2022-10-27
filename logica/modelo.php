<?php
    require_once '../conexion/conexion.php';
    Class Modelo{
        private $conn;
        function __construct(){
            $this->conn = Database::connect();
        }
        //esta funcion es para guardar los datos 
        function SaveImg($nombre, $nomdoc){
            $sql = "INSERT INTO documentos(id, nombre_img, nombre_doc) VALUES (null,'{$nombre}', '{$nomdoc}')";
            $res = mysqli_query($this->conn, $sql);
            if($res){
                return true;
            } else {
                return false;
            }
        }
        // esta funcion es para eliminar todo el registro
        function delete($id){
            $sql = "DELETE FROM documentos WHERE id='$id'";
            $res = mysqli_query($this->conn, $sql);
            if($res){
                return true;
            } else {
                return false;
            }
        }
        //esta funcion es para eliminar solo la imagen
        function deleteimg($id){
            $sql = "UPDATE documentos SET nombre_img='' WHERE id = '$id';";
            $res = mysqli_query($this->conn, $sql);
            if($res){
                return true;
            } else {
                return false;
            }
        }
        //esta funcion es para eliminar solo el documento
        function deletedoc($id){
            $sql = "UPDATE documentos SET nombre_doc='' WHERE id = '$id';";
            $res = mysqli_query($this->conn, $sql);
            if($res){
                return true;
            } else {
                return false;
            }
        }
    }
?>