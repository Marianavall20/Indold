<?php  

include("conex.php");

$a=null;
$b=("SELECT * FROM clientes");
$c= $conexion->query($b);
?>

<?php if($c->num_rows>0):?>
<table>
	<thead>
		<th>Identificación</th>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Dirección</th>
		<th>Población</th>
		<th>Código Postal</th>
		<th>Teléfono</th>
		<th>Email</th>
	</thead>

<?php while ($s=$c->fetch_array()):?>

<tr>
    <td><?php echo $s["Id_cliente"]; ?></td>
	<td><?php echo $s["nombre"]; ?></td>
	<td><?php echo $s["apellidos"]; ?></td>
	<td><?php echo $s["direccion"]; ?></td>
	<td><?php echo $s["poblacion"]; ?></td>
	<td><?php echo $s["codigopostal"]; ?></td>
	<td><?php echo $s["telefono"]; ?></td>
	<td><?php echo $s["email"]; ?></td>
    <td>
	<a href="editarac.php?Id=<?php echo $s["Id"];?>">Editar</a>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p>No hay resultados</p>
<?php endif;?>
