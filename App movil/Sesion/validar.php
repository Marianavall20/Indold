<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
		//Validar usuario
			include("../administrador/conexion/conexion.php");
			$usuario= $_POST['usuario'];
			$contrasena= $_POST['contrasena'];
			$log=$cone->query("SELECT * FROM registro_usuario WHERE usuario='$usuario' and contrasena='$contrasena' and privilegio='usuario' and estado='activo'");
			if ($log->num_rows>0) {
				$row = mysqli_fetch_array($log);
				$_SESSION["usuario"] = $row['usuario'];
			  	print "<script>alert(\"Inicio de sesión exitoso.\");window.location='../Usuario/lite/PHP/factura.php';</script>";
			}
		?>

		<?php
		//Validar administrador
			include("../administrador/conexion/conexion.php");
			$usuario= $_POST['usuario'];
			$contrasena= $_POST['contrasena'];
			$log=$cone->query("SELECT * FROM registro_admi WHERE usuario='$usuario' and contrasena='$contrasena' 
			and privilegio='administrador'and estado='activo'");
			if ($log->num_rows>0) {
				$row = mysqli_fetch_array($log);
				$_SESSION["usuario"] = $row['usuario'];
			  	print "<script>alert(\"Inicio de sesión exitoso.\");window.location='../administrador/index.php';</script>";
			}
		?>

		<?php 
		//Validar si no es ni usuario ni administrador
			require ("../administrador/conexion/conexion.php");
			if (isset($_SESSION['user_id'])) {
				$records= $cone->prepare('SELECT id, usuario, correo, contrasena, privilegio, estado FROM registro_usuario WHERE id= :id');
				$records->bindparam(':id', $_SESSION['user_id']);
				$records->execute();
				$results= $records->fetch(PDO::FETCH_ASSOC);
				$user=null;
				if (count($results) > 0) {
					$user=$results;
				}
			}
 ?>
<script type="text/javascript">
	alert("usuario no activo u erroneo");window.location="../login.php"
</script>




</body>
</html>
