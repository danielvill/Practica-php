<?php
   
include ("conexion.php");
$conexionbd = conectar_bd();

$id =$_GET['id'];


$sql="DELETE FROM personas WHERE id='$id'";



$resultado=mysqli_query($conexionbd,$sql);

if(isset($_POST['register'])){
    if($resultado){
        ?>
        <hr3 > Registro Eliminado</hr3>
        <?php
    }else{
        ?>
        <hr3 > Error al eliminar</hr3>
        <?php

    }
}

?>