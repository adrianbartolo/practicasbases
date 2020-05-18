<?php
$mysqli=new mysqli("localhost","root","","empresa");
if($mysqli->connect_errno){
echo( "fallo la conexion");
exit();
}
$consulta="select * from empleados";
$resultado=$mysqli->query($consulta);
while($empleado=$resultado->fetch_assoc()){
var_dump($resultado);
}
$resultado->close();
$mysqli->close();