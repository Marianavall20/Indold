<?php

if(!empty($_GET)){
     include("../conexion/conexion2.php");

     $sql = "DELETE FROM contador WHERE id=".$_GET["id"];
     $query = $cone->query($sql);
     if($query!=null){
       print "<script>alert(\"Eliminado exitosamente.\");window.location='../php/factura.php';</script>";
     }else{
       print "<script>alert(\"No se pudo eliminar.\");window.location='../php/factura.php';</script>";

     }
}

?>

