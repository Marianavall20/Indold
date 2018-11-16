<?php  

if (!empty($_POST)) 
{
  if (isset($_POST["nom"]) && isset($_POST["dir"]) && isset($_POST["tel"]) && isset($_POST["email"]) && isset($_POST["dep"]) && isset($_POST["ar"]) && isset($_POST["mat"]) && isset($_POST["sed"])) 
  {
    if ($_POST["nom"]!="" && $_POST["dir"]!="" && $_POST["tel"]!="" && $_POST["email"]!="" && $_POST["dep"]!="" && $_POST["ar"]!="" && $_POST["mat"] && $_POST["sed"]) 
    {
      include "CONEXION/CONX.php";

      $sql="UPDATE profesores SET Nombre=\"$_POST[nom]\", Direccion=\"$_POST[dir]\", Telefono=\"$_POST[tel]\", Email=\"$_POST[email]\", departamentos_Departamento=\"$_POST[dep]\", areas_Area=\"$_POST[ar]\", Materia=\"$_POST[mat]\", centros_Sede=\"$_POST[sed]\" where Identificacion=".$_POST["Identificacion"];
      $query = $conexion->query($sql);

      if ($query!=null) 
      {
        print"<script> alert(\"Actualizado exitosamente.\");window.location='VER.php';</script>";
      }
      else 

      {
        print"<script> alert(\"No se pudo actualizar.\");window.location='VER.php';</script>";
      }    

    }
  }
}

?>