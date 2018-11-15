<?php
session_start();
include("Conexion.php");

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
    <title>Legislación</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
       <link href="curiosidades.css" rel="stylesheet">
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
  <link rel="stylesheet" type="text/css" href="../css/leyes.css">
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
                            
                    </li> 
                    </ul>
                    <ul>
                    <div class="user">
                          <img src="../png/user.png">
                    </div>                      
                    </ul>                   
           <?php

include "Conexion.php";

$sql1= "select * from factura";
$query = $Conexion->query($sql1);
?>
<?php if($query->num_rows>0):?>     
                    <ul class="navbar-nav my-lg-0">  
                    <?php while ($r=$query->fetch_array()):?>                     
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
                    <div class="text-center m-t-30">
                        <a href="salir.php" class="btn btn-danger cerrar"><i class="fa fa-arrow-left" aria-hidden="true"></i> Cerrar sesión</a>
                    </div>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
           </aside>
        <style type="text/css">
             .cerrar{
                    margin-top: 195px;
                    }
        </style>
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- Page wrapper  -->
      
        <div class="page-wrapper">
          
            <!-- Container fluid  -->
          
            <div class="container-fluid">
             
                <!-- Bread crumb and right sidebar toggle -->
             
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Legislación</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Usuario</a></li>
                            <li class="breadcrumb-item active">Legislación</li>
                        </ol>
                    </div>                   
                </div>
               
                <!-- End Bread crumb and right sidebar toggle -->
              
                <!-- Start Page Content -->
               
                <div class="row ">
                    <div class="col-12">
                        <div class="card box">
                                    
          <div class="content-inner">
          <!-- Page Header-->
        
                        <div class="info">
                            <p class="nare">El consumo de agua se encuentra reglamentado por diferentes leyes, acuerdos y decretos. 
                            <p></p>
                            <p class="nare">En nuestra región la encargada de esto es CORNARE (Corporación autonoma regional de las cuencas de los rios Negro y Nare).
                            <p></p>
                            <p class="nare">El consumo de agua se encuentra reglamentado por diferentes leyes, acuerdos y decretos.</p>
                        </div>
                            <h4>Leyes ambientales</h4> 

                            <!--Divs leyes-->
                            <div class="ley1">
                                <img src="../png/document.png" class="circ">
                                    <a  class="caja1" href="http://www.minambiente.gov.co/images/GestionIntegraldelRecursoHidrico/pdf/Legislaci%C3%B3n_del_agua/Ley_23_de_1973.pdf" target="_blank">
                                            <h6> Ley 23 de 1973</h6></a>
                                                <p class="p1"> Por la cual se conceden facultades extraordinarias al Presidente de la República para expedir el Código de Recursos Naturales y protección al medio ambiente y se dictan otras disposiciones.
                                                </p>
                            </div>                          
                        
                         <div class="ley2">
                                <img src="../png/document.png" class="circ">
                                    <a  class="caja1" href="http://www.minambiente.gov.co/images/GestionIntegraldelRecursoHidrico/pdf/Legislaci%C3%B3n_del_agua/Ley_10_1978.pdf" target="_blank">
                                            <h6> Ley 10 de 1978</h6></a>
                                                 <p class="p1"> Por medio de la cual se dictan normas sobre mar territorial, zona económica exclusiva, plataforma continental, y se dictan otras disposiciones. 
                                                </p>
                                         
                         </div>

                        <div class="ley3">
                                <img src="../png/document.png" class="circ">
                                    <a  class="caja1" href= "http://www.minambiente.gov.co/images/GestionIntegraldelRecursoHidrico/pdf/Legislaci%C3%B3n_del_agua/Ley_99.pdf" target="_blank">        <h6>  Ley 99 de 1993</h6></a>
                                                    <p class="p1"> Por la cual se crea el Ministerio del Medio Ambiente, se reordena el Sector Público encargado de la gestión y conservación del medio ambiente y los recursos naturales renovables, se organiza el Sistema Nacional Ambiental, SINA, y se dictan otras disposiciones.

                                                    </p>
                         </div>

                        <div class="ley4">
                                <img src="../png/document.png" class="circ">
                                    <a  class="caja1" href="http://www.minambiente.gov.co/images/GestionIntegraldelRecursoHidrico/pdf/Legislaci%C3%B3n_del_agua/Ley_373.pdf" target="_blank">
                                    <h6>  Ley 373 de 1997</h6></a>
                                       <p class="p1"> Por la cual se establece el programa para el uso eficiente y ahorro del agua.</p>
                                         
                        </div>

                      
                                  
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
    <script src="js/../jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/../waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/../sidebarmenu.js"></script>
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
