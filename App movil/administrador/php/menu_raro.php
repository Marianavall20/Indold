<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/m_factura.css">
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

<div class="container">
  <h2>Dynamic Tabs</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>



    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
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


    <div class="factura" id="menu_factura">

        <div class="b1">
            <p>Ruta:
            <span><?php echo $r["ruta"]; ?></span></p>

            <p>Suscriptor:
            <span><?php echo $r["suscriptor"]; ?></span></p>
        </div>

        <div class="b2">
            <p>Código:
            <span><?php echo $r["codigo"]; ?></span></p>

            <p>Estrato:
            <span><?php echo $r["estrato"]; ?></span></p>
        </div>

        <div class="b3">
            <p>Dirección:
            <span><?php echo $r["direccion"]; ?></span></p>

            <p>Uso:
            <span><?php echo $r["uso"]; ?></span></p>
        </div>

        <div class="b4">
            <p>Código Postal
            <span><?php echo $r["codigo_postal"]; ?></span></p>

            <p>Código Contador
            <span><?php echo $r["codigo_contador"]; ?></span></p>
        </div>
    </div>
    </div>


    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
       <div class="factura1" >
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
    </div>



    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

<?php endwhile;?>
</table>
<?php else:?>
  <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

    </thead>

</body>
</html>
