<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/ESTILO.css">
	<title>Base de Datos</title>
</head>
<body>



<table class="profesor">
<form action="VALIDACION/tablacon.php" method="POST">

<?php 

include("CONEXION/CONX.php");
/*$conexion=mysqli_connect($local,$user,$password,$db) or die ("Vuelve a intentar):(");
mysqli_select_db($db, $conexion) or die ("Vuelve a intentar):(");*/
$consltdep= ("SELECT * FROM departamentos");
$rdepa=mysqli_query($conexion, $consltdep);

?>

<?php

include("CONEXION/CONX.php");
/*$conexion=mysqli_connect($local,$user,$password,$db) or die ("Vuelve a intentar):(");
mysqli_select_db($db, $conexion) or die ("Vuelve a intentar):(");*/
$consltar= ("SELECT * FROM areas");
$rar=mysqli_query($conexion, $consltar);
?>

<?php

include("CONEXION/CONX.php");
/*$conexion=mysqli_connect($local,$user,$password,$db) or die ("Vuelve a intentar):(");
mysqli_select_db($db, $conexion) or die ("Vuelve a intentar):(");*/
$consltcen= ("SELECT * FROM centros");
$rcen=mysqli_query($conexion, $consltcen);
?>

<th>Profesor</th>

<tr>
<td>Nombre</td>
<td><input type="text" name="nom"></td>
</tr>
<tr>
<td>Dirección</td>
<td><input type="text" name="dir"></td>
</tr>
<tr>
<td>Telefono</td>
<td><input type="text" name="tel"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="em"></td>
</tr>
<tr>
<td>Departamento</td>
<td>
<select name="depa">
<option value="depa">Seleccione departamento</option>
<?php  
while($filer=mysqli_fetch_row($rdepa))
{
	echo "<option value='".$filer['1']."'>".$filer['1']."</option>";
} 
?>
</tr>
<tr>
<td>Área</td>
<td><select name="area">
<option value="area">Seleccione área</option>
<?php  
while($filer=mysqli_fetch_row($rar))
{
	echo "<option value='".$filer['1']."'>".$filer['1']."</option>";
} 
?>
</tr>
<td>Materia</td>
<td><input type="text" name="mat"></td>
</tr>
<tr>
<td>Sede</td>
<td><select name="sede">
<option value="sede">Seleccione sede</option>
<?php  
while($filer=mysqli_fetch_row($rcen))
{
	echo "<option value='".$filer['1']."'>".$filer['1']."</option>";
} 
?>
</tr>

<tr>
<td><p><input type="submit" id="Enviar" name="Enviar"></p></td>
</tr>
</form>
</table>

<table class="estudiante">
<form action="VALIDACION/tablacon.php" method="POST">

<?php 

include("CONEXION/CONX.php");
/*$conexion=mysqli_connect($local,$user,$password,$db) or die ("Vuelve a intentar):(");
mysqli_select_db($db, $conexion) or die ("Vuelve a intentar):(");*/
$conslts= ("SELECT * FROM centros");
$rs=mysqli_query($conexion, $conslts);

?>


<th>Estudiante</th>

<tr>
<td>Nombre</td>
<td><input type="text" name="nom2"></td>
</tr>
<tr>
<td>Dirección</td>
<td><input type="text" name="dir2"></td>
</tr>
<tr>
<td>Telefono</td>
<td><input type="text" name="tel2"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="em2"></td>
</tr>
<td>Sede</td>
<td><select name="sed">
<option value="sed">Seleccione sede</option>
<?php  
while($filer=mysqli_fetch_row($rs))
{
	echo "<option value='".$filer['1']."'>".$filer['1']."</option>";
} 
?>
</tr>
<tr>
<td>Número de expediente</td>
<td><input type="text" name="numex"></td>
</tr>
<tr>
<td>Titulación</td>
<td><input type="text" name="tit"></td>
</tr>
<tr>
<td><p><input type="submit" name="Enviar2"></p></td>
</tr>


</form>
</table>


<table class="personal">
<form action="VALIDACION/tablacon.php" method="POST">

<?php 

include("CONEXION/CONX.php");
/*$conexion=mysqli_connect($local,$user,$password,$db) or die ("Vuelve a intentar):(");
mysqli_select_db($db, $conexion) or die ("Vuelve a intentar):(");*/
$consltudad= ("SELECT * FROM unidad_administrativa");
$rudad=mysqli_query($conexion, $consltudad);

?>

<?php 

include("CONEXION/CONX.php");
/*$conexion=mysqli_connect($local,$user,$password,$db) or die ("Vuelve a intentar):(");
mysqli_select_db($db, $conexion) or die ("Vuelve a intentar):(");*/
$consed= ("SELECT * FROM centros");
$rsd=mysqli_query($conexion, $consed);

?>

<th>Personal</th>

<tr>
<td>Nombre</td>
<td><input type="text" name="nom3"></td>
</tr>
<tr>
<td>Dirección</td>
<td><input type="text" name="dir3"></td>
</tr>
<tr>
<td>Telefono</td>
<td><input type="text" name="tel3"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="em3"></td>
</tr>
<td>Unidad administrativa</td>
<td><select name="undad">
<option value="undad">Seleccione unidad</option>
<?php  
while($filer=mysqli_fetch_row($rudad))
{
	echo "<option value='".$filer['1']."'>".$filer['1']."</option>";
} 
?>
</tr>
<tr>
<td>Categoria</td>
<td><input type="text" name="cat"></td>
</tr>
<tr>
</tr>
<tr>
<td>Sede</td>
<td><select name="sedep">
<option value="sedep">Seleccione sede</option>
<?php  
while($filer=mysqli_fetch_row($rsd))
{
	echo "<option value='".$filer['1']."'>".$filer['1']."</option>";
} 
?>
</tr>
<td><p><input type="submit" name="Enviar3"></p></td>
</form>
</table>

</body>
</html>