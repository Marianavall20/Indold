<!-- insertar -->
<?php
include ("../conexion/conexion.php");

$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$titulo=$_POST['titulo'];
$texto=$_POST['texto'];
$query = "INSERT INTO patrimonio (imagen, titulo, texto) values ('$imagen', '$titulo', '$texto')";
$resultado = $cone->query($query);

if ($resultado)
  {
    print "<script>alert(\"Guardado exitosamente.\");window.location='../php/patrimonio.php';</script>";
  }
   else
   {
    echo "no se insertó";
   }
?> 
