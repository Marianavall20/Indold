<html>
<head>
<link rel="stylesheet" href="../css/menu_factura.css">
<title></title>
</head>
<body>


<?php
include("../conexion/conexion.php");

$user_id=null;
$sql1= "SELECT * from factura";
$query = $cone->query($sql1);
?>

<?php if($query->num_rows>0):?>

<div class="card-header d-flex align-items-center">
                      <h3 id="nombre">Factura</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                           

                          <?php while ($r=$query->fetch_array()):?>
                          <tbody>
                            
                              
<tr>
<?php echo $r["ruta"]; ?>
<td><?php echo $r["codigo"]; ?></td>
<td><?php echo $r["direccion"]; ?></td>
<td><?php echo $r["codigo_postal"]; ?></td>
<td><?php echo $r["suscriptor"]; ?></td>
<td><?php echo $r["estrato"]; ?></td>
<td><?php echo $r["uso"]; ?></td>
<td><?php echo $r["codigo_contador"]; ?></td>
<td><?php echo $r["sin_recargo"]; ?></td>
<td><?php echo $r["con_recargo"]; ?></td>
<td><?php echo $r["periodo_facturado"]; ?></td>
<td><?php echo $r["cuentas_vencidas"]; ?></td>
<td><?php echo $r["consumo_desde"]; ?></td>
<td><?php echo $r["consumo_hasta"]; ?></td>
<td><?php echo $r["dias_consumo"]; ?></td>
<td><?php echo $r["no_lectura"]; ?></td>
<td><?php echo $r["lectura_actual"]; ?></td>
<td><?php echo $r["lectura_anterior"]; ?></td>
<td><?php echo $r["consumo"]; ?></td>
<td><?php echo $r["vertimiento"]; ?></td>
<td><?php echo $r["promedio"]; ?></td>
<td><?php echo $r["promedio_estrato"]; ?></td>
<td><?php echo $r["ultimo_pago"]; ?></td>
</tr>


</script>
</td>
</tr>
<?php endwhile;?>
</table>
</div>


<?php else:?>
<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>



    <div class="usuario">
        <img src="../img/fondo.jpg" alt="">
        <div class="circulo">
            <img src="../img/usuario.png" alt="">
        </div>

        <h2><?php echo $r["suscriptor"]; ?></h2>
        <p>Usuario</p>

        <button>PDF</button>

        <div class="c1">
            <p><?php echo $r["promedio"]; ?></p>
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
</body>
</html>