<?php
   
include ("conexion.php");
$conexionbd = conectar_bd();

$id =$_POST['Id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$civil = $_POST['civil'];

$sql="UPDATE personas SET `Nombre`='$nombre',Correo='$correo',telefono='$telefono',estadocivil='$civil' WHERE id='$id'";



$resultado=mysqli_query($conexionbd,$sql);

if(isset($_POST['register'])){
    if($resultado){
        ?>
        <hr3 > Registro modificado</hr3>
        <?php
    }else{
        ?>
        <hr3 > Error al modificar el registro</hr3>
        <?php

    }
}

?>