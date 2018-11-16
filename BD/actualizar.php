 <?php
 
if(!empty($_POST))
{
  if(isset($_POST["nom"]) && isset ($_POST["dir"]) && isset ($_POST["tel"]) && isset  ($_POST["email"]) && isset($_POST["sed"]) && isset($_POST["exp"]) &&isset($_POST["tit"]))
  { 
  
    if($_POST["nom"]!="" && $_POST["dir"]!="" && $_POST["tel"]!="" && $_POST["email"]!="" && $_POST["sed"]!="" && $_POST["exp"]!="" && $_POST["tit"]!="")

    {
      
      include "CONEXION/CONX.php";
    
      $sql = "UPDATE estudiantes SET Nombre=\"$_POST[nom]\", Direccion=\"$_POST[dir]\", Telefono=\"$_POST[tel]\", Email=\"$_POST[email]\", centros_Sede=\"$_POST[sed]\", Expediente=\"$_POST[exp]\", Titulacion=\"$_POST[tit]\" where Identificacion=".$_POST["Identificacion"]; 
      $query = $conexion->query($sql);

      if($query!=null)
        {print "<script> alert(\"Actualizado exitosamente.\");window.location='VER.php';</script>";}
      else
        {print "<script> alert(\"No se pudo actualizar.\");window.location='VER.php';</script>";}
    }
  }
}


?> 