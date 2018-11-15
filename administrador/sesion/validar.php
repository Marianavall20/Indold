<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<head>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script> 	
</head>
</head>
<body>

		<?php
		//Validar usuario
			include("../administrador/conexion/conexion.php");
			$usuario= $_POST['usuario'];
			$contrasena= $_POST['contrasena'];
			$log=$cone->query("SELECT * FROM usuario WHERE usuario='$usuario' and contrasena='$contrasena' and privilegio='usuario' and estado='activo'");
			if ($log->num_rows>0) {
				$row = mysqli_fetch_array($log);
				$_SESSION["usuario"] = $row['usuario'];
			  	print "<script>window.location='../usuario_registrado/index.php';</script>";
			}
		?>

		<?php
		//Validar administrador
			include("../administrador/conexion/conexion.php");
			$usuario= $_POST['usuario'];
			$contrasena= $_POST['contrasena'];
			$log=$cone->query("SELECT * FROM administrador WHERE usuario='$usuario' and contrasena='$contrasena' 
			and privilegio='administrador'and estado='activo'");
			if ($log->num_rows>0) {
				$row = mysqli_fetch_array($log);
				$_SESSION["usuario"] = $row['usuario'];
			  	print "<script>window.location='../administrador/index.php';</script>";
			}
		?>

		<?php 
		//Validar si no es ni usuario ni administrador
			require ("../administrador/conexion/conexion.php");
			if (isset($_SESSION['user_id'])) {
				$records= $cone->prepare('SELECT id, usuario, correo, contrasena, privilegio, estado FROM usuario WHERE id= :id');
				$records->bindparam(':id', $_SESSION['user_id']);
				$records->execute();
				$results= $records->fetch(PDO::FETCH_ASSOC);
				$user=null;
				if (count($results) > 0) {
					$user=$results;
				}
			}
			
print("<script>
        swal({
			title: 'Usuario inválido o incorrecto', 
			text: 'Vuelve a intentarlo',
			icon: 'warning',
			header='../login.php',
		}); 
		
	</script>");			
 ?>
 





</body>
</html>
