<?php
include ("../conexion/conexion.php");
if(isset($_POST['enviar'])){
$nombres=$_POST['nombres'];
$primer_apellido=$_POST['primer_apellido'];
$segundo_apellido=$_POST['segundo_apellido'];
$num_contador=$_POST['num_contador'];



$query = "INSERT INTO registro_usuario (nombres, primer_apellido, segundo_apellido, num_contador) values ('$nombres', '$primer_apellido', '$segundo_apellido', '$num_contador')";
$resultado = $cone->query($query);

if ($resultado)
	{
		print "<script>alert(\"Guardado exitosamente.\");window.location='../php/registro_propietario.php';</script>";
	}
	 else
	 {
	 	echo "no se insertó";
	 }
}

?>