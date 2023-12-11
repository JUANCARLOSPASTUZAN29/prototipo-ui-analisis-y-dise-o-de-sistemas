<?php
$user="root";
$pass="";
$host="localhost";
$connection=mysqli_connect($host,$user,$pass);
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$usuario=$_POST["usuario"];
$id=$_POST["document"];
$fecha=$_POST["nacimiento"];
$edad=$_POST["edad"];
$pass=$_POST["contra"];


if(!$connection){
    echo "nose pudo establecer la conexion".mysql_error();
}else{
    echo"<b>Conexion Exitosa";
}
$database="form";
$db=mysqli_select_db($connection,$database);
$instruccion_SQL ="INSERT INTO registro (nombre,apellido,usuario,id,fecha,edad,contra) 
VALUES('$nombre','$apellido','$usuario','$id','$fecha','$edad','$pass')";

$resul=mysqli_query($connection,$instruccion_SQL);


?>

