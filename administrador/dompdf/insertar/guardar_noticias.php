<!-- insertar -->
<?php
include ("../conexion/conexion.php");

$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$titulo=$_POST['titulo'];
$subtitulo=$_POST['subtitulo'];
$texto=$_POST['texto'];
$query = "INSERT INTO periodico (imagen, titulo, subtitulo, texto) values ('$imagen', '$titulo','$subtitulo', '$texto')";
$resultado = $cone->query($query);

if ($resultado)
  {
    print "<script>alert(\"Guardado exitosamente.\");window.location='../php/noticias.php';</script>";
  }
   else
   {
    echo "no se inserto";
   }
?> 
