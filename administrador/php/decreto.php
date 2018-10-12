<?php
session_start();
include("../conexion/conexion.php");

if(isset($_SESSION['usuario'])) {?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Decretos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/normas.css">
    <!-- Font Awesome CSS-->
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
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
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
      <div class="page-content d-flex align-items-stretch"> 
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
                    <li><a href="factura.php"> <i class="fa fa-bar-chart"></i>Registro de consumo</a></li>
                    <li><a href="registro_factura.php"> <i class="fa fa-bar-chart"></i>Formulario factura</a></li>
                    <li><a href="ver_factura.php"> <i class="fa fa-bar-chart"></i>Factura</a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-page"></i>Normas ambientales</a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li class="active"><a href="decreto.php">Decretos</a></li>
                        <li><a href="ley.php">Leyes</a></li>
                        <li><a href="resolucion.php">Resoluciones</a></li>
                      </ul>
                    </li>
                     <li><a href="curiosidades.php"> <i class="icon-paper-airplane"></i>Datos curiosos </a></li>
                    

        </nav>
        <!--Cierre menú-->

        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" id="caja1">
            <div class="container-fluid">
              <h2 class="no-margin-bottom" id="sub">Decreto sobre el agua</h2>
            </div>
          </header>
        
           <!-- Breadcrumb-->
           <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb" >
              <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Decretos</li>
            </ul>
          </div>

          <!--Decretos-->
          <a  class="caja1" href="http://www.minambiente.gov.co/images/GestionIntegraldelRecursoHidrico/pdf/Legislaci%C3%B3n_del_agua/Decreto_Ley_2811_1974.pdf" target="_blank">
           Decreto 2811 de 1974
          </a>

          <a  class="caja2" href="http://www.minambiente.gov.co/images/GestionIntegraldelRecursoHidrico/pdf/Legislaci%C3%B3n_del_agua/Decreto_1933.pdf" target="_blank">
           Decreto 1933 de 1994
          </a>
          
          <a  class="caja3" href="http://www.minambiente.gov.co/images/GestionIntegraldelRecursoHidrico/pdf/Legislaci%C3%B3n_del_agua/Decreto_3100.pdf" target="_blank">
           Decreto 3100 de 2003
          </a>

          <a  class="caja4" href="http://www.minambiente.gov.co/images/GestionIntegraldelRecursoHidrico/pdf/Legislaci%C3%B3n_del_agua/Decreto_3440.pdf" target="_blank">
           Decreto 3440 de 2004
          </a>

          <a  class="caja5" href="http://www.minambiente.gov.co/images/GestionIntegraldelRecursoHidrico/pdf/Legislaci%C3%B3n_del_agua/Decreto_4742.pdf" target="_blank">
           Decreto 4742 de 2005
          </a>

          <a  class="caja6" href="http://www.minambiente.gov.co/images/GestionIntegraldelRecursoHidrico/pdf/Legislaci%C3%B3n_del_agua/Decreto_2570.pdf2.pdf" target="_blank">
           Decreto 2570 de 2007
          </a>

          <a  class="caja7" href="http://www.minambiente.gov.co/images/GestionIntegraldelRecursoHidrico/pdf/Legislaci%C3%B3n_del_agua/Decreto_3930_octubre_de_2010.pdf" target="_blank">
           Decreto 3930 de 2010
          </a>

          <!--Fin decretos-->

          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Indold &copy; 2018</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Consumo de agua</p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="../js/front.js"></script>
  </body>
</html>

<?php
}else{
	echo '<script> window.location="../../login.php"; </script>';
}
?>