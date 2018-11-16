  <?php

if(!empty($_POST))
{
  if(isset($_POST["nom"]) && isset ($_POST["dir"]) && isset ($_POST["tel"]) && isset  ($_POST["ema"]) && isset($_POST["pro"]) && isset($_POST["cat"]) &&isset($_POST["sed"]))
  {
  
    if($_POST["nom"]!="" && $_POST["dir"]!="" && $_POST["tel"]!="" && $_POST["ema"]!="" && $_POST["pro"]!="" && $_POST["cat"]!="" && $_POST["sed"]!="")

    {
      
      include "CONEXION/CONX.php";
    
      $sql = "UPDATE personal SET Nombre=\"$_POST[nom]\", Direccion=\"$_POST[dir]\", Telefono=\"$_POST[tel]\", Email=\"$_POST[ema]\", unidad_administrativa_Profesion=\"$_POST[pro]\", Categoria=\"$_POST[cat]\", centros_Sede=\"$_POST[sed]\" where Identificacion=".$_POST["id"]; 
      $query = $conexion->query($sql);

      if($query!=null)
        {print "<script> alert(\"Actualizado exitosamente.\");window.location='VER.php';</script>";}
      else
        {print "<script> alert(\"No se pudo actualizar.\");window.location='VER.php';</script>";}
    }
  }
}


?>