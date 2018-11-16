<?php
if (isset($_POST ['registrar'])) {
  include ("../conexion/conexion.php");
  $usuario= $_POST ['usuario'];
  $correo= $_POST ['correo'];
  $contrasena= $_POST ['contrasena'];
  $privilegio= $_POST ['privilegio'];
  $estado= $_POST ['estado'];
  mysqli_query($cone, "INSERT INTO registro_admi (usuario,correo,contrasena,privilegio,estado) VALUES
  ('$usuario','$correo','$contrasena', '$privilegio', '$estado')");
    print "<script>alert(\"Guardado exitosamente.\");window.location='login.php';</script>";
}
?>