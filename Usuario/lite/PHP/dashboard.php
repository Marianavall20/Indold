<?php
session_start();
include("Conexion.php");

if(isset($_SESSION['usuario'])) {?>


<?php 
$host = "mysql.gestionrecursoshumanos.org";
$usuariodb = "user_contadorepa";
$clavedb = "Contador2018";
$basededatos = "contadorepa";
$conexion = mysql_connect($host, $usuariodb, $clavedb);
mysqli_select_db($basededatos, $conexion);
$mes = array();
$consumo = array();

$i = 0;
$sql ="select * from consumo";
$resultado = mysql_query($sql);
while ($row = mysql_fetch_object($resultado)){
 $mes[$i] = $row->mes;
 $consumo[$i]=$row ->consumo;
 $i = $i + 1;

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
    <title>Consumo</title>
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
    <script src="../build/js/custom.min.js"></script>

</head>
<body class="fix-header fix-sidebar card-no-border">
   
    <!-- Preloader - style you can find in spinners.css -->  
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
 
                                    <!-- Start Page Content -->
<?php

include "Conexion.php";

$sql1= "select * from factura";
$query = $Conexion->query($sql1);
?>
<?php if($query->num_rows>0):?>
    <!-- Main wrapper - style you can find in pages.scss -->
    
    <div id="main-wrapper">
<?php while ($r=$query->fetch_array()):?>  
       
        <!-- Topbar header - style you can find in pages.scss -->     
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">              
                <div class="navbar-header">                    
                </div>
                
                <div class="navbar-collapse">
                    
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>                    
                        <!-- Search -->                      
                    </ul>
                    <div class="user">
                          <img src="../png/user.png">
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
        </aside>
   
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      
        <!-- Page wrapper  -->
    
        <div class="page-wrapper">
        
            <!-- Container fluid  -->
          
            <div class="container-fluid">
              
                <!-- Bread crumb and right sidebar toggle -->
              
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Consumo</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Usuario</a></li>
                            <li class="breadcrumb-item active">Consumo</li>
                        </ol>
                    </div>
                  
                </div>
                
                <!-- End Bread crumb and right sidebar toggle -->
          
                <!-- Start Page Content -->
            
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Consumo mensual</h3>
                                                <h6 class="card-subtitle">Usuario</h6> </div>
                                         
                                      </div>
  <div class="x_content2">
  <div id="graph_line" style="width:150%; height:360px;">
  <div id="chart_div">
  <script type="text/javascript">
  google.load('visualization', '1', {'packages':['corechart']});
  google.setOnLoadCallback(desenhaGrafico);

  function desenhaGrafico(){

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Mes');
    data.addColumn('number', 'Consumo');

    data.addRows(<?php echo $i ?>);

    <?php 
    $k = $i;
    for ($i = 0; $i < $k; $i++){ 

    ?>
    data.setValue(<?php echo $i ?>, 0, '<?php echo $mes[$i] ?>');
    data.setValue(<?php echo $i ?>, 1, '<?php echo $consumo[$i] ?>');
    <?php
     }
    ?> 
    

    var options = {
      title: 'Consumo mensual',
      width: 620, height: 300,
      colors: ['#335070'],
      legend: { position: 'bottom'}
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
    chart.draw(data, options)

  }

</script>
</div>
</div>
                                      
  <?php endwhile;?>

<?php else:?>
    <p >No hay resultados</p>
<?php endif;?> 

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                
                </div>
               
                <!-- End PAge Content -->
       
            </div>
     
            <!-- End Container fluid  -->
       
            <!-- footer -->
    
            <footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>
     
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
    <script src="../js/dashboard1.js"></script>
 
</body>

<?php
}else{
	echo '<script> window.location="../../../login.php"; </script>';
}
?>

   

      
