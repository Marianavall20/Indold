<?php
session_start();
include("conexion/conexion.php");

if(isset($_SESSION['usuario']))
{?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Administrador</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>BIBLIOTECA-<span>WEB</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="php/cerrar.php">Salir</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->

        <!-- Menú-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="img/perfil.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Administrador</h5>

          <!-- menu -->
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Inicio</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
               <i class="glyphicon glyphicon-paperclip"></i>
              <span>Items</span>
              </a>
            <ul class="sub">
             <li><a href="php/patrimonio.php">Patrimonio</a></li>
             <li><a href="php/cartelera.php">Cartelera cultural</a></li>
             <li><a href="php/charlas.php">Charlas</a></li>
             <li><a href="php/talleres.php">Talleres</a></li>
             <li><a href="php/catalogos.php">Catálogos</a></li>
             <li><a href="php/horario.php">Horario</a></li>
             <li><a href="php/noticias.php">Noticias</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="  glyphicon glyphicon-pencil"></i>
              <span>Crud</span>
              </a>
            <ul class="sub">
              <li><a href="mostrar/ver_patrimonio.php">Patrimonio</a></li>
              <li><a href="mostrar/ver_cartelera.php">Cartelera cultural</a></li>
              <li><a href="mostrar/ver_charlas.php">Charlas</a></li>
              <li><a href="mostrar/ver_talleres.php">Talleres</a></li>
              <li><a href="mostrar/ver_catalogos.php">Catálogos</a></li>
              <li><a href="mostrar/ver_horario.php">Horario</a></li>
              <li><a href="mostrar/ver_noticias.php">Noticias</a></li>
            </ul>
          </li>
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="  glyphicon glyphicon-erase"></i>
              <span>Registros</span>
              </a>
            <ul class="sub">
              <li><a href="mostrar/ver_empresa.php">Prestamo empresa</a></li>
              <li><a href="mostrar/ver_persona_natural.php">Prestamo persona natural</a></li>
               <li><a href="mostrar/solicitud_prestamo.php">solicitud prestamo libros</a></li>
              <li><a href="mostrar/ver_prestamo_libros.php">Prestamos de libros</a></li>
               <li><a href="mostrar/contactenos.php">Contáctenos</a></li>
              <li><a href="mostrar/tu_biblioteca.php">Tu biblioteca</a></li>
               <li><a href="mostrar/gustos.php">Tus gustos</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="  glyphicon glyphicon-pushpin"></i>
              <span>Prestamo del lugar</span>
              </a>
            <ul class="sub">
              <li><a href="php/persona_natural.php">Persona natural</a></li>
              <li><a href="php/empresa.php">Empresa</a></li>
              </ul>
          </li>
          <li class="sub-menu">
            <a href="php/prestamo_de_libros.php">
              <i class="glyphicon glyphicon-book"></i>
              <span>Prestamo de libros</span>
              </a>
          </li>
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="glyphicon glyphicon-paperclip"></i>
              <span>Auditoría</span>
              </a>
            <ul class="sub">
              <li><a href="../Respaldo/index.php">Respaldo</a></li>
              <li><a href="php/bitacora.php">Bitacora</a></li>
           </ul>
          </li>
         
          </li>
        </ul>
        <!-- Cierre menú-->
      </div>
    </aside>
    <!--sidebar end-->
    
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>Gustos</h3>
            </div>
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span>100</span></li>
                <li><span>80</span></li>
                <li><span>60</span></li>
                <li><span>40</span></li>
                <li><span>20</span></li>
                <li><span>0</span></li>
              </ul>
              <div class="bar">
                <div class="title">POESIA</div>
                <div class="value tooltips" data-original-title="85" data-toggle="tooltip" data-placement="top">85%</div>
              </div>
              <div class="bar ">
                <div class="title">ROMANCE</div>
                <div class="value tooltips" data-original-title="50" data-toggle="tooltip" data-placement="top">50%</div>
              </div>
              <div class="bar ">
                <div class="title">TERROR</div>
                <div class="value tooltips" data-original-title="60" data-toggle="tooltip" data-placement="top">60%</div>
              </div>
              <div class="bar ">
                <div class="title">MISTERIO</div>
                <div class="value tooltips" data-original-title="45" data-toggle="tooltip" data-placement="top">45%</div>
              </div>
              <div class="bar">
                <div class="title">DRAMA</div>
                <div class="value tooltips" data-original-title="32" data-toggle="tooltip" data-placement="top">32%</div>
              </div>
              <div class="bar ">
                <div class="title">POLÍCIACO</div>
                <div class="value tooltips" data-original-title="62" data-toggle="tooltip" data-placement="top">62%</div>
              </div>
              <div class="bar">
                <div class="title">FANTASÍA</div>
                <div class="value tooltips" data-original-title="75" data-toggle="tooltip" data-placement="top">75%</div>
              </div>
            </div>
          
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>USUARIOS VISITANTES</h3>
            </div>
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span>100</span></li>
                <li><span>80</span></li>
                <li><span>60</span></li>
                <li><span>40</span></li>
                <li><span>20</span></li>
                <li><span>0</span></li>
              </ul>
              <div class="bar">
                <div class="title">ENERO</div>
                <div class="value tooltips" data-original-title="85" data-toggle="tooltip" data-placement="top">85%</div>
              </div>
              <div class="bar ">
                <div class="title">FEBRERO</div>
                <div class="value tooltips" data-original-title="50" data-toggle="tooltip" data-placement="top">50%</div>
              </div>
              <div class="bar ">
                <div class="title">MARZO</div>
                <div class="value tooltips" data-original-title="60" data-toggle="tooltip" data-placement="top">60%</div>
              </div>
              <div class="bar ">
                <div class="title">ABRIL</div>
                <div class="value tooltips" data-original-title="45" data-toggle="tooltip" data-placement="top">45%</div>
              </div>
              <div class="bar">
                <div class="title">MAYO</div>
                <div class="value tooltips" data-original-title="32" data-toggle="tooltip" data-placement="top">32%</div>
              </div>
              <div class="bar ">
                <div class="title">JUNIO</div>
                <div class="value tooltips" data-original-title="62" data-toggle="tooltip" data-placement="top">62%</div>
              </div>
              <div class="bar">
                <div class="title">JULIO</div>
                <div class="value tooltips" data-original-title="75" data-toggle="tooltip" data-placement="top">75%</div>
              </div>
            </div>
            <!--custom chart end-->
            

  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  
</body>

</html>
<?php
}else{
	echo '<script> window.location="../../usuario/iniciar_usu/index.php"; </script>';
}
?>