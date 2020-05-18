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

  $consulta = mysqli_query($conexion, "SELECT salario FROM empleados;")
  or die ("error al traer los datos");
  $suma = 0;
  $contador = 0;
  while($elemento = mysqli_fetch_array($consulta)) {
    $suma = $suma + $elemento['salario'];
    $contador++;
  }
$prom = $suma/$contador;
  // recuperar variebles
echo"el salario menor es: ";
  $consulta = mysqli_query($conexion, "SELECT * FROM empleados ORDER BY salario ASC LIMIT 1")
  or die ("error al traer los datos");
  echo '<table border="1">';
  echo '<tr>';
  echo '<th id="$id">id</th>';
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
  echo'</tr>';
  }

    $consulta = mysqli_query($conexion, "SELECT * FROM empleados ORDER BY salario DESC LIMIT 1")
    or die ("error al traer los datos");
    echo '<table border="1">';
    echo '<tr>';
    echo '<th id="$id">id</th>';
    echo '<th id="$nombre">nombre</th>';
    echo '<th id="edad">edad</th>';
    echo '<th id="correo">correo</th>';
    echo '<th id="salario">salario</th>';
    echo '</tr>';
    echo"<br>el salario mayor es: ";
    while($extraido = mysqli_fetch_array($consulta))
    {
    echo'<tr>';
    echo'<td>'.$extraido['id'].'</td>';
    echo'<td>'.$extraido['nombre'].'</td>';
    echo'<td>'.$extraido['edad'].'</td>';
    echo'<td>'.$extraido['correo'].'</td>';
    echo'<td>'.$extraido['salario'].'</td>';
    echo '</tr>';
    }


      echo'</table>';
      echo "<br><br>el promedio de salarios es: $prom<br><br>";
      $consulta = mysqli_query($conexion, "SELECT * FROM empleados where salario<$prom")
      or die ("error al traer los datos");
      echo '<table border="1">';
      echo '<tr>';
      echo '<th id="$id">id</th>';
      echo '<th id="$nombre">nombre</th>';
      echo '<th id="edad">edad</th>';
      echo '<th id="correo">correo</th>';
      echo '<th id="salario">salario</th>';
      echo '</tr>';
      echo"<br>los salarios bajo el promedio son: ";
      while($extraido = mysqli_fetch_array($consulta))
      {
      echo'<tr>';
      echo'<td>'.$extraido['id'].'</td>';
      echo'<td>'.$extraido['nombre'].'</td>';
      echo'<td>'.$extraido['edad'].'</td>';
      echo'<td>'.$extraido['correo'].'</td>';
      echo'<td>'.$extraido['salario'].'</td>';
      echo '</tr>';
      }
      echo'</table>';

      echo'</table>';
      $consulta = mysqli_query($conexion, "SELECT * FROM empleados where salario>$prom")
      or die ("error al traer los datos");
      echo '<table border="1">';
      echo '<tr>';
      echo '<th id="$id">id</th>';
      echo '<th id="$nombre">nombre</th>';
      echo '<th id="edad">edad</th>';
      echo '<th id="correo">correo</th>';
      echo '<th id="salario">salario</th>';
      echo '</tr>';
      echo"<br>los salarios sobre el promedio son: ";
      while($extraido = mysqli_fetch_array($consulta))
      {
      echo'<tr>';
      echo'<td>'.$extraido['id'].'</td>';
      echo'<td>'.$extraido['nombre'].'</td>';
      echo'<td>'.$extraido['edad'].'</td>';
      echo'<td>'.$extraido['correo'].'</td>';
      echo'<td>'.$extraido['salario'].'</td>';
      echo '</tr>';
      }
      echo'</table>';
echo"<br><a href='principal.html'>volver</a>";
?>
</body>
</html>
