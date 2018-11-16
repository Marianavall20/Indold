<html>
<head>
    <meta charset="utf-8">
<link rel="stylesheet" href="../css/m_factura.css">
<title></title>
</head>
<body>
   

<?php

include "../conexion/conexion.php";

$buscar=$_POST['busqueda'];
$sql1= "select * from factura where codigo='$buscar'";
$query = $cone->query($sql1);

?>

<?php if($query->num_rows>0):?>

  
<?php while ($r=$query->fetch_array()):?>



 
    </script>
  </td>
</tr>
<div class="usuario">
        <img src="../img/fondo.jpg" alt="">
        <div class="circulo">
            <img src="../img/usuario.png" alt="">
        </div>

        <h2><?php echo $r["suscriptor"]; ?></h2>
        <p>Usuario</p>

        <button>PDF</button>

        <div class="c1">
            <p>1099</p>
            <span>Consumo actual</span>
        </div>
        <div class="c2">
            <p>23,469</p>
            <span> Consumo mensual </span>  
        </div>
        <div class="c3">
            <p>6035</p>
            <span> Promedio </span> 
        </div>
    </div>



    <div class="factura1">
        <ul lis>
            <li> <a id="n" href="menu_factura.php">Activity </a></li>
            <li> <a class="active1" href="m_contador.php">Profile</a></li>
        </ul>

        <div class="b1">
            <p>Fecha límite sin recargo
            <span><?php echo $r["sin_recargo"]; ?></span></p>
        </div>

        <div class="b2">
            <p>Fecha límite con recargo
            <span><?php echo $r["con_recargo"]; ?></span></p>
        </div>

        <div class="b3">
            <p>Periodo facturado
            <span><?php echo $r["periodo_facturado"]; ?></span></p>
        </div>

        <div class="b4">
            <p># de cuentas vencidas
            <span><?php echo $r["cuentas_vencidas"]; ?></span></p>
        </div>


       <h1 id="consumo">Consumo</h1>
       <div id="linea"> ___________________________________________________________________ </div>

       <div class="enlaces">
           <ol>
               <li>Consumo desde: <?php echo $r["consumo_desde"]; ?></li>
               <li>Consumo hasta: <?php echo $r["consumo_hasta"]; ?></li>
               <li>Días de consumo: <?php echo $r["dias_consumo"]; ?></li>
               <li>Causa de No lectura: <?php echo $r["no_lectura"]; ?></li>
               <li>Lectura actual (m3): <?php echo $r["lectura_actual"]; ?></li>
               <li>Lectura anterior (m3): <?php echo $r["lectura_anterior"]; ?></li>
               <li>Consumo: <?php echo $r["consumo"]; ?></li>
               <li>Vertimiento: <?php echo $r["vertimiento"]; ?></li>
               <li>Promedio: <?php echo $r["promedio"]; ?></li>
               <li>Promedio del estrato: <?php echo $r["promedio_estrato"]; ?></li>
               <li>Fecha de último pago:<?php echo $r["ultimo_pago"]; ?> </li>
           </ol>
       </div>
    </div>
</body>
</html>
<?php endwhile;?>
</table>
<?php else:?>
  <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

    </thead>
   
