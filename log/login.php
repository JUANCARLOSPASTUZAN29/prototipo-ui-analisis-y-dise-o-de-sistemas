<?php   $users="root";
$pass="";
$host="localhost";
$connection=mysqli_connect($host,$users,$pass);
$usuario=$_POST["usuario"];
$pass=$_POST["contra"];
if(!$connection){
    echo "nose pudo establecer la conexion".mysql_error();
}else{
    echo"<b>Conexion Exitosa<b><br>";
}
$database="form";
$db=mysqli_select_db($connection,$database);
$query=mysqli_query($connection,"SELECT usuario,contra FROM registro
WHERE usuario='".$usuario."' and contra ='".$pass."'");

$resul=mysqli_num_rows($query);
if($resul ==1){
    echo"Bienvenido:".$usuario;
    
}else if($resul ==0){
    echo"No ingreso correctamente";
}
?>