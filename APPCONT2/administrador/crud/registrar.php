<?php
include ("../conexion/conexion.php");

$identificacion=$_POST['identificacion'];
$nombres=$_POST['nombres'];
$primer_apellido=$_POST['primer_apellido'];
$segundo_apellido=$_POST['segundo_apellido'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$email=$_POST['email'];
$estado=$_POST['estado'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$query = "INSERT INTO registro_trabajadores (identificacion, nombres, primer_apellido, segundo_apellido, telefono, direccion, email, estado, usuario, contrasena) values ('$identificacion', '$nombres', '$primer_apellido', '$segundo_apellido', '$telefono', '$direccion', '$email','$estado','$usuario', '$contrasena')";
$resultado = $cone->query($query);

if ($resultado)
	{
		print "<script>alert(\"Guardado exitosamente.\");window.location='../php/registro.php';</script>";
	}
	 else
	 {
	 	echo "no se insertó";
	 }
?>