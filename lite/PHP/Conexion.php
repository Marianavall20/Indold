<?php
$local="mysql.gestionrecursoshumanos.org";
$usuariobd="user_contadorepa";
$password="Contador2018";
$db="contadorepa";
$cone= new mysqli ($local,$usuariobd,$password,$db);
if($cone->connect_error){
	echo"error";
	exit();
}


?>