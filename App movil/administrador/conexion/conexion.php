<?php
$local="localhostwww";
$usuariobd="root";
$password="";
$db="contador";
$cone= new mysqli ($local,$usuariobd,$password,$db);
if($cone->connect_error){
	echo"error";
	exit();
}


?>