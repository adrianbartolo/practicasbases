
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
    $consulta = mysqli_query($conexion, "SELECT * from  empleados")
    or die ("error al traer los datos");
    echo '<table border="1">';
    echo '<tr>';
    echo '<th>id</th>';
    echo '<th id="$nombre">nombre</th>';
    echo '<th id="edad">edad</th>';
    echo '<th id="correo">correo</th>';
    echo '<th id="salario">salario</th>';
    echo '</tr>';

    while($extraido = mysqli_fetch_array($consulta))
    {
    echo'<tr>';
    echo'<td>'.$extraido['id'].'</td>';
    echo'<td>'.$extraido['nombre'].'</td>';
    echo'<td>'.$extraido['edad'].'</td>';
    echo'<td>'.$extraido['correo'].'</td>';
    echo'<td>'.$extraido['salario'].'</td>';
    echo"<td><a href='eliminacon.php?id=" . $extraido["id"] . "'>eliminar</a>";
    echo"<td><a href='actualizaem.php?id=" . $extraido["id"] . "'>editar</a>";
    echo'</tr>';

    }
  mysqli_close($conexion);
  echo'</table>';

  echo"<br><b><center><a href='principal.html'>volver</a></center></b>";

  ?>
</body>
</html>
