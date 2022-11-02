<?php
  include("conexion.php");
  $conexionbd = conectar_bd();
  $where ="";
  $sql="SELECT * from personas";
  $result = mysqli_query($conexionbd,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/jquery-3.6.1.min.js"></script> 
    <title>Proyecto</title>
</head>
<body>
   <div class="container">
    <div class="row">
        <h2 style="text-align:center">Prueba Insertar Actualizar Eliminar y buscar php y Mysql</h2>

    </div>
      <div class="row">
        <a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>

      </div>
</br>
<div class="row table responsive">
<table class ="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>telefono</th>
            <th>estado civil</th>
</th>
</thead>
    <tbody>
        <?php
             while($row = $result->fetch_array())
            { 
        ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['Nombre'];?></td>
            <td><?php echo $row['Correo'];?></td>
            <td><?php echo $row['telefono'];?></td>
            <td><?php echo $row['estadocivil'];?></td>
            <td><a href="modificar.php?id=<?php echo $row['id'];?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a><a href="eliminar.php?id=<?php echo $row['id'];?>">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash2-fill" viewBox="0 0 16 16" name = "register">
  <path d="M2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225zm9.89-.69C10.966 2.214 9.578 2 8 2c-1.58 0-2.968.215-3.926.534-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466-.18-.14-.498-.307-.975-.466z" />
</svg></a></td>
        </tr>
        <?php
            }?>

   </tbody>

</table>
</div>



   </div>   


</body>
</html>