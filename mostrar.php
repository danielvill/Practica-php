<?php
 $conexion = include("conectar.php");
 $conexionbd = conectar_bd();
 if($conexion){
    $consulta = "SELECT * FROM empleado ";
    $reslutado = mysqli_query($conexionbd,$consulta);
    if($reslutado){
        while ($row = $reslutado->fetch_array()){
            $id = $row['id'];
            $nombre = $row['nombre'];
            $edad = $row['edad'];
            
            echo $id;
            echo $nombre;
            echo $edad;
            
              
            
        }

    }
 }


?>