<link rel="stylesheet" type="text/css" href="estilo3.css">
<?php
$server="127.0.0.1";
$usuario="root";
$contraseña="";
$bd="empresa";
$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
or die ("error en la conexion");
$id = $_GET['id'];
$consulta = mysqli_query($conexion, "SELECT * from  empleados where id='$id'")
 or die ("error al traer los datos");
mysqli_close($conexion);

$nombre = $consulta->fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>editar</title>
<link rel="stylesheet" type="text/css" href="estilos3.css">
</head>
<body>
<form class="" action="emp.php" method="post">
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
<input type="text" name="nombre" placeholder="ingresa el nombre nuevo" value="<?php echo $nombre['nombre'] ?>">
<input type="text" name="edad" placeholder="ingresa edad nueva" value="<?php echo $nombre['edad'] ?>">
<input type="text" name="correo" placeholder="ingresa correo nuevo" value="<?php echo $nombre['correo'] ?>">
<input type="text" name="salario" placeholder="ingresa salario nuevo" value="<?php echo $nombre['salario'] ?>">
<input type="submit" value="modificar" name="modificar">
</form>
<br><a href='principal.html'>volver</a>
</body>
</html>
