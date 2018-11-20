<?php
if (!empty($_GET)) {
	include "../../conexiones/conexion.php";

$id = $_REQUEST ['id'];
$query = "DELETE  FROM variedades WHERE id='$id'";
$resultado = $conexion->query($query);
	if ($query!=null) {
		print"<script>alert(\"Eliminado exitosamente.\");window.location='../productos/variedades.php';</script>";
}
   else{
   	print"<script>alert(\"No se pudo eliminar.\");window.location='../productos/variedades.php';</script>";
   }
}
?>