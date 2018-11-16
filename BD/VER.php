
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
<?php include "navbar.php"; ?>
<p>
<?php
 
include("CONEXION/CONX.php");
 

$user_id=null;
$sql1= "SELECT * FROM estudiantes";
$query = $conexion->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
    
	<th>Nombre</th> 
	<th>Dirección</th>
	<th>Teléfono</th>
	<th>Email</th>
	<th>Sede</th>
	<th>Expediente</th>
	<th>Titulación</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
    
	<td><?php echo $r["Nombre"]; ?></td>
	<td><?php echo $r["Direccion"]; ?></td>
	<td><?php echo $r["Telefono"]; ?></td>
	<td><?php echo $r["Email"]; ?></td>
	<td><?php echo $r["centros_Sede"]; ?></td>
	<td><?php echo $r["Expediente"]; ?></td>
	<td><?php echo $r["Titulacion"]; ?></td>
	<td style="width:150px;">
		
		<a href="editar.php?Identificacion=<?php echo $r["Identificacion"];?>" class="btn btn-sm btn-warning">Editar</a>

		<td><a href="eliminar.php?Identificacion=<?php echo $r["Identificacion"];?>" class="btn btn-sm btn-danger">Eliminar</a></td>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="eliminar.php?id="+<?php echo $r["id"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>

<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

</p>
<p>
<?php

include("CONEXION/CONX.php");

$user_id=null;
$sql1= "select * from profesores";
$query = $conexion->query($sql1);
?>

<?php if($query->num_rows>0):?>
<p>
<table class="table table-bordered table-hover">
<thead>
   
	<th>Nombre</th>
	<th>Dirección</th>
	<th>Teléfono</th>
	<th>Email</th>
	<th>Departamento</th>
	<th>Área</th>
	<th>Materia</th>
	<th>Sede</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>

	<td><?php echo $r["Nombre"]; ?></td>
	<td><?php echo $r["Direccion"]; ?></td>
	<td><?php echo $r["Telefono"]; ?></td>
	<td><?php echo $r["Email"]; ?></td>
	<td><?php echo $r["departamentos_Departamento"]; ?></td>
	<td><?php echo $r["areas_Area"]; ?></td>
	<td><?php echo $r["Materia"]; ?></td>
	<td><?php echo $r["centros_Sede"]; ?></td>
	<td style="width:150px;">
		<a href="editar2.php?Identificacion=<?php echo $r["Identificacion"];?>" class="btn btn-sm btn-warning">Editar</a>

		<td><a href="eliminar2.php?Identificacion=<?php echo $r["Identificacion"];?>" class="btn btn-sm btn-danger">Eliminar</a></td>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="eliminar.php?id="+<?php echo $r["id"];?>;

			}

		});
		</script>
		
	</td>
</tr>
<?php endwhile;?>
</table>

<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

</p>
<p>
<?php

include "CONEXION/CONX.php";

$user_id=null;
$sql1= "SELECT * FROM personal";
$query = $conexion->query($sql1);
?>

<?php if($query->num_rows>0):?>
<p>
<table class="table table-bordered table-hover">
<thead>
   
	<th>Nombre</th>
	<th>Dirección</th>
	<th>Teléfono</th>
	<th>Email</th>
	<th>Unidad Administrativa</th>
	<th>Categoria</th>
	<th>Sede</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
    
	<td><?php echo $r["Nombre"]; ?></td>
	<td><?php echo $r["Direccion"]; ?></td>
	<td><?php echo $r["Telefono"]; ?></td>
	<td><?php echo $r["Email"]; ?></td>
	<td><?php echo $r["unidad_administrativa_Profesion"]; ?></td>
	<td><?php echo $r["Categoria"]; ?></td>
	<td><?php echo $r["centros_Sede"]; ?></td>
	<td style="width:150px;">
		<a href="editar3.php?>id=<?php echo $r["Identificacion"];?>" class="btn btn-sm btn-warning">Editar</a>
		<td><a href="eliminar3.php?Identificacion=<?php echo $r["Identificacion"];?>" class="btn btn-sm btn-danger">Eliminar</a></td>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="eliminar.php?id="+<?php echo $r["id"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>

<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

</p>
</body>
</html>
