<?php
if (isset($_POST['enviar'])) {
$costo_fijo= 1383.35;
include ("../conexion/conexion.php");


$ruta=$_POST['ruta'];
$codigo=$_POST['codigo'];
$direccion=$_POST['direccion'];
$codigo_postal=$_POST['codigo_postal'];
$suscriptor=$_POST['suscriptor'];
$estrato=$_POST['estrato'];
$uso=$_POST['uso'];
$codigo_contador=$_POST['codigo_contador'];
$sin_recargo=$_POST['sin_recargo'];
$con_recargo=$_POST['con_recargo'];
$periodo_facturado=$_POST['periodo_facturado'];
$cuentas_vencidas=$_POST['cuentas_vencidas'];
$consumo_desde=$_POST['consumo_desde'];
$consumo_hasta=$_POST['consumo_hasta'];
$dias_consumo=$_POST['dias_consumo'];
$no_lectura=$_POST['no_lectura'];
$lectura_actual=$_POST['lectura_actual'];
$lectura_anterior=$_POST['lectura_anterior'];
$consumo=$_POST['consumo'];
$vertimiento=$_POST['vertimiento'];
$promedio=$_POST['promedio'];
$promedio_estrato=$_POST['promedio_estrato'];
$ultimo_pago=$_POST['ultimo_pago'];
$tipo_usuario=$_POST['tipo_usuario'];
$consumo_final =($consumo * $costo_fijo);
                             


mysqli_query($cone,"INSERT INTO factura (ruta, codigo, direccion, codigo_postal, suscriptor, estrato, uso, codigo_contador, sin_recargo, con_recargo, periodo_facturado, cuentas_vencidas, consumo_desde, consumo_hasta, dias_consumo, no_lectura, lectura_actual, lectura_anterior, consumo, vertimiento, promedio, promedio_estrato, ultimo_pago, tipo_usuario, consumo_final) values ('$ruta', '$codigo', '$direccion', '$codigo_postal', '$suscriptor', '$estrato', '$uso','$codigo_contador','$sin_recargo', '$con_recargo', '$periodo_facturado', '$cuentas_vencidas', '$consumo_desde', '$consumo_hasta', '$dias_consumo', '$no_lectura', '$lectura_actual', '$lectura_anterior', '$consumo', '$vertimiento', '$promedio', '$promedio_estrato', '$ultimo_pago', '$tipo_usuario', '$consumo_final')");
print "<script>alert(\"Guardado exitosamente.\");window.location='../php/registro_factura.php';</script>";
}

?>