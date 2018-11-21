<?php
session_start();
include("conexion.php");

if(isset($_SESSION['usuario'])) {?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Datos curiosos</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
       <link href="../css/curiosidades.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/menuhorizontal.css">
  <script src="https://www.google.com/jsapi"></script>
</head>

<body class="fix-header fix-sidebar card-no-border">
 <div id="main-wrapper">
       
        <!-- Topbar header - style you can find in pages.scss -->     
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">              
                <div class="navbar-header">                    
                </div>
                
                <div class="navbar-collapse">
                    
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
     
                                     <!-- Start Page Content -->
<?php

include "conexion.php";

$sql1= "select id from factura";
$query = $Conexion->query($sql1);
?>
<?php if($query->num_rows>0):?>                       
                    </li> 
                    </ul>
                    <ul>
                    <div class="user">
                          <img src="../png/user.png">
<?php while ($r=$query->fetch_array()):?>  
                    </div>                      
                    </ul>                   
                
                    <ul class="navbar-nav my-lg-0">                     
                        <!-- Profile -->                      
                    <div class="dropdown">
                    <a class="dropdown-toggle "  data-toggle="dropdown"><h3 class="perfil"><?php echo $r["suscriptor"]; ?><span class="caret"></span></h3></a>
                    <ul class="dropdown-menu">
                     
                     <li><a href="salir.php">Cerrar sesión</a></li>
           
                    </ul>
                    </div>
                    </ul>
                </div>
            </nav>
        </header>
     
        <!-- End Topbar header -->
<!--Menú lateral-->
   <div id="main-wrapper">   
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                      <li> <a class="waves-effect waves-dark" href="factura.php" aria-expanded="false"><i class="mdi mdi-timetable"></i><span class="hide-menu">Inicio</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="dashboard.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Consumo</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="curiosidades.php" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">Curiosidades</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="leyes.php" aria-expanded="false"><i class="mdi mdi-note"></i><span class="hide-menu">Legislación</span></a>
                        </li>
                    </ul>
                   
                </nav>
                <!-- End Sidebar navigation -->
            </div>
           </aside>
        
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- Page wrapper  -->
      
        <div class="page-wrapper">
          
            <!-- Container fluid  -->
          
            <div class="container-fluid">
             
                <!-- Bread crumb and right sidebar toggle -->
             
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Curiosidades</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Usuario</a></li>
                            <li class="breadcrumb-item active">Curiosidades</li>
                        </ol>
                    </div>                   
                </div>
               
                <!-- End Bread crumb and right sidebar toggle -->
              
                <!-- Start Page Content -->
               
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                    
          <div class="content-inner">
          <!-- Page Header-->
        
            <div class="container-fluid">
              <h2 class="no-margin-bottom" id="sub">Datos Curiosos</h2>
            </div>
          

            <!--Cajas-->
          <div class="c1">
            <img src="../png/001-arbol.png" alt="">
            <p>Un solo árbol pierde por evaporación 265 litros de agua por dí­a. Una hectárea de maí­z evapora por dí­a más de 30 mil litros de agua.
            </p>
          </div>

          <div class="c2">
            <p> Durante un perí­odo de 100 años, una molécula de agua pasa 98 años en el océano, 20 meses en forma de hielo, 2 semanas en lagos y rí­os y menos de una semana en la atmósfera.
            </p>
          </div>     

            <div class="c3">
            <img src="../png/003-copos-de-nieve.png" alt="">
            <p>El 97% del agua se encuentra en los océanos, y el 2% permanece congelada.
            </p>
          </div>

            <div class="c4">
            <p>Para que el agua sea salada, basta con que contenga una milésima parte de su peso en sal.
            </p>
          </div>

            <div class="c5">
            <img src="../png/002-soltar.png" alt="">
            <p>El agua congelada pesa un 9% menos que el agua en estado lí­quido. Es por eso que el hielo flota sobre el agua.
            </p>
          </div>

            <div class="c6">
            <p>Más de 1100 millones de personas en el mundo carecen de acceso directo a fuentes de agua potable. Millones de mujeres y niños deben caminar más de 10 kilómetros diarios para conseguir agua potable.
            </p>
          </div>

            <div class="c7">
            <img src="../png/pinguino.png" alt="">
            <p>El agua congelada pesa un 9% menos que el agua en estado lí­quido. Es por eso que el hielo flota sobre el agua.
            </p>
          </div>

            <div class="c8">
            <p> Cada año se arrojan al mar más de 450 kilómetros cúbicos de aguas servidas. Para diluir esta polución se utilizan 6000 kilómetros cúbicos adicionales de agua dulce.
            </p>
          </div>
                  
                   
        
                <!-- End PAge Content -->
            
      </div>
                         </div>
                       </div>
                    </div>
</div>
                                      
  <?php endwhile;?>

<?php else:?>
    <p >No hay resultados</p>
<?php endif;?> 
            
            <!-- End Container fluid  -->
         
            <!-- footer -->
       
            <footer class="footer">
                © 2018 Indold
            </footer>
        
            <!-- End footer -->           
        </div>
       
        <!-- End Page wrapper  -->
  
    </div>
  
    <!-- End Wrapper -->

    <!-- All Jquery -->

    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.min.js"></script>
</body>


</html>

<?php
}else{
	echo '<script> window.location="../../../login.php"; </script>';
}
?>
