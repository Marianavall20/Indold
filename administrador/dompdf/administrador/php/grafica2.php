<?php
$conexion = mysql_connect("localhost", "root", "");
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
      width: 620, height: 300,
      colors: ['#335070'],
      legend: { position: 'bottom'}
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>
</html>