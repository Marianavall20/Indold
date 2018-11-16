<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                        <th>Id</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Identidad</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Email</th>
                        <th>Usuario</th>                        
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
<?php
      $mysqli = new mysqli("localhost", "root", "", "contador");   
      if ($mysqli->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      exit();
      }
      $consulta= "SELECT * FROM registro_trabajadores";
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<tr>";
          echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td>";  
          echo"<td>";           
          echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-nombres='" .$fila[1] ."' data-apellidos='" .$fila[2] ."' data-identidad='" .$fila[3] ."' data-telefono='" .$fila[4] ."' data-direccion='" .$fila[5] ."' data-email='" .$fila[6] ."' data-usuario='" .$fila[7] ."' data-contrasenia='" .$fila[8] ."' data-confirmar_contrasenia='" .$fila[9] ."' data-privilegio='" .$fila[10] ."' ><img src='../../imgadmin/plus.png'></span></a>";  
          echo"<td>";     
          echo "<a href='Eliminar.php?id=" .$fila[0] ."'><img src='../../imgadmin/cancel.png'></a>";

          echo "</td>";
          echo "</tr>";
        }
        $resultado->close();
      }
      $mysqli->close();    
      
  

?>
      </tr>                
                     
</table>       
 


<!--Ventana modal para editar trabajador -->

 <div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Contacto</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="Actualizar.php" method="POST">                          
                                  
                                  <input  id="id" name="id" type="hidden" ></input>       
                              <div class="form-group">
                                <label for="nombre">Nombres:</label>
                                <input class="form-control" id="nombres" name="nombres" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="edad">Apellidos:</label>
                                <input class="form-control" id="apellidos" name="apellidos" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="direccion">Identidad:</label>
                                <input class="form-control" id="identidad" name="identidad" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="direccion">Telefono:</label>
                                <input class="form-control" id="telefono" name="telefono" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <input class="form-control" id="direccion" name="direccion" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="direccion">Email:</label>
                                <input class="form-control" id="email" name="email" type="text" ></input>
                              </div>
                              <div class="form-group">
                            <label >Usuario:</label>
                            <input class="form-control" id="usuario" name="usuario" type="text" placeholder="Usuario"></input>
                          </div>
                          <div class="form-group">
                            <label >Contraseña:</label>
                            <input class="form-control" id="contrasenia" name="contrasenia" type="password" placeholder="contraseña"></input>
                          </div>
                          <div class="form-group">
                            <label >Confirmar contraseña:</label>
                            <input class="form-control" id="confirmar_contrasenia" name="confirmar_contrasenia" type="password" placeholder="Confirmar contraseña"></input>
                          </div>
                          <div class="form-group">
                            <label >Privilegio:</label>
                            <select type="text" placeholder="&#128477; Ingrese papel empresarial" id="privilegio" name="privilegio"><option>1</option><option>2</option> required </select>
                          </div>

                              
                       
                    </div>
                    <div class="modal-footer">
                         <button type="submit" class="btn btn-info">Enviar </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div> 
</div>
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>   
  <script>       
      $('#editUsu').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('id')
      var recipient1 = button.data('nombres')
      var recipient2 = button.data('apellidos')
      var recipient3 = button.data('identidad')
      var recipient4 = button.data('telefono')
      var recipient5 = button.data('direccion')
      var recipient6 = button.data('email')
      var recipient7 = button.data('usuario')
      var recipient8 = button.data('contrasenia')
      var recipient9 = button.data('confirmar_contrasenia')
      var recipient10 = button.data('privilegio')
       // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
     
      var modal = $(this)    
      modal.find('.modal-body #id').val(recipient0)
      modal.find('.modal-body #nombres').val(recipient1)
      modal.find('.modal-body #apellidos').val(recipient2)
      modal.find('.modal-body #identidad').val(recipient3) 
      modal.find('.modal-body #telefono').val(recipient4) 
      modal.find('.modal-body #direccion').val(recipient5) 
      modal.find('.modal-body #email').val(recipient6) 
      modal.find('.modal-body #usuario').val(recipient7)   
      modal.find('.modal-body #contrasenia').val(recipient8)   
      modal.find('.modal-body #confirmar_contrasenia').val(recipient9)   
      modal.find('.modal-body #privilegio').val(recipient10)       
    });
    
  </script>

  <!--Actualizar-->
  <?php

  $mysqli = new mysqli("localhost", "root", "", "recursos_humanos");  
  
  $id = $_POST['id'];
  $nombres = $_POST['nombres'];
  $primer_apellido =  $_POST['primer_apellido'];
  $segundo_apellido =  $_POST['segundo_apellido'];
  $identidad =  $_POST['identidad'];  
  $telefono =  $_POST['telefono'];
  $direccion =  $_POST['direccion'];
  $email =  $_POST['email'];    
  $usuario = $_POST['usuario'];
  $contrasenia = $_POST['contrasenia']; 
  $estado= $_POST['estado'];  

  $sql = $mysqli->query ("UPDATE empleados SET nombres='$nombres', primer_apellido='$primer_apellido', segundo_apellido='$segundo_apellido',identidad='$identidad', telefono='$telefono', direccion='$direccion', email='$email', usuario='$usuario', contrasenia='$contrasenia',  estado='$estado' WHERE id='$id'");
?>  

   <SCRIPT LANGUAGE="javascript"> 
         
     </SCRIPT> 
     <META HTTP-EQUIV='Refresh' CONTENT='0; URL=Registro.php'>";