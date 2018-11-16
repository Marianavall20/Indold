<?php  
include "CONEXION/CONX.php";

$user_id=null;
$sql1="SELECT * FROM personal WHERE Identificacion = " .$_GET["Identificacion"];
$query= $conexion->query($sql1);
$personal= null;
 
if ($query->num_rows>0) 
{
 while ($r=$query->fetch_object()) 
 {
   $personal=$r;
   break;
 }
}
?>

<?php if ($personal!=null):?>

<form role="form" method="POST" action="actualizar3.php">
  
  <div class="form-group">
   <label for="nom">Nombre</label> 
   <input type="text" name="nom" class="form-control" value="<?php echo $personal->Nombre; ?>"> 
  </div>
  <div class="form-group">
   <label for="dir">Dirección</label>
   <input type="text" name="dir" class="form-control" value="<?php echo $personal->Direccion; ?>"> 
  </div>
  <div class="form-group">
   <label for="tel">Telefono</label>
   <input type="text" name="tel" class="form-control" value="<?php echo $personal->Telefono; ?>"> 
  </div>
  <div class="form-group">
   <label for="ema">Email</label>
   <input type="text" name="ema" class="form-control" value="<?php echo $personal->Email; ?>"> 
  </div>
  <div class="form-group">
   <label for="pro">Profesión</label>
   <input type="text" name="pro" class="form-control" value="<?php echo $personal->unidad_administrativa_Profesion; ?>"> 
  </div>
  <div class="form-group">
   <label for="cat">Categoria</label>
   <input type="text" name="cat" class="form-control" value="<?php echo $personal->Categoria; ?>"> 
  </div>
  <div class="form-group">
   <label for="sed">Sede</label>
   <input type="text" name="sed" class="form-control" value="<?php echo $personal->centros_Sede; ?>"> 
  </div>

  <input type="hidden" name="Identificacion" value="<?php echo $personal->Identificacion; ?>">
  <button type="submit" class="btn btn-default"> Actualizar </button>
</form>
<?php else: ?>
  <p class="alert alert-danger"> 404 No se encuentra</p>
<?php endif; ?>