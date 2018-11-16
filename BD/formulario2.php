 <?php
include "CONEXION/CONX.php";

$user_id=null;
$sql1= "SELECT * FROM profesores WHERE Identificacion = ".$_GET["Identificacion"];
$query = $conexion->query($sql1);
$profesor = null;
if($query->num_rows>0)
{
 while ($r=$query->fetch_object())
 {
  $profesor=$r;
  break;
 }

}
?>

<?php if($profesor!=null):?>

<form role="form" method="POST" action="actualizar2.php">
  <div class="form-group">
    <label for="nom">Nombre</label>
    <input type="text" class="form-control"  name="nom" value="<?php echo $profesor->Nombre; ?>" required>
  </div>
  <div class="form-group">
    <label for="dir">Dirección</label>
    <input type="text" class="form-control" name="dir" value="<?php echo $profesor->Direccion; ?>" required>
  </div>
  <div class="form-group">
    <label for="tel">Teléfono</label>
    <input type="text" class="form-control" name="tel" value="<?php echo $profesor->Telefono; ?>" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $profesor->Email; ?>" required>
  </div>
  <div class="form-group">
    <label for="dep"> Departamento</label>
    <input type="text" class="form-control" name="dep" value="<?php echo $profesor->departamentos_Departamento; ?>" required>
  </div>
  <div class="form-group">
    <label for="ar">Área</label>
    <input type="text" class="form-control" name="ar" value="<?php echo $profesor->areas_Area; ?>" required>
  </div>
  <div class="form-group">
    <label for="mat">Materia</label>
    <input type="text" class="form-control" name="mat" value="<?php echo $profesor->Materia; ?>" required>
  </div>
  <div class="form-group">
    <label for="exp">Sede</label>
    <input type="text" class="form-control" name="sed" value="<?php echo $profesor->centros_Sede; ?>">
  </div>
  
  
<input type="text" name="Identificacion" value="<?php echo $profesor->Identificacion; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>


<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>





