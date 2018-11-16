
<?php

include "Conexion.php";

$buscar=$_POST['busqueda'];
$sql1= "select * from factura where codigo='$buscar'";
$query = $Conexion->query($sql1);

?>

<?php if($query->num_rows>0):?>

      <div id="tabla">
<table class="registro">
<thead>
  <th>Id</th>
 

  
  <th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
  <td><?php echo $r["codigo"]; ?></td>

  
    
    </script>
  </td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
  <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

    </thead>
   
