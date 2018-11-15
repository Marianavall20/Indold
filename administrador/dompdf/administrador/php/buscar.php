
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
<link rel="stylesheet" type="text/css" href="css/m_factura.css">
<meta charset="utf-8">
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



    <div class="factura">
        <ul >
            <li> <a class="active" href="buscar.php">Activity </a></li>
            <li> <a href="m_contador.php">Profile</a></li>
        </ul>

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
<?php endwhile;?>
</table>
<?php else:?>
  <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

    </thead>
   
