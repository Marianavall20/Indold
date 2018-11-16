<?php 
$host = "localhost";
$basededatos = "contador";
$usuariodb = "root";
$clavedb = "";
$Conexion= new mysqli ($host,$usuariodb,$clavedb,$basededatos);
if($Conexion->connect_errno){
	echo "error";
	exit();
}


 ?>