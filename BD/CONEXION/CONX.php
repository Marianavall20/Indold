 <?php
$local = "localhost";
$user = "root";
$password = "";
$db = "bd";
$conexion = new mysqli ($local,$user,$password,$db);
if($conexion->connect_errno){
	echo "error";
	exit();
}
?>  