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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
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
                    <li><a href="registro.php"> <i class="icon-grid"></i>Registro Trabajador </a></li>
                    <li><a href="registro_usuario.php"> <i class="icon-grid"></i>Registro Usuario </a></li>
                    <li class="active"><a href="factura.php"> <i class="fa fa-bar-chart"></i>Registro de consumo</a></li>
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
              <h2 class="no-margin-bottom">Factura</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid" id="contenedor">
            <ul class="breadcrumb" id="enlaces">
              <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Factura</li>
            </ul>
          </div>
          <section class="tables" >   
            <div class="container-fluid">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                      </div>
                    </div>

                    <header>
                    
                    <!--Ver-->
                    <?php
                    include("../conexion/conexion.php");

                    $user_id=null;
                    $sql1= "SELECT * from contador";
                    $query = $cone->query($sql1);
                    ?>

                    <?php if($query->num_rows>0):?>

                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Registro de consumo</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                            <th>Id</th>
                              <th>Código</th>
                              <th>Dirección</th>
                              <th>Nombres</th>
                              <th>Primer apellido</th>
                              <th>Segundo apellido</th>
                              <th>Número del contador</th>
                              <th>Lectura anterior</th>
                              <th>Lectura actual</th>
                              <th>Novedades</th>
                              <th>Foto</th>
                            </tr>
                          </thead>
                         <?php
      $mysqli = new mysqli("localhost", "root", "", "proyecto");   
      if ($mysqli->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      exit();
      }
      $consulta= "SELECT * FROM contador";
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<tr>";
          echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td><td>$fila[8]</td><td>$fila[9]</td><td>$fila[10]</td>";  
          echo"<td>";           
          echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-codigo='" .$fila[1] ."' data-direccion='" .$fila[2] ."' data-nombres='" .$fila[3] ."' data-primer_apellido='" .$fila[4] ."' data-segundo_apellido='" .$fila[5] ."' data-num_contador='" .$fila[6] ."' data-lectura_anterior='" .$fila[7] ."' data-lectura_actual='" .$fila[8] ."' data-novedades='" .$fila[9] ."' data-foto='" .$fila[10] ."' ><img src='../img/1editar.png'></span></a>";  
          echo"<td>";     
          echo "<a href='../crud/eliminar_consumo.php?id=" .$fila[0] ."'><img src='../img/1eliminar.png'></a>";

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
                        <h4>Editar registro de consumo</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="../crud/actualizar_consumo.php" method="POST">                          
                                  
                                  <input  id="id" name="id" type="hidden" ></input>       
                              <div class="form-group">
                                <label for="codigo">Código:</label>
                                <input class="form-control" id="codigo" name="codigo" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <input class="form-control" id="direccion" name="direccion" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="nombres">Nombres:</label>
                                <input class="form-control" id="nombres" name="nombres" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="primer_apellido">Primer apellido:</label>
                                <input class="form-control" id="primer_apellido" name="primer_apellido" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="segundo_apellido">Segundo apellido:</label>
                                <input class="form-control" id="segundo_apellido" name="segundo_apellido" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="num_contador">Número contador:</label>
                                <input class="form-control" id="num_contador" name="num_contador" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="lectura_anterior">Lectura anterior:</label>
                                <input class="form-control" id="lectura_anterior" name="lectura_anterior" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="lectura_actual">Lectura actual:</label>
                                <input class="form-control" id="lectura_actual" name="lectura_actual" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="novedades">Novedades:</label>
                                <input class="form-control" id="novedades" name="novedades" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="foto">Foto:</label>
                                <input class="form-control" id="foto" name="foto" type="text" ></input>
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
      var recipient1 = button.data('codigo')
      var recipient2 = button.data('direccion')
      var recipient3 = button.data('nombres')
      var recipient4 = button.data('primer_apellido')
      var recipient5 = button.data('segundo_apellido')
      var recipient6 = button.data('num_contador')
      var recipient7 = button.data('lectura_anterior')
      var recipient8 = button.data('lectura_actual')
      var recipient9 = button.data('novedades')
      var recipient10 = button.data('foto')
       // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
     
      var modal = $(this)    
      modal.find('.modal-body #id').val(recipient0)
      modal.find('.modal-body #codigo').val(recipient1)
      modal.find('.modal-body #direccion').val(recipient2)
      modal.find('.modal-body #nombres').val(recipient3) 
      modal.find('.modal-body #primer_apellido').val(recipient4) 
      modal.find('.modal-body #segundo_apellido').val(recipient5) 
      modal.find('.modal-body #num_contador').val(recipient6) 
      modal.find('.modal-body #lectura_anterior').val(recipient7)   
      modal.find('.modal-body #lectura_actual').val(recipient8)   
      modal.find('.modal-body #novedades').val(recipient9)   
      modal.find('.modal-body #foto').val(recipient10)       
    });
    
  </script>

        </table>
      </div>


      <?php else:?>
      <p class="alert alert-warning">No hay resultados</p>
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
          <?php
}else{
	echo '<script> window.location="../../login.php"; </script>';
}
?>
         