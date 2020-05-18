<!DOCTYPE html>
<html>
<title>consulta de datos</title>
<link rel="stylesheet" type="text/css" href="estilo3.css">
<body>
<?php

  //conexion con el servidor
  $server="127.0.0.1";
  $usuario="root";
  $contraseña="";
  $bd="empresa";
  $conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
  or die ("error en la conexion");
  // recuperar variebles
  $consulta = mysqli_query($conexion, "SELECT * from  inventario")
  or die ("error al traer los datos");
  echo '<table border="1">';
  echo '<tr>';
  echo '<th>id</th>';
  echo '<th id="$producto">producto</th>';
  echo '<th id="$precio">precio</th>';
  echo '<th id="$cantidad">cantidad</th>';
  echo '</tr>';
  while($extraido = mysqli_fetch_array($consulta))
  {
  echo'<tr>';
  echo'<td>'.$extraido['id'].'</td>';
  echo'<td>'.$extraido['producto'].'</td>';
  echo'<td>'.$extraido['precio'].'</td>';
  echo'<td>'.$extraido['cantidad'].'</td>';
  echo"<td><a href='eliminain.php?id=" . $extraido["id"] . "'>eliminar</a>";
  echo"<td><a href='actualizainv.php?id=" . $extraido["id"] . "'>editar</a>";
  echo'</tr>';


  }
mysqli_close($conexion);
echo'</table>';
echo"<br><a href='principal.html'>volver</a>";
?>
</body>
</html>
