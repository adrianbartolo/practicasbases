<?php
$server="127.0.0.1";
$usuario="root";
$contraseña="";
$bd="empresa";
$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
or die ("error en la conexion");
$id = $_GET['id'];
$consulta = mysqli_query($conexion, "SELECT * from  inventario where id='$id'")
 or die ("error al traer los datos");
mysqli_close($conexion);

$producto = $consulta->fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>editar</title>
<link rel="stylesheet" href="estilo3.css">
</head>
<body>
<form class="" action="inv.php" method="post">
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
<input type="text" name="producto" placeholder="ingresa el producto nuevo" value="<?php echo $producto['producto'] ?>">
<input type="text" name="precio" placeholder="ingresa el precio nuevo" value="<?php echo $producto['precio'] ?>">
<input type="text" name="cantidad" placeholder="ingresa la cantidad nueva" value="<?php echo $producto['cantidad']?>">
<input type="submit" value="modificar" name="modificar">
</form>
<center>
<br><a href='principal.html'>volver</a>
</center>
</body>
</html>
