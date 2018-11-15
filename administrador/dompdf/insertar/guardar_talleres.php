<!-- insertar -->
<?php
include ("../conexion/conexion.php");

$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$nombre=$_POST['nombre'];
$texto=$_POST['texto'];
$query = "INSERT INTO talleres (imagen, nombre, texto) values ('$imagen', '$nombre', '$texto')";
$resultado = $cone->query($query);

if ($resultado)
  {
    print "<script>alert(\"Guardado exitosamente.\");window.location='../php/talleres.php';</script>";
  }
   else
   {
    echo "no se insertó";
   }
?> 
