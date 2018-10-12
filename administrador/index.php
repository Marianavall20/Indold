<?php
session_start();
include("conexion/conexion.php");

if(isset($_SESSION['usuario'])) {?>

<?php
$conexion = mysqli_connect("mysql.gestionrecursoshumanos.org", "user_contadorepa", "Contador2018");
mysql_select_db("contadorepa", $conexion);

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

  if($y==$anno){
  $dinero[$month]=$dinero[$month]+$row['consumo'];
  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
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
                <!-- Navbar Brand --><a href="index.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Bootstrap </span><strong>Dashboard</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>

              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Buscar-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!--Cerrar cuenta-->
                <li class="nav-item"><a href="php/cerrar.php" class="nav-link logout"> <span class="d-none d-sm-inline">Cerrar</span><i class="fa fa-sign-out"></i></a></li>
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
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Nombre del Administrador</h1>
              <p>Administrador</p>
            </div>
          </div>
          
          <!--Item menú-->
          <ul class="list-unstyled">
                    <li class="active"><a href="index.php"> <i class="icon-home"></i>Inicio </a></li>
                    <li><a href="php/formulario.php"> <i class="icon-padnote"></i>Formulario Trabajador </a></li>
                    <li><a href="php/formulario_usuario.php"> <i class="icon-padnote"></i>Formulario Usuario </a></li>
                    <li><a href="php/registro.php"> <i class="icon-grid"></i>Registro Trabajador </a></li>
                    <li><a href="php/registro_usuario.php"> <i class="icon-grid"></i>Registro Usuario </a></li>
                    <li><a href="php/factura.php"> <i class="fa fa-bar-chart"></i>Registro de consumo</a></li>
                    <li><a href="php/registro_factura.php"> <i class="fa fa-bar-chart"></i>Formulario factura</a></li>
                    <li><a href="php/ver_factura.php"> <i class="fa fa-bar-chart"></i>Factura</a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-page"></i>Normas ambientales</a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="php/decreto.php">Decretos</a></li>
                        <li><a href="php/ley.php">Leyes</a></li>
                        <li><a href="php/resolucion.php">Resoluciones</a></li>
                      </ul>
                    </li>
                     <li><a href="php/curiosidades.php"> <i class="icon-paper-airplane"></i>Datos curiosos </a></li>
                    

        </nav>
        <!--Cierre menú-->




        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Gráficas</h2>
            </div>
          </header>
          
          <div class="breadcrumb-holder container-fluid" >
            <ul class="breadcrumb" >
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Gráficas</li>
            </ul>
          </div>

          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
              
       <!-- Gráfica de estrato-->       
<script src="code/highcharts.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>

<div id="container" style="min-width: 280px; height: 370px; max-width: 520px; margin-left:100px"></div>

<!--Llama conexión a la base de datos-->
<?php
include("conexion/conexion.php");

//Consultas para la información de la base de datos//
$resulttotal=$cone->query("SELECT * FROM estratos");
$reg=$resulttotal->num_rows;


$resultn1=$cone->query("SELECT * FROM estratos where nivel='1'");
$regn1=$resultn1->num_rows;
$prcn1=$regn1*100/$reg;

$resultn2=$cone->query("SELECT * FROM estratos where nivel='2'");
$regn2=$resultn2->num_rows;
$prcn2=$regn2*100/$reg;

$resultn3=$cone->query("SELECT * FROM estratos where nivel='3'");
$regn3=$resultn3->num_rows;
$prcn3=$regn3*100/$reg;


while($filan1=$resultn1->fetch_array(MYSQLI_BOTH))
{
  $n1= "{ name:'".$filan1['nivel']."', y:".$prcn1."},";
}

while($filan2=$resultn2->fetch_array(MYSQLI_BOTH))
{
  $n2= "{ name:'".$filan2['nivel']."', y:".$prcn2."},";
}

while($filan3=$resultn3->fetch_array(MYSQLI_BOTH))
{
  $n3= "{ name:'".$filan3['nivel']."', y:".$prcn3."},";
}
?>

    <script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Promedio de consumo por estratos|'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Estrato',
         
        data: [

        <?php
           echo $n1;
           echo $n2;
           echo $n3;
        ?>

             ]          
        }]
    });

    </script>

<!-- Segunda grafica -->
 <!-- Gráfica seegun usuario-->       
 <script src="code/highcharts.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>

<div id="caja" style="min-width: 280px; width: 400px; height: 370px; max-width: 600px; margin-left:100px"></div>

<!--Llama conexión a la base de datos-->
<?php
include("conexion/conexion.php");

//Consultas para la información de la base de datos//
$resultotal=$cone->query("SELECT * FROM tipo_usuario");
$re=$resultotal->num_rows;


$resuln1=$cone->query("SELECT * FROM tipo_usuario where tipo='comercial'");
$ren1=$resuln1->num_rows;
$prn1=$ren1*100/$re;

$resuln2=$cone->query("SELECT * FROM tipo_usuario where tipo='residencial'");
$ren2=$resuln2->num_rows;
$prn2=$ren2*100/$re;

$resuln3=$cone->query("SELECT * FROM tipo_usuario where tipo='oficial'");
$ren3=$resuln3->num_rows;
$prn3=$ren3*100/$re;


while($filan1=$resuln1->fetch_array(MYSQLI_BOTH))
{
  $n1= "{ name:'".$filan1['tipo']."', y:".$prn1."},";
}

while($filan2=$resuln2->fetch_array(MYSQLI_BOTH))
{
  $n2= "{ name:'".$filan2['tipo']."', y:".$prn2."},";
}

while($filan3=$resuln3->fetch_array(MYSQLI_BOTH))
{
  $n3= "{ name:'".$filan3['tipo']."', y:".$prn3."},";
}
?>

    <script type="text/javascript">

Highcharts.chart('caja', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Promedio de consumo segun el usuario|'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'Brown'
                }
            }
        }
    },
    series: [{
        name: 'Estrato',
         
        data: [

        <?php
           echo $n1;
           echo $n2;
           echo $n3;
        ?>

             ]          
        }]
    });

    </script>

<!-- Tercera gráfica -->


<style type="text/css">
    .factura{
        margin-top: 2px;
    }
    .grafica{
        margin-top: -180px;
        margin-left: 20px;
      
    }
    .box{
        height: 850px;
        margin-top: -20px;
    }
    .contenedor{
    	background-color: #fff;
    	width: 900px;
    	margin-left: 50px;
    	height: 400px;
    	border-radius: 7px;
    	margin-top: 20px;
    }
   
</style>
<div  class="contenedor">
<div class="row grafica "  style="margin-top: 230px; margin-left: 20px; width: 500px;">    
 
  <div id="columnchart_material" class="grafica" style="width:500px; height: 500px;">

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
  </div>

    

    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>
<?php
}else{
	echo '<script> window.location="../login.php"; </script>';
}
?>