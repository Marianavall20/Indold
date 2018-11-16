<?php ob_start();
$mysqli = new mysqli("localhost", "root", "", "recursos_humanos");
$id= $_GET['id'];
$query = "SELECT * FROM contratos WHERE id = $id";
$result = $mysqli-> query($query);

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container"> 
<h1>Contrato de trabajo indefinido</h1>             
  <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Identidad</th>
        
      </tr>
    </thead>
    <tbody>
<?php
foreach ($result as $fila){?>
      <tr>
        <td><?php echo $fila['nombres'] ?></td>
        <td><?php echo $fila['apellidos'] ?></td>
        <td><?php echo $fila['identidad'] ?></td>
        
      </tr>
<?php 
}
?>
    </tbody>
  </table>
</div>
</body>
</html>


<?php
require_once("dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = 'Contrato.pfd';
$dompdf->stream($filename, array("Attachment" => 0));
?>