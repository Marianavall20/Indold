 <!--Actualizar-->
  <?php

  $mysqli = new mysqli("localhost", "root", "", "contador"); 

  $id=$_POST['id'];
  $ruta= $_POST['ruta'];
  $codigo =  $_POST['codigo'];
  $direccion =  $_POST['direccion'];
  $codigo_postal =  $_POST['codigo_postal'];  
  $suscriptor =  $_POST['suscriptor'];
  $estrato =  $_POST['estrato'];
  $uso =  $_POST['uso']; 
  $codigo_contador= $_POST['codigo_contador'];     
  $sin_recargo = $_POST['sin_recargo'];
  $con_recargo = $_POST['con_recargo']; 
  $periodo_facturado =  $_POST['periodo_facturado']; 
  $cuentas_vencidas =  $_POST['cuentas_vencidas']; 
  $consumo_desde =  $_POST['consumo_desde']; 
  $consumo_hasta =  $_POST['consumo_hasta']; 
  $dias_consumo =  $_POST['dias_consumo']; 
  $no_lectura =  $_POST['no_lectura']; 
  $lectura_actual =  $_POST['lectura_actual']; 
  $lectura_anterior =  $_POST['lectura_anterior']; 
  $consumo =  $_POST['consumo']; 
  $vertimiento =  $_POST['vertimiento']; 
  $promedio =  $_POST['promedio']; 
  $promedio_estrato =  $_POST['promedio_estrato']; 
  $ultimo_pago =  $_POST['ultimo_pago']; 
  $tipo_usuario =  $_POST['tipo_usuario']; 
  

  $sql = $mysqli->query ("UPDATE factura SET ruta='$ruta', codigo='$codigo', direccion='$direccion', codigo_postal='$codigo_postal', suscriptor='$suscriptor', estrato='$estrato', uso='$uso', codigo_contador='$codigo_contador', sin_recargo='$sin_recargo', con_recargo='$con_recargo', periodo_facturado='$periodo_facturado', cuentas_vencidas='$cuentas_vencidas',consumo_desde='$consumo_desde', consumo_hasta='$consumo_hasta', dias_consumo='$dias_consumo',no_lectura='$no_lectura', lectura_actual='$lectura_actual', lectura_anterior='$lectura_anterior', consumo='$consumo', vertimiento='$vertimiento', promedio='$promedio', promedio_estrato=' $promedio_estrato', ultimo_pago='$ultimo_pago', tipo_usuario='$tipo_usuario' WHERE id='$id'");
?>  

   <SCRIPT LANGUAGE="javascript"> 
         alert("Factura Actualizado"); 
     </SCRIPT> 
     <META HTTP-EQUIV='Refresh' CONTENT='0; URL=../php/ver_factura.php'>