
<?php

include "../conexion/conexion.php";

$buscar=$_POST['busqueda'];
$sql1= "select * from factura where codigo='$buscar'";
$query = $cone->query($sql1);

?>

<?php if($query->num_rows>0):?>

      
<?php while ($r=$query->fetch_array()):?>
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
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/m_factura.css">

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
                    <li><a href="factura.php"> <i class="fa fa-bar-chart"></i>Registro de consumo</a></li>
                    <li><a href="registro_factura.php"> <i class="fa fa-bar-chart"></i>Formulario factura</a></li>
                    <li class="active"><a href="ver_factura.php"> <i class="fa fa-bar-chart"></i>Factura</a></li>
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

    <div class="usuario">
        <img src="../img/fondo.jpg" alt="">
        <div class="circulo">
            <img src="../img/usuario.png" alt="">
        </div>

        <h2><?php echo $r["suscriptor"]; ?></h2>
        <p id="u">Usuario</p>

       <a href="../dompdf/Factura.php"><button class="boton">PDF</button></a>

        <div class="c1">
            <p><?php echo $r["lectura_actual"]; ?></p>
            <span>Consumo actual</span>
        </div>
        <div class="c2">
            <p>$<?php echo $r["consumo_final"]; ?></p>
            <span> Costo total </span>  
        </div>
        <div class="c3">
            <p>1383,35</p>
            <span>Cargo final</span> 
        </div>
    </div>

<?php
$conexion = mysqli_connect("mysql.gestionrecursoshumanos.org", "user_contadorepa", "Contador2018");
mysqli_select_db("contadorepa", $conexion);

$meses = array('', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

for ($x=1; $x<=12;$x=$x+1){
  $dinero[$x]=0;

}

//Año actual//
$anno=date('Y');

$sql=mysqli_query("SELECT * FROM consumo");

while($row=mysqli_fetch_array($sql)){

  $y=date("Y", strtotime($row['mes'])); //Extrae el año //

  $month=(int)date("m", strtotime($row['mes'])); //Extrae el mes //

  if($y==$anno){
  $dinero[$month]=$dinero[$month]+$row['consumo'];
  }
}

?>
 
  <html>
  <head>
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
      width: 500, height: 300,
      colors: ['rgb(155, 57, 236)'],
      legend: { position: 'bottom'}
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
  <style type="text/css">
    
  </style>
<div id="columnchart_material" style="width: 100px; height: 500px; margin-left: 25px; margin-top: 30px;"></div>
  
  <!--Cierre grafica -->



<div class="caja">    
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Activity</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Profile</button>
  
</div>
</div>

<div id="London" class="tabcontent">
    <div class="ruta">
 <div class="b1">
            <p> <strong>Ruta:</strong>
            <span><?php echo $r["ruta"]; ?></span></p>

            <p><strong>Suscriptor:</strong>
            <span><?php echo $r["suscriptor"]; ?></span></p>
        </div>

        <div class="b2">
            <p><strong>Código:</strong>
            <span><?php echo $r["codigo"]; ?></span></p>

            <p><strong>Estrato:</strong>
            <span><?php echo $r["estrato"]; ?></span></p>
        </div>

        <div class="b3">
            <p><strong>Dirección:</strong>
            <span><?php echo $r["direccion"]; ?></span></p>

            <p><strong>Uso:</strong>
            <span><?php echo $r["uso"]; ?></span></p>
        </div>

        <div class="b4">
            <p><strong>Código Postal:</strong>
            <span><?php echo $r["codigo_postal"]; ?></span></p>

            <p><strong>Código Contador:</strong>
            <span><?php echo $r["codigo_contador"]; ?></span></p>
        </div>
    </div>
   
</div>

<div id="Paris" class="tabcontent">
    <div class="cajacont">
 <div class="b1">
            <p><strong>Fecha límite sin recargo:</strong>
            <span><?php echo $r["sin_recargo"]; ?></span></p>
        </div>

        <div class="b2">
            <p><strong>Fecha límite con recargo: </strong>
            <span><?php echo $r["con_recargo"]; ?></span></p>
        </div>

        <div class="b3">
            <p><strong>Periodo facturado:</strong>
            <span><?php echo $r["periodo_facturado"]; ?></span></p>
        </div>

        <div class="b4">
            <p><strong># de cuentas vencidas: </strong>
            <span><?php echo $r["cuentas_vencidas"]; ?></span></p>
        </div>
    </div>

       <h1 id="consumo">Consumo</h1>
       <div id="linea"> ______________________________________________________________ </div>

       <div class="enlaces">
           <ul>
               <li><strong>Consumo desde:</strong> <?php echo $r["consumo_desde"]; ?></li>
               <li><strong>Consumo hasta:</strong> <?php echo $r["consumo_hasta"]; ?></li>
               <li><strong>Días de consumo:</strong> <?php echo $r["dias_consumo"]; ?></li>
               <li><strong>Causa de No lectura:</strong> <?php echo $r["no_lectura"]; ?></li>
               <li><strong>Lectura actual m<sup>3</sup>: </strong> <?php echo $r["lectura_actual"]; ?></li>
               <li><strong>Lectura anterior m<sup>3</sup>:</strong> <?php echo $r["lectura_anterior"]; ?></li>
               <li><strong>Consumo:</strong> <?php echo $r["consumo"]; ?></li>
               <li><strong>Vertimiento:</strong> <?php echo $r["vertimiento"]; ?></li>
               <li><strong>Promedio:</strong> <?php echo $r["promedio"]; ?></li>
               <li><strong>Promedio del estrato:</strong> <?php echo $r["promedio_estrato"]; ?></li>
               <li><strong>Fecha de último pago:</strong><?php echo $r["ultimo_pago"]; ?> </li>
           </ul>
       </div>
       
    </div>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
<?php endwhile;?>
</table>
<?php else:
print "<script>alert(\"No hay resultados.\");window.location='ver_factura.php';</script>";
endif;?>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
