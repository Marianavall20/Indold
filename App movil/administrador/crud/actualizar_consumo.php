 <!--Actualizar-->
  <?php

  $mysqli = new mysqli("localhost", "root", "", "proyecto"); 

  $id=$_POST['id'];
  $codigo = $_POST['codigo'];
  $direccion =  $_POST['direccion'];
  $nombres =  $_POST['nombres'];
  $primer_apellido =  $_POST['primer_apellido'];  
  $segundo_apellido =  $_POST['segundo_apellido'];
  $num_contador =  $_POST['num_contador'];
  $lectura_anterior =  $_POST['lectura_anterior']; 
  $lectura_actual= $_POST['lectura_actual'];     
  $novedades = $_POST['novedades'];
  $foto = $_POST['foto']; 
  

  $sql = $mysqli->query ("UPDATE contador SET codigo='$codigo', direccion='$direccion', nombres='$nombres',primer_apellido='$primer_apellido', segundo_apellido='$segundo_apellido', num_contador='$num_contador', lectura_anterior='$lectura_anterior', lectura_actual='$lectura_actual', novedades='$novedades', foto='$foto' WHERE id='$id'");
?>  

   <SCRIPT LANGUAGE="javascript"> 
         alert("Contacto Actualizado"); 
     </SCRIPT> 
     <META HTTP-EQUIV='Refresh' CONTENT='0; URL=../php/factura.php'>