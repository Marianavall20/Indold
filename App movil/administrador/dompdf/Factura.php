<?php ob_start();
$mysqli = new mysqli("localhost", "root", "", "contador");

$query = "SELECT * FROM factura";
$result = $mysqli-> query($query);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
  <meta charset="utf-8">

<style type="text/css">
body{
  margin: 50px;
}

.encabezado{
	margin-top: -250px;
	position: relative;
}

</style>
</head>
<body>

<div class="encabezado"><h2>SERVICIO PUBLICO DOMICILIARIO DE AGUA</h2></div>
<br>

<?php
foreach ($result as $fila){?>
<h3><b>DECLARAN</b></h3>
<div class="encabezado"><b>Que el/la trabajador/a, esté admitido/a en el Programa de Activación para el Empleo y esté en posesión del documento
acreditativo o resolución del SEPE.</b></div>
<p></p>
<div class="text">Que reúnen los requisitos exigidos para la celebración del presente contrato y, en su consecuencia, acuerdan formalizarlo con arreglo a
las siguientes: </div>
<h3><b>CLÁUSULAS</b></h3>
<div class="text"><b>PRIMERA:</b> El/la trabajador/a prestará sus servicios como (3) <b><?php echo $fila['codigo'] ?></b> incluido en el grupo profesional de (4) <input type="" name="">, para la
realización de las funciones (5) <input type="" name=""> de acuerdo con el sistema de clasificación profesional vigente en la empresa. 
<p></p>
En el centro de trabajo ubicado en (calle, nº y localidad): <input type="" name=""> 
<p></p>
A DISTANCIA, en el domicilio ubicado en (calle, nº y localidad): <input type="" name=""> 
</div>

<div class="text"><b>SEGUNDA:</b> EI contrato se concierta para realizar trabajos periódicos de carácter discontinuo consistentes en (6): <input type="" name=""> dentro de la actividad cíclica intermitente de (7) <input type="" name=""> cuya duración será de (8) <input type="" name="">.
La duración estimada de la actividad será de (9) <input type="" name="">. Los/as trabajadores/as serán llamados en el orden y forma que se determine en el Convenio Colectivo de (10) <input type="" name="">. La jornada estimada dentro del periodo de actividad será de <input type="" name=""> horas (11) <input type="" name=""> y la distribución horaria será <input type="" name="">.  
<p></p>
Si el convenio colectivo de ámbito sectorial permite en los contratos fijos discontinuos utilizar la modalidad de tiempo parcial, indique si
se acoge al mismo.<label><input type="checkbox" id="cbox1" value="first_checkbox">Si</label><input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">No</label>
</div>

<div class="text"><b>TERCERA:</b> La jornada de trabajo será:  
<br>
<B>A tiempo completo:</B> la jornada de trabajo será de <input type="" name=""> horas semanales, prestadas de <input type="" name=""> a <input type="" name="">, con los descansos establecidos legal o convencionalmente. 
<p></p> 
<b>A tiempo parcial:</b> la jornada de trabajo ordinaria será de (12)<input type="" name=""> , horas al día, a la semana, al mes, al año siendo esta jornada inferior a la de un/a trabajador/a a tiempo completo comparable (13).
<p></p>
La distribución del tiempo de trabajo será de (14) <input type="" name="">.
<p></p>
En el caso de jornada a tiempo parcial señálese si existe o no pacto sobre la realización de horas complementarias (15): <label><input type="checkbox" id="cbox1" value="first_checkbox">Si</label><input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">No</label>
</div>

<div class="text"><b>CUARTA:</b> : La duración del presente contrato será INDEFINIDA, iniciándose la relación laboral en fecha <input type="" name=""> y se establece un
período de prueba de (16) <input type="" name="">.
<P></P>
<b>QUINTA:</b> El/la trabajador/a percibirá una retribución total  de <input type="" name=""> euros brutos (17) <input type="" name=""> que se distribuirán en los siguientes conceptos salariales (18): <input type="" name="">.
<P></P>
<b>SEXTA:</b> La duración de las vacaciones anuales será de (19) <input type="" name="">.
<P></P>
<b>SÉPTIMA:</b>    En lo no previsto en este contrato, se estará a la legislación vigente que resulte de aplicación y particularmente, el Estatuto de
los Trabajadores aprobado por el Real Decreto Legislativo 2/2015, de 23 de octubre (BOE de 24 de octubre) y el Convenio Colectivo de:  <input type="" name="">.
</div>


<div class="text"><b>OCTAVA:</b> El presente contrato se formaliza bajo la modalidad de contrato de relevo: <label><input type="checkbox" id="cbox1" value="first_checkbox">Si</label><input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">No</label>.
<P></P>
El/la trabajador/a:
<P></P>
Que está en desempleo e inscrito/a como demandante en Lanbide de <input type="" name="">
<br>
Que tiene concertado con la empresa un contrato de duración determinada que fue comunicado en Lanbide de <input type="" name="">, con el número <input type="" name=""> con fecha <input type="" name="">.
<P></P>
El/la representante de la Empresa:
<P></P>
Que el/la trabajador/a de la Empresa D/Dña <input type="" name=""> nacido el <input type="" name=""> que presta sus servicios en el centro de trabajo ubicado en (calle, nº y localidad): <input type="" name=""> con la profesión de <input type="" name="">  incluido en el grupo/laboral/nivel/profesional <input type="" name="">  de acuerdo con el sistema de clasificación profesional vigente en la empresa que reduce su jornada ordinaria de trabajo y su salario en un (20)<input type="" name=""> por acceder a la situación de jubilación parcial regulada en el Real Decreto-Ley 5/2013 de 15 de marzo ha suscrito con fecha <input type="" name="">  y hasta <input type="" name=""> el correspondiente contrato de trabajo a tiempo parcial registrado en Lanbide de <input type="" name=""> con el
número <input type="" name=""> y con fecha <input type="" name=""> .

</div>
<?php 
}
?>

</body>
</html>


<?php
require_once("dompdf_config.inc.php");
$dompdf= new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = 'Contrato.pfd';
$dompdf->stream($filename, array("Attachment" => 0));
?>