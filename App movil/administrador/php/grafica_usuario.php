
<?php 
$host = "localhost";
$usuariodb = "root";
$clavedb = "";
$basededatos = "contador";
$conexion = mysql_connect($host, $usuariodb, $clavedb);
mysql_select_db($basededatos, $conexion);
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
 <!-- Start Page Content -->
            
                <!-- Row -->
                <div class="row" style="margin-left: 300px; width: 500px;">
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

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
