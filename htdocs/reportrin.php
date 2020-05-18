<!DOCTYPE html>
<html>
<title>consulta de datos</title>
<link rel="stylesheet" type="text/css" href="estilo4.css">
<body>
<?php

  //conexion con el servidor
  $server="127.0.0.1";
  $usuario="root";
  $contraseña="";
  $bd="empresa";
  $conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
  or die ("error en la conexion");

  $consulta = mysqli_query($conexion, "SELECT cantidad FROM inventario;")
  or die ("error al traer los datos");

  // recuperar variebles
echo"el producto con menor existencia es: ";
  $consulta = mysqli_query($conexion, "SELECT * FROM inventario ORDER BY cantidad ASC LIMIT 1")
  or die ("error al traer los datos");
  echo '<table border="1">';
  echo '<tr>';
  echo '<th id="$id">id</th>';
  echo '<th id="$producto">producto</th>';
  echo '<th id="precio">precio</th>';
  echo '<th id="cantidad">cantidad</th>';
  echo '</tr>';
  while($extraido = mysqli_fetch_array($consulta))
  {
  echo'<tr>';
  echo'<td>'.$extraido['id'].'</td>';
  echo'<td>'.$extraido['producto'].'</td>';
  echo'<td>'.$extraido['precio'].'</td>';
  echo'<td>'.$extraido['cantidad'].'</td>';

  echo'</tr>';

  }
  echo'</table>';


    $consulta = mysqli_query($conexion, "SELECT * FROM inventario ORDER BY cantidad DESC LIMIT 1")
    or die ("error al traer los datos");
    echo '<table border="1">';
    echo '<tr>';
    echo '<th id="$id">id</th>';
    echo '<th id="$producto">producto</th>';
    echo '<th id="precio">precio</th>';
    echo '<th id="cantidad">cantidad</th>';
    echo '</tr>';
    echo"<br>el producto con mayor existencia es: ";
    while($extraido = mysqli_fetch_array($consulta))
    {
      echo'<tr>';
      echo'<td>'.$extraido['id'].'</td>';
      echo'<td>'.$extraido['producto'].'</td>';
      echo'<td>'.$extraido['precio'].'</td>';
      echo'<td>'.$extraido['cantidad'].'</td>';
      echo'</tr>';

    }
      echo'</table>';

    $consulta = mysqli_query($conexion, "SELECT * FROM inventario where cantidad=0")
    or die ("error al traer los datos");
    echo '<table border="1">';
    echo '<tr>';
    echo '<th id="$id">id</th>';
    echo '<th id="$producto">producto</th>';
    echo '<th id="precio">precio</th>';
    echo '<th id="cantidad">cantidad</th>';
    echo '</tr>';
    echo"<br>los productos que ya no existen son : ";
    while($extraido = mysqli_fetch_array($consulta))
    {
      echo'<tr>';
      echo'<td>'.$extraido['id'].'</td>';
      echo'<td>'.$extraido['producto'].'</td>';
      echo'<td>'.$extraido['precio'].'</td>';
      echo'<td>'.$extraido['cantidad'].'</td>';

      echo'</tr>';
    }
echo'</table>';
echo"<br><a href='principal.html'>volver</a>";
?>
</body>
</html>
