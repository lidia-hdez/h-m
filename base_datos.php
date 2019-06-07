<?php
$conexion=mysqli_connect("localhost","root","");

if(!$conexion){
    echo"No se pudo conectar con el servidor";
} else{
    $base=mysqli_select_db("hm");
    if(!$base){
        echo"No se encontro la base de datos";
    }
}

mysqli_select_db("hm",$conexion);

//recuperar las variables
$nombre=$_POST["nombre"];
$apellido=$_POST["apellidos"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$usuario=$_POST["usuario"];
$contraseña=$_POST["clave"];
//hacemos la sentencia de sql
$sql="INSERT INTO formulario VALUES("$nombre",
                                "$apellido",
                                "$correo",
                                "$telefono",
                                "$usuario",
                                "$contraseña")";
//ejecutamos la sentencia de sql
$ejecutar=mysqli_query($sql);
//verificamos la ejecucion
if(!$ejecutar){
    echo"Hubo algun error";
} else{
    echo"Datos guardados correctamente<br><a href='registrate.html'>Volver</a>";
}
?>