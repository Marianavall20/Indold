<?php
session_start();
include("Conexion.php");

if(isset($_SESSION['usuario'])) {?>

<?php
include("Conexion.php");

$user_id=null;
$sql1= "SELECT * from factura";
$query = $Conexion->query($sql1);
?>


<?php
$conexion = mysql_connect("www.biblioteca-web.com", "bibliot1", "adfghgfds");
mysql_select_db("contador", $conexion);

$meses = array('', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

for ($x=1; $x<=12;$x=$x+1){
  $dinero[$x]=0;

}

//Año actual//
$anno=date('Y');

$sql=mysql_query("SELECT * FROM consumo");

while($row=mysql_fetch_array($sql)){

  $y=date("Y", strtotime($row['mes'])); //Extrae el año //

  $month=(int)date("m", strtotime($row['mes'])); //Extrae el mes //

  if($y==$ano){
  $diner[$month]=$dinero[$month]+$row['consumo'];
  }
}
?>

<html>
<head>
  <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Factura</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../css/colors/blue.css" id="theme" rel="stylesheet">
    <script src="https://www.google.com/jsapi"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/menuhorizontal.css">
  <!-- Custom Theme Scripts -->
  <script src="../../build/js/custom.min.js"></script>

</head>
<body class="fix-header fix-sidebar card-no-border">
   
    <!-- Preloader - style you can find in spinners.css -->  
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
 
    <!-- Main wrapper - style you can find in pages.scss -->
    
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
                
                                <!-- Start Page Content -->
<?php

include "Conexion.php";

$sql1= "select * from factura";
$query = $Conexion->query($sql1);
?>
<?php if($query->num_rows>0):?>

                    <ul class="navbar-nav my-lg-0">  

                        <?php while ($r=$query->fetch_array()):?>  

                 
                                        
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
     
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
    
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
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            
            <!-- End Bottom points-->
        </aside>
   
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      
        <!-- Page wrapper  -->
    
        <div class="page-wrapper">
        
            <!-- Container fluid  -->
          
            <div class="container-fluid">
              
                <!-- Bread crumb and right sidebar toggle -->
              
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Inicio</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Usuario</a></li>
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div>
                  
                </div>
                
                <!-- End Bread crumb and right sidebar toggle -->
          

               <div class="row box">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                      
                        <div class="card">
                            <img class="card-img-top" src="../../assets/images/background/profile-bg.jpg" alt="Card image cap">
                            <div class="card-block little-profile text-center">
                                <div class="pro-img"><img src="../../assets/images/users/images.png" alt="user" /></div>
                                <h3 class="m-b-0"><?php echo $r["codigo"]; ?></h3>
                                <p><?php echo $r["suscriptor"]; ?></p>
                                <a href="dompdf/Factura.php" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Exportar</a>
                                <div class="row text-center m-t-20">
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light"><?php echo $r["lectura_actual"]; ?></h3><small>Consumo actual</small></div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">$<?php echo $r["consumo_final"]; ?></h3><small>Valor a pagar</small></div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">1383,35</h3><small>Cargo fijo</small></div>
                                </div>
                            </div>

                        </div>
                        </div>
                        
                        <!-- Column -->
                        <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card factura">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Usuario</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Consumo</a> </li>
                                
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    
                                      <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Ruta</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $r["ruta"]; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Código</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $r["codigo"]; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Dirección</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $r["direccion"]; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Código Postal</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $r["codigo_postal"]; ?></p>
                                            </div>
                                             <div class="col-md-3 col-xs-6"> <strong>Suscriptor</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $r["suscriptor"]; ?></p>
                                            </div>
                                             <div class="col-md-3 col-xs-6"> <strong>Estrato</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $r["estrato"]; ?></p>
                                            </div>
                                             <div class="col-md-3 col-xs-6"> <strong>Uso</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $r["uso"]; ?></p>
                                            </div>
                                             <div class="col-md-3 col-xs-6"> <strong>Código Contador</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $r["codigo_contador"]; ?></p>
                                            </div>
                                        </div>
                                        
                                </div>
                                </div>
                                <!--second tab-->
                               <div class="tab-pane" id="profile" role="tabpanel">
                                         <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Fecha límite sin recargo</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $r["sin_recargo"]; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Fecha límite con recargo</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $r["con_recargo"]; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Periodo facturado</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $r["periodo_facturado"]; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong># de cuentas vencidas</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $r["cuentas_vencidas"]; ?></p>
                                            </div>
                                             <div class="col-md-3 col-xs-6"> <strong>Acuerdo de pago</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $r["direccion"]; ?></p>
                                            </div>

                                             
                                        </div>
                                        <h4 class="font-medium m-t-30">Consumo</h4>
                                        <hr>
                                        <li><b>Consumo desde:</b><?php echo $r["consumo_desde"]; ?></li>
                                        <li><b>Consumo hasta:</b><?php echo $r["consumo_hasta"]; ?></li>
                                        <li><b>Días de consumo:</b><?php echo $r["dias_consumo"]; ?></li>
                                        <li><b>Causa de No lectura:</b><?php echo $r["no_lectura"]; ?></li>
                                        <li><b>Lectura actual (m3):</b><?php echo $r["lectura_actual"]; ?></li>
                                        <li><b>Lectura anterior (m3):</b><?php echo $r["lectura_anterior"]; ?></li>
                                        <li><b>Consumo (m3):</b><?php echo $r["consumo"]; ?></li>
                                        <li><b>Vertimento (m3):</b><?php echo $r["vertimiento"]; ?></li>
                                        <li><b>Promedio (m3):</b><?php echo $r["promedio"]; ?></li>
                                        <li><b>Promedio del estrato:</b><?php echo $r["promedio_estrato"]; ?></li>
                                        <li><b>Último pago:</b><?php echo $r["ultimo_pago"]; ?></li>
                                        </div>
                                       
  <?php endwhile;?>

<?php else:?>
    <p >No hay resultados</p>
<?php endif;?>                                      </div>
                             
                            </div>
                        </div>
                    </div>

</div>
</div>

</div>
</div>
</div>
<style type="text/css">
    .factura{
        margin-top: 2px;
    }
    .grafica{
        margin-top: -180px;
    }
    .box{
        height: 850px;
        margin-top: -20px;
    }
</style>

<div class="row grafica">    
 
  <div id="columnchart_material" class="grafica" style="width:2000px; height: 500px;">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mes', 'Consumo'],
          <?php
          for($x=1; $x<=12; $x=$x+1){

          ?>
          ['<?php echo $meses[$x]; ?>', <?php echo $dinero[$x]; ?>],
          <?php }
          ?>
         
        ]);

        var options = {
      title: 'Consumo mensual',
      width: 820, height: 300,
      colors: ['#335070'],
      legend: { position: 'bottom'}
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </div>
         
                <!-- End PAge Content -->
       
            </div>
     
            <!-- End Container fluid  -->
             <footer class="footer">
                © 2018 Indold
            </footer>
          
          
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
    <script src="../js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../../assets/plugins/d3/d3.min.js"></script>
    <script src="../../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="../../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../../assets/plugins/d3/d3.min.js"></script>
    <script src="../../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="../js/dashboard1.js"></script>
 
</body>

<?php
}else{
	echo '<script> window.location="../../../login.php"; </script>';
}
?>

   

      
