<?php
  include ("conexion.php");
  $id = $_POST['id'];
  $producto = $_POST['producto'];
  $precio = $_POST['precio'];
  $cantidad = $_POST['cantidad'];
  $conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
  or die ("error en la conexion");
  $edita = mysqli_query($conexion, "UPDATE inventario SET producto = '$producto', precio = '$precio', cantidad = '$cantidad' WHERE id='$id'");
  echo"modificado correctamente";
  echo"<br><a href='consultain.php'>volver</a>";
  ?>
