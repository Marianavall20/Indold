<?php

if(!empty($_GET)){
     include("../conexion/conexion.php");

     $sql = "DELETE FROM factura WHERE id=".$_GET["id"];
     $query = $cone->query($sql);
     if($query!=null){
       print "<script>alert(\"Eliminado exitosamente.\");window.location='../php/ver_factura.php';</script>";
     }else{
       print "<script>alert(\"No se pudo eliminar.\");window.location='../php/ver_factura.php';</script>";

     }
}

?>
