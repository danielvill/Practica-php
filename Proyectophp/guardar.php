<?php
   
include ("conexion.php");
$conexionbd = conectar_bd();

$id =$_POST['Id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$civil = $_POST['civil'];

$sql="INSERT INTO personas(id, Nombre, Correo, telefono, estadocivil) VALUES ('$id','$nombre','$correo','$telefono','$civil')";



$resultado=mysqli_query($conexionbd,$sql);

if(isset($_POST['register'])){
    if($resultado){
        ?>
        <hr3 > Haz enviado corectamente los datos</hr3>
        <?php
    }else{
        ?>
        <hr3 > No se conecto para nada</hr3>
        <?php

    }
}

?>