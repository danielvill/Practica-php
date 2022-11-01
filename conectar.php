<?php

function conectar_bd(){
   $servidor = "localhost";
   $nombre = "empresa";
   $usuario = "root";
   $contraseña ="";

   $conexion = mysqli_connect($servidor,$usuario,$contraseña,$nombre) or die ("Error al conectar a la base de datos".mysql_error());
    

    return $conexion;

    


}

?>