<?php
  include ("conexion.php");
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
  or die ("error en la conexion");
  $edita = mysqli_query($conexion, "UPDATE departamentos SET nombre = '$nombre' WHERE id='$id'");
  echo"modificado correctamente";
  echo"<br><a href='consuldep.php'>volver</a>";
  ?>
