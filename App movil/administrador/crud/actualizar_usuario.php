 <!--Actualizar-->
  <?php

  $mysqli = new mysqli("localhost", "root", "", "contador"); 

  $id=$_POST['id'];
  $usuario = $_POST['usuario'];
  $contrasena=  $_POST['contrasena'];
  $codigo= $_POST['codigo'];
  $privilegio =  $_POST['privilegio'];
  $estado =  $_POST['estado'];  

  $sql = $mysqli->query ("UPDATE registro_usuario SET usuario='$usuario', contrasena='$contrasena', codigo='$codigo',  privilegio='$privilegio', estado='$estado' WHERE id='$id'");
?>  

   <SCRIPT LANGUAGE="javascript"> 
         alert("Contacto Actualizado"); 
     </SCRIPT> 
     <META HTTP-EQUIV='Refresh' CONTENT='0; URL=../php/registro_usuario.php'>