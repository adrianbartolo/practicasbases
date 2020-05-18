<!DOCTYPE html>
<html>
<title>consulta de datos</title>
<link rel="stylesheet" type="text/css" href="estilo5.css">
<body>
<?php
  $id=$_GET["id"];
  $server="127.0.0.1";
  $usuario="root";
  $contraseña="";
  $bd="empresa";

  $conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
    or die ("error en la conexion");

  mysqli_query($conexion, "DELETE from  empleados WHERE id='$id'")
  or die ("Error al eliminar el registro");
  mysqli_close($conexion);
  echo "<center>datos eliminados correctamente</center>";
  echo"<br><center><a href='consultaemp.php'>volver</a></center>";

?>
</body>
</html>
