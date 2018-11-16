<?php
include "CONEXION/CONX.php";

$user_id=null;
$sql1= "SELECT * FROM estudiantes WHERE Identificacion = ".$_GET["Identificacion"];
$query = $conexion->query($sql1);
$estudiante = null;
if($query->num_rows>0)
{
 while ($r=$query->fetch_object())
 {
  $estudiante=$r;
  break;
 } 
 
}
?>

<?php if($estudiante!=null):?>

<form role="form" method="POST" action="actualizar.php">
  <div class="form-group">
    <label for="nom">Nombre</label>
    <input type="text" class="form-control"  name="nom" value="<?php echo $estudiante ->Nombre; ?>" required>
  </div>
  <div class="form-group">
    <label for="dir">Dirección</label>
    <input type="text" class="form-control" name="dir" value="<?php echo $estudiante->Direccion; ?>" required>
  </div>
  <div class="form-group">
    <label for="tel">Teléfono</label>
    <input type="text" class="form-control" name="tel" value="<?php echo $estudiante->Telefono; ?>" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $estudiante->Email; ?>" required>
  </div>
  <div class="form-group">
    <label for="exp">Sede</label>
    <input type="text" class="form-control" name="sed" value="<?php echo $estudiante->centros_Sede; ?>">
  </div>
  
  <div class="form-group">
    <label for="exp">Expediente</label>
    <input type="text" class="form-control" name="exp" value="<?php echo $estudiante->Expediente; ?>" required>
  </div>
  <div class="form-group">
    <label for="tit">Titulación</label>
    <input type="text" class="form-control" name="tit" value="<?php echo $estudiante->Titulacion; ?>" required>
  </div>
  <input type="hidden" name="Identificacion" value="<?php echo $estudiante->Identificacion; ?>">

  <button type="submit" class="btn btn-default">Actualizar</button>
</form>


<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>





