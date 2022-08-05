<?php
include("bd.php");
if(isset($_GET ['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM mensaje where id_usuario=$id";
    $resultados=mysqli_query($conn, $query);
    if(!$resultados){
        die("Error al eliminar");
    }
    header("location:mensajes.php");
}
?>