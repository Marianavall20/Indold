<?php
include ("../conexion/conexion.php");

$id = $_REQUEST ['id'];
$query = "DELETE  FROM libros WHERE id='$id'";
$resultado = $cone->query($query);

if ($resultado)
	{
		
		header("location:../mostrar/ver_catalogos.php");
		print "<script>alert(\"Se elimino correctamente.\");window.location='../mostrar/ver_catalogos.php';</script>";
	}
	 else
	 {
	 	echo "no se eliminó";
	 }
?>