<?php
include ("../conexion/conexion.php");
if(isset($_POST['enviar'])){
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$codigo=$_POST['codigo'];
$privilegio=$_POST['privilegio'];
$estado=$_POST['estado'];


$query = "INSERT INTO registro_usuario (usuario, contrasena, codigo, privilegio, estado) values ('$usuario', '$contrasena', '$codigo', '$privilegio', '$estado')";
$resultado = $cone->query($query);

if ($resultado)
	{
		print "<script>alert(\"Guardado exitosamente.\");window.location='../php/registro_usuario.php';</script>";
	}
	 else
	 {
	 	echo "no se insertó";
	 }
}

?>