<?php

  //conexion con el servidor
  $conectar=@mysqli_connect('127.0.0.1' , 'root' , '');
  // verificar la conexion
  if(!$conectar){
    echo "no se pudo conectra con el servidor";
    }
  if(!mysqli_select_db($conectar, 'empresa')){
      echo"no se encontro la base de datos";
    }
  $producto= $_POST['producto'];
  $precio= $_POST['precio'];
  $cantidad= $_POST['cantidad'];
  // recuperar variebles
$sql="INSERT INTO Inventario(producto, precio,cantidad ) VALUES('$producto','$precio','$cantidad')";
  // ejecutar
  if(!mysqli_query($conectar,$sql)){
    echo"hubo un error";
  }else{
    echo"datos guardados correctamente<br><a href='principal.html'>volver</a>";
  }
?>
