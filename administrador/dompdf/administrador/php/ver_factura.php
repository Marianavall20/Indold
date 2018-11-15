<?php
session_start();
include("../conexion/conexion.php");

if(isset($_SESSION['usuario'])) {?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/normas.css">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>

         <!--Menú horizontal-->
   <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>

          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="../index.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Bootstrap </span><strong>Dashboard</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>

              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Buscar-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!--Cerrar cuenta-->
                <li class="nav-item"><a href="cerrar.php" class="nav-link logout"> <span class="d-none d-sm-inline">Cerrar</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <!--Menú vertical-->
      <div class="page-content d-flex align-items-stretch" id="menu"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center" >
            <!--Imagen administrador-->
            <div class="avatar"><img src="../img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Nombre del Administrador</h1>
              <p>Administrador</p>
            </div>
          </div>
          
 <!--Item menú-->
          <ul class="list-unstyled">
                    <li><a href="../index.php"> <i class="icon-home"></i>Inicio </a></li>
                    <li><a href="formulario.php"> <i class="icon-padnote"></i>Formulario Trabajador </a></li>
                    <li><a href="formulario_usuario.php"> <i class="icon-padnote"></i>Formulario Usuario </a></li>
                    <li class="active"><a href="registro.php"> <i class="icon-grid"></i>Registro Trabajador </a></li>
                    <li><a href="registro_usuario.php"> <i class="icon-grid"></i>Registro Usuario </a></li>
                    <li><a href="factura.php"> <i class="fa fa-bar-chart"></i>Registro de consumo</a></li>
                    <li><a href="registro_factura.php"> <i class="fa fa-bar-chart"></i>Formulario factura</a></li>
                    <li><a href="ver_factura.php"> <i class="fa fa-bar-chart"></i>Factura</a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-page"></i>Normas ambientales</a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="decreto.php">Decretos</a></li>
                        <li><a href="ley.php">Leyes</a></li>
                        <li><a href="resolucion.php">Resoluciones</a></li>
                      </ul>
                    </li>
                     <li><a href="curiosidades.php"> <i class="icon-paper-airplane"></i>Datos curiosos </a></li>
                    

        </nav>
        <!--Cierre menú-->

           <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" id="registro">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Registro</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid" id="contenedor">
            <ul class="breadcrumb" id="enlaces">
              <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Registro</li>
            </ul>
          </div>
          <section class="tables" >   
            <div class="container-fluid">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                      </div>
                    </div>
                    
                    
 <div id="buscar">
<form method="POST" action="menu.php">

<input type="text" name="busqueda" placeholder="Realice una búsqueda" id="busqueda">
<button type="submit" class="btn btn-link link" value="Realice una búsqueda"><i class="icon-search"></i></button>

</form>
</div>

 
                    <!--Ver-->
                    <?php
                    include("../conexion/conexion.php");

                    $user_id=null;
                    $sql1= "SELECT * from factura";
                    $query = $cone->query($sql1);
                    ?>

                    <?php if($query->num_rows>0):?>

                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Factura</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
<th>Id</th>
<th>Ruta</th>
<th>Código</th>
<th>Dirección</th>
<th>Código postal</th>
<th>Suscriptor</th>
<th>Estrato</th>
<th>Uso</th>
<th>Codigo contador</th>
<th>Sin recargo</th>
<th>con recargo</th>
<th>periodo facturado</th>
<th>cuentas vencidas</th>
<th>consumo desde</th>
<th>consumo hasta</th>
<th>dias consumo</th>
<th>no lectura</th>
<th>lectura actual</th>
<th>lectura anterior</th>
<th>consumo</th>
<th>vertimiento</th>
<th>promedio</th>
<th>promedio estrato</th>
<th>ultimo pago</th>
<th>Tipo de usuario</th>
                            </tr>
                          </thead>
                         <?php
      $mysqli = new mysqli("localhost", "root", "", "contador");   
      if ($mysqli->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      exit();
      }
      $consulta= "SELECT * FROM factura";
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<tr>";
          echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td><td>$fila[8]</td><td>$fila[9]</td><td>$fila[10]</td><td>$fila[11]</td><td>$fila[12]</td><td>$fila[13]</td><td>$fila[14]</td><td>$fila[15]</td><td>$fila[16]</td><td>$fila[17]</td><td>$fila[18]</td><td>$fila[19]</td><td>$fila[20]</td><td>$fila[21]</td><td>$fila[22]</td><td>$fila[23]</td><td>$fila[24]</td>";  
          echo"<td>";           
          echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-ruta='" .$fila[1] ."' data-codigo='" .$fila[2] ."' data-direccion='" .$fila[3] ."' data-codigo_postal='" .$fila[4] ."' data-suscriptor='" .$fila[5] ."' data-estrato='" .$fila[6] ."' data-uso='" .$fila[7] ."' data-codigo_contador='" .$fila[8] ."' data-sin_recargo='" .$fila[9] ."' data-con_recargo='" .$fila[10] ."' data-periodo_facturado='" .$fila[11] ."' data-cuentas_vencidas='" .$fila[12] ."' data-consumo_desde='" .$fila[13] ."' data-consumo_hasta='" .$fila[14] ."'data-dias_consumo='" .$fila[15] ."'data-no_lectura='" .$fila[16] ."'data-lectura_actual='" .$fila[17] ."'data-lectura_anterior='" .$fila[18] ."'data-consumo='" .$fila[19] ."'data-vertimiento='" .$fila[20] ."'data-promedio='" .$fila[21] ."'data-promedio_estrato='" .$fila[22] ."'data-ultimo_pago='" .$fila[23] ."'data-tipo_usuario='" .$fila[24] ."' ><img src='../img/1editar.png'></span></a>";  
          echo"<td>";     
          echo "<a href='../crud/eliminar_factura.php?id=" .$fila[0] ."'><img src='../img/1eliminar.png'></a>";

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
                        <h4>Editar Factura</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="../crud/actualizar_factura.php" method="POST">                          
                                  
                                  <input  id="id" name="id" type="hidden" ></input>       
                              <div class="form-group">
                                <label for="ruta">Ruta:</label>
                                <input class="form-control" id="ruta" name="ruta" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="codigo">Código:</label>
                                <input class="form-control" id="codigo" name="codigo" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <input class="form-control" id="direccion" name="direccion" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="codigo_postal">Código postal:</label>
                                <input class="form-control" id="codigo_postal" name="codigo_postal" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="suscriptor">Suscriptor:</label>
                                <input class="form-control" id="suscriptor" name="suscriptor" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="estrato">Estrato:</label>
                                <input class="form-control" id="estrato" name="estrato" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="uso">Uso:</label>
                                <input class="form-control" id="uso" name="uso" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="codigo_contador">Código contador:</label>
                                <input class="form-control" id="codigo_contador" name="codigo_contador" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="sin_recargo">Sin recargo:</label>
                                <input class="form-control" id="sin_recargo" name="sin_recargo" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="con_recargo">Con recargo:</label>
                                <input class="form-control" id="con_recargo" name="con_recargo" type="text" ></input>
                              </div> 
                              <div class="form-group">
                                <label for="periodo_facturado">Periodo facturado:</label>
                                <input class="form-control" id="periodo_facturado" name="periodo_facturado" type="text" ></input>
                              </div><div class="form-group">
                                <label for="cuentas_vencidas">Cuentas vencidas:</label>
                                <input class="form-control" id="cuentas_vencidas" name="cuentas_vencidas" type="text" ></input>
                              </div><div class="form-group">
                                <label for="consumo_desde">Consumo desde:</label>
                                <input class="form-control" id="consumo_desde" name="consumo_desde" type="text" ></input>
                              </div><div class="form-group">
                                <label for="consumo_hasta">Consumo hasta:</label>
                                <input class="form-control" id="consumo_hasta" name="consumo_hasta" type="text" ></input>
                              </div><div class="form-group">
                                <label for="dias_consumo">Días consumo:</label>
                                <input class="form-control" id="dias_consumo" name="dias_consumo" type="text" ></input>
                              </div> 
                              <div class="form-group">
                                <label for="no_lectura">No lectura:</label>
                                <input class="form-control" id="no_lectura" name="no_lectura" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="lectura_actual">Lectura actual:</label>
                                <input class="form-control" id="lectura_actual" name="lectura_actual" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="lectura_anterior">Lectura anterior:</label>
                                <input class="form-control" id="lectura_anterior" name="lectura_anterior" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="consumo">Consumo:</label>
                                <input class="form-control" id="consumo" name="consumo" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="vertimiento">Vertimiento:</label>
                                <input class="form-control" id="vertimiento" name="vertimiento" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="promedio">Promedio:</label>
                                <input class="form-control" id="promedio" name="promedio" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="promedio_estrato">Promedio estrato:</label>
                                <input class="form-control" id="promedio_estrato" name="promedio_estrato" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="ultimo_pago">Ultimo pago:</label>
                                <input class="form-control" id="ultimo_pago" name="ultimo_pago" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="tipo_usuario">Tipo de usuario:</label>
                                <input class="form-control" id="tipo_usuario" name="tipo_usuario" type="text" ></input>
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
  <script src="../../../js/jquery.min.js"></script>
  <script src="../../../js/bootstrap.min.js"></script>   
  <script>       
      $('#editUsu').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('id')
      var recipient1 = button.data('ruta')
      var recipient2 = button.data('codigo')
      var recipient3 = button.data('direccion')
      var recipient4 = button.data('codigo_postal')
      var recipient5 = button.data('suscriptor')
      var recipient6 = button.data('estrato')
      var recipient7 = button.data('uso')
      var recipient8 = button.data('codigo_contador')
      var recipient9 = button.data('sin_recargo')
      var recipient10 = button.data('con_recargo')
      var recipient11 = button.data('periodo_facturado')
      var recipient12 = button.data('cuentas_vencidas')
      var recipient13 = button.data('consumo_desde')
      var recipient14 = button.data('consumo_hasta')
      var recipient15 = button.data('dias_consumo')
      var recipient16 = button.data('no_lectura')
      var recipient17 = button.data('lectura_actual')
      var recipient18 = button.data('lectura_anterior')
      var recipient19 = button.data('consumo')
      var recipient20 = button.data('vertimiento')
      var recipient21 = button.data('promedio')
      var recipient22 = button.data('promedio_estrato')
      var recipient23 = button.data('ultimo_pago')
      var recipient24 = button.data('tipo_usuario')
      

       // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
     
      var modal = $(this)    
      modal.find('.modal-body #id').val(recipient0)
      modal.find('.modal-body #ruta').val(recipient1)
      modal.find('.modal-body #codigo').val(recipient2)
      modal.find('.modal-body #direccion').val(recipient3) 
      modal.find('.modal-body #codigo_postal').val(recipient4) 
      modal.find('.modal-body #suscriptor').val(recipient5) 
      modal.find('.modal-body #estrato').val(recipient6) 
      modal.find('.modal-body #uso').val(recipient7)   
      modal.find('.modal-body #codigo_contador').val(recipient8)   
      modal.find('.modal-body #sin_recargo').val(recipient9)   
      modal.find('.modal-body #con_recargo').val(recipient10) 
      modal.find('.modal-body #periodo_facturado').val(recipient11) 
      modal.find('.modal-body #cuentas_vencidas').val(recipient12)
      modal.find('.modal-body #consumo_desde').val(recipient13)
      modal.find('.modal-body #consumo_hasta').val(recipient14)
      modal.find('.modal-body #dias_consumo').val(recipient15)
      modal.find('.modal-body #no_lectura').val(recipient16)
      modal.find('.modal-body #lectura_actual').val(recipient17)
      modal.find('.modal-body #lectura_anterior').val(recipient18)
      modal.find('.modal-body #consumo').val(recipient19)
      modal.find('.modal-body #vertimiento').val(recipient20)
      modal.find('.modal-body #promedio').val(recipient21)
      modal.find('.modal-body #promedio_estrato').val(recipient22)
      modal.find('.modal-body #ultimo_pago').val(recipient23)
      modal.find('.modal-body #tipo_usuario').val(recipient24)

         
    });
    
  </script>

        </table>
      </div>


      <?php else:?>
      print "<script>alert(\"No hay resultados.\");window.location='ver_factura.php';</script>"
      <?php endif;?>

         </tr>
         </tbody>
         </table>
         </div>
         </div>
         </div>
       </div>
       </div>
        </div>
          </section>




<!--?php include("../../footer/footer.php") ?-->
</body>

<?php
}else{
	echo '<script> window.location="../../login.php"; </script>';
}
?>
         