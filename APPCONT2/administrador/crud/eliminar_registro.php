<?php

if(!empty($_GET)){
     include("../conexion/conexion.php");

     $sql = "DELETE FROM registro_trabajadores WHERE id=".$_GET["id"];
     $query = $cone->query($sql);
     if($query!=null){
       print "<script>alert(\"Eliminado exitosamente.\");window.location='../php/registro.php';</script>";
     }else{
       print "<script>alert(\"No se pudo eliminar.\");window.location='../php/registro.php';</script>";

     }
}

?>
