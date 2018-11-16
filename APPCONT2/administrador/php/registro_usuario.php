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
                    <li><a href="registro.php"> <i class="icon-grid"></i>Registro Trabajador </a></li>
                    <li class="active"><a href="registro_usuario.php"> <i class="icon-grid"></i>Registro Usuario </a></li>
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
              <li class="breadcrumb-item active">Registro usuario</li>
            </ul>
          </div>
          <section class="tables" >   
            <div class="container-fluid">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                      </div>
                    </div>
                    
                    <!--Ver-->
                    <?php
                    include("../conexion/conexion.php");

                    $user_id=null;
                    $sql1= "SELECT * from registro_usuario";
                    $query = $cone->query($sql1);
                    ?>

                    <?php if($query->num_rows>0):?>

                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Usuarios</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                            <th>Id</th>
                              <th>Usuario</th>
                              <th>Contraseña</th>
                              <th>Código del contador</th>
                              <th>Privilegio</th>
                              <th>Estado</th>

                            </tr>
                          </thead>
                         <?php
      $mysqli = new mysqli("localhost", "root", "", "contador");   
      if ($mysqli->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      exit();
      }
      $consulta= "SELECT * FROM registro_usuario";
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<tr>";
          echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td>";  
          echo"<td>";           
          echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-usuario='" .$fila[1] ."' data-contrasena='" .$fila[2] ."' data-privilegio='" .$fila[3] ."' data-estado='" .$fila[4] ."'><img src='../img/1editar.png'></span></a>";  
          echo"<td>";     
          echo "<a href='../crud/eliminar_usuario.php?id=" .$fila[0] ."'><img src='../img/1eliminar.png'></a>";

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
                       <form action="../crud/actualizar_usuario.php" method="POST">                          
                                  
                                  <input  id="id" name="id" type="hidden" ></input>       
                              <div class="form-group">
                                <label for="identificación">Usuario:</label>
                                <input class="form-control" id="usuario" name="usuario" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="nombres">Contraseña:</label>
                                <input class="form-control" id="contrasena" name="contrasena" type="password" ></input>
                              </div>
                              <div class="form-group">
                                <label for="nombres">Código del contador:</label>
                                <input class="form-control" id="codigo" name="codigo" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="primer_apellido">Privilegio:</label>
                                <input class="form-control" id="privilegio" name="privilegio" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="segundo_apellido">Estado:</label>
                                <input class="form-control" id="estado" name="estado" type="text" ></input>
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
      var recipient1 = button.data('usuario')
      var recipient2 = button.data('contrasena')
      var recipient3 = button.data('privilegio')
      var recipient4 = button.data('estado')
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
     
      var modal = $(this)    
      modal.find('.modal-body #id').val(recipient0)
      modal.find('.modal-body #usuario').val(recipient1)
      modal.find('.modal-body #contrasena').val(recipient2)
      modal.find('.modal-body #privilegio').val(recipient3) 
      modal.find('.modal-body #estado').val(recipient4)      
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
     
         