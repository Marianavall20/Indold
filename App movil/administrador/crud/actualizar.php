 <!--Actualizar-->
  <?php

  $mysqli = new mysqli("localhost", "root", "", "contador"); 

  $id=$_POST['id'];
  $identificacion = $_POST['identificacion'];
  $nombres =  $_POST['nombres'];
  $primer_apellido =  $_POST['primer_apellido'];
  $segundo_apellido =  $_POST['segundo_apellido'];  
  $telefono =  $_POST['telefono'];
  $direccion =  $_POST['direccion'];
  $email =  $_POST['email']; 
  $estado= $_POST['estado'];     
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena']; 
  $id= 
  

  $sql = $mysqli->query ("UPDATE registro_trabajadores SET identificacion='$identificacion', nombres='$nombres', primer_apellido='$primer_apellido',segundo_apellido='$segundo_apellido', telefono='$telefono', direccion='$direccion', email='$email', estado='$estado', usuario='$usuario', contrasena='$contrasena' WHERE id='$id'");
?>  

   <SCRIPT LANGUAGE="javascript"> 
         alert("Contacto Actualizado"); 
     </SCRIPT> 
     <META HTTP-EQUIV='Refresh' CONTENT='0; URL=../php/registro.php'>