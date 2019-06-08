<?php
$con=mysqli_connect('localhost','sai','') or die('Error en la conexion servidor');
$db=mysqli_select_db("hm",$con) or die('Error de conexion');

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['clave'];
$sql="INSERT INTO formulario VALUES(null,'".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["correo"]."','".$_POST["telefono"]."','".$_POST["usuario"]."','".$_POST["contraseña"]."')"; 
$resultado=mysqli_query($con,$sql) or die ('Error en el query database');
mysqli_close($con);

echo 'El ingresado es: '.$_POST["nombre"].$_POST["apellidos"];
echo 'El correo es: '.$_POST["correo"];
echo 'El telefono es: '.$_POST["telefono"];
echo 'El usuario es: '.$_POST["usuario"];
echo 'La contraseña es: '.$_POST["clave"];
?>