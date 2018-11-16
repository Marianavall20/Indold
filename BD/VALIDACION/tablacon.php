 <?php  
/*P-P-E*/
if(isset($_POST['Enviar4'])) 
{

include('../CONEXION/CONX.php');

$iddep=$_POST['iden'];
$dep=$_POST['depart'];

mysqli_query($conexion, "INSERT INTO departamentos(Identificacion,Departamento) VALUES('$iddep','$dep')");
}
?>

<?php  
if (isset($_POST['Enviar5'])) 
{
	include('../CONEXION/CONX.php');

$idcen=$_POST['iden2'];
$sd=$_POST['sede'];

mysqli_query($conexion, "INSERT INTO centros(Identificacion,Sede) VALUES('$idcen','$sd')");
}
?>

<?php  
if (isset($_POST['Enviar6'])) 
{
	include('../CONEXION/CONX.php');

$idar=$_POST['iden3'];
$ar=$_POST['area'];

mysqli_query($conexion, "INSERT INTO areas(Identificacion,Area) VALUES('$idar','$ar')");
}
?>

<?php  
if (isset($_POST['Enviar7'])) 
{
	include('../CONEXION/CONX.php');

$idpr=$_POST['iden4'];
$pr=$_POST['prof'];

mysqli_query($conexion, "INSERT INTO unidad_administrativa(Identificacion,Profesion) VALUES('$idpr','$pr')");
}
?>

<?php  
if (isset($_POST['Enviar'])) 
{
	include('../CONEXION/CONX.php');

$nom=$_POST['nom'];
$dir=$_POST['dir'];
$tel=$_POST['tel'];
$ema=$_POST['em'];
$depar=$_POST['depa'];
$are=$_POST['area'];
$mate=$_POST['mat'];
$sed=$_POST['sede'];


mysqli_query($conexion, "INSERT INTO profesores(Nombre,Direccion,Telefono,Email,departamentos_Departamento,areas_Area,Materia,centros_Sede) VALUES('$nom','$dir','$tel','$ema','$depar','$are','$mate','$sed')");
}

?>

<script>
	alert("Guardado exitosamente");window.location="../VER.php";
</script>


<?php  
if (isset($_POST['Enviar3'])) 
{
	include('../CONEXION/CONX.php');

$nomp=$_POST['nom3'];
$dirp=$_POST['dir3'];
$telp=$_POST['tel3'];
$emap=$_POST['em3'];
$ua=$_POST['undad'];
$cate=$_POST['cat'];
$s=$_POST['sedep'];

mysqli_query($conexion, "INSERT INTO personal(Nombre,Direccion,Telefono,Email,unidad_administrativa_Profesion,Categoria,centros_Sede) VALUES('$nomp','$dirp','$telp','$emap','$ua','$cate','$s')");
}
?>
<script>
	alert("Guardado exitosamente");window.location="../VER.php";
</script>

<?php  
if (isset($_POST['Enviar2'])) 
{
	include('../CONEXION/CONX.php');

$nome=$_POST['nom2'];
$dire=$_POST['dir2'];
$tele=$_POST['tel2'];
$emae=$_POST['em2'];
$sedes=$_POST['sed'];
$exp=$_POST['numex'];
$tit=$_POST['tit'];

mysqli_query($conexion, "INSERT INTO estudiantes(Nombre,Direccion,Telefono,Email,centros_Sede,Expediente,Titulacion) VALUES('$nome','$dire','$tele','$emae','$sedes','$exp','$tit')");
}
?>
<script>
	alert("Guardado exitosamente");window.location="../VER.php";
</script>