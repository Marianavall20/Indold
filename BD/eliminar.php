<?php
if (!empty($_GET)) {
	include "CONEXION/CONX.php";

$id = $_REQUEST ['Identificacion'];
$query = "DELETE  FROM estudiantes WHERE Identificacion='$id'";
$resultado = $conexion->query($query);
	if ($query!=null) {
		print"<script>alert(\"Eliminado exitosamente.\");window.location='VER.php';</script>";
}
   else{
   	print"<script>alert(\"No se pudo eliminar.\");window.location='VER.php';</script>";
   }
}
?>