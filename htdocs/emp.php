<?php
  include ("conexion.php");
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $edad = $_POST['edad'];
  $correo = $_POST['correo'];
  $salario = $_POST['salario'];
  $conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
  or die ("error en la conexion");
  $edita = mysqli_query($conexion, "UPDATE empleados SET nombre = '$nombre', edad = '$edad', correo = '$correo', salario = '$salario' WHERE id='$id'");
  echo"modificado correctamente";
  echo"<br><a href='consultaemp.php'>volver</a>";
  ?>
