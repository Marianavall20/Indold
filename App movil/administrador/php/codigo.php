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
    <link rel="stylesheet" href="../css/index.css">
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

  
  <style>
      .codigo {
          margin-left: 100px;
          margin-top: -63px;
      }
      </style>
  
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
                    <li ><a href="formulario_usuario.php"> <i class="icon-padnote"></i>Formulario Usuario </a></li>
                    <li><a href="registro.php"> <i class="icon-grid"></i>Registro Trabajador </a></li>
                    <li><a href="registro_usuario.php"> <i class="icon-grid"></i>Registro Usuario </a></li>
                    <li class="active"><a href="codigo.php"> <i class="icon icon-bars"></i>Código del contador </a></li>
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
          <header class="page-header" id="caja1">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Formulario Usuario</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Código</li>
            </ul>
          </div>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">

            <!--Generador de qr-->

            <?php
                require('phpqrcode/qrlib.php'); //Agrega la libreria

                if(isset($_POST['generar'])){
                    //Verifica que no hay ningun dato por rellenar
                    if(!empty($_POST['cod'])){ 
                        //Crea la carpeta temp
                        $dir='temp/';  
                        //Pregunta si existe la variable dir y la crea
                        if(!file_exists($dir))
                            mkdir($dir); {
                            //Variables
                            $cod=$_POST['cod']; //Dato a generar qr
                            $tam=25; //Tamaño de la imagen qr
                            $filename=$dir.'test.png'; //Archivo qr donde se guarda la imagen
                            $marco=12; //marco

                            //clase Qrcode:: función png
                            Qrcode::png($cod, $filename, $tam, $marco);
                            echo '<img src="'.$filename. '" style="margin-left: 300px; margin-bottom: 30px";
                            height: 100px;/> ';

                            echo "<div class='alert alert-info' style='margin-top:400px; height: 70px; padding-top: 23px;
                            position: absolute; margin-left: 338px;'> Número del contador:  $cod </div>";
                            
                        }    
                    }   
                }
            ?>

            <div class="card-header d-flex align-items-center" style="width: 1300px; margin-top: 130px;">
                <h3 class="h4">Generar código del contador</h3>
            </div>
            <div class="card-body" id="formulario">
                <form action="codigo.php" method="post" class="form-horizontal">
                 <font color="white">
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label">Generar código</label>
                    <div class="col-sm-9">
                    <select name="cod" id="" class="form-control">
                    <option value="1"> Seleccione un registro</option>
                    
                </div>
                <?php 
                //Conección a la base de datos
                $objeto_mysqli=new mysqli('localhost', 'root', '', 'contador');

                //Consulta
                $query="SELECT codigo FROM registro_usuario";

                //Validar consulta
                $resultado=$objeto_mysqli->query($query);
                if ($resultado != false) {
                    $sql="SELECT * FORM 'registro_usuario'";
                }
                else{
                    echo "Error en la consulta";
                }

                //Extraer la informacion de $resultado
                for ($i=0; $i < $resultado->num_rows; $i++) { 
                    $fila_usuario=$resultado->fetch_assoc();
                    echo "<option>".$fila_usuario['codigo']."</option>";
                }

                $objeto_mysqli->close();
            ?>
                
            </select>
            <!-- Botones de cancelar y enviar -->
                <div class="form-group row">
                    <div class="col-sm-4 offset-sm-3">
                        <br>
                        <button type="submit" class="btn btn-primary" value="Generar" name="generar">Generar</button>
                        <button type="button" class="btn btn-secundary codigo" onclick="window.print()">Imprimir código</button>
                    </div>
                </div>


        </font>
    </form>
    </div>


                      </div>
            </div>
          </section>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Indold &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Administrador</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>
<?php
}else{
	echo '<script> window.location="../../login.php"; </script>';
}
?>