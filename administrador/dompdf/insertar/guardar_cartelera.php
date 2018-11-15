<!-- insertar -->
<?php
include ("../conexion/conexion.php");

$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO cartelera (imagen) values ('$imagen')";
$resultado = $cone->query($query);

if ($resultado)
  {
    print "<script>alert(\"Guardado exitosamente.\");window.location='../php/cartelera.php';</script>";
  }
   else
   {
    echo "no se insertó";
   }
?> 
