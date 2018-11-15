<!-- insertar -->
<?php
include ("../conexion/conexion.php");

$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$codigo=$_POST['codigo'];
$nombre_ejemplar=$_POST['nombre_ejemplar'];
$genero=$_POST['genero'];
$num_paginas=$_POST['num_paginas'];
$fecha_publicacion=$_POST['fecha_publicacion'];
$autor=$_POST['autor'];
$ciudad=$_POST['ciudad'];
$editorial=$_POST['editorial'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$disponibilidad=$_POST['disponibilidad'];
$num_copias=$_POST['num_copias'];

$query = "INSERT INTO libros (imagen, codigo, nombre_ejemplar, genero, num_paginas, fecha_publicacion, autor, ciudad, editorial, direccion, telefono, disponibilidad, num_copias) values ('$imagen', '$codigo', '$nombre_ejemplar' , '$genero', '$num_paginas', '$fecha_publicacion', '$autor', '$ciudad', '$editorial', '$direccion', '$telefono', '$disponibilidad' , '$num_copias')";
$resultado = $cone->query($query);

if ($resultado)
  {
    print "<script>alert(\"Guardado exitosamente.\");window.location='../mostrar/ver_catalogos.php';</script>";
  }
   else   {
    echo "no se insertó";
   }
?> 
