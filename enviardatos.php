<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Datos Mysql</title>
</head>
<body>


      <form  method = "post" >
        
        
        Ingresa el nombre usuario<input type="Text" name="user"></br>
        Ingresa la edad<input type="text" name="pwd"></br>
        
        <br>
        <input type="submit" value="Enviar" name = "register" >
        
      </form>    
    
      <?php

include ("conectar.php");




$conexionbd = conectar_bd();

if(isset($_POST['register'])){
  
     if(strlen($_POST['user']) >= 1 && strlen($_POST['pwd']) >= 1 ){
        $name = trim ($_POST['user']);
        $pasw = trim ($_POST['pwd']);
        $consu = "INSERT INTO  empleado( nombre, edad) VALUES ('$name','$pasw')";
        $resultado = mysqli_query($conexionbd,$consu);
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
}
?>

</body>
</html>