<?php 
$mysqli = new mysqli("localhost", "root", "", "recursos_humanos");
?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Hola</h1>
<?php
$query = "SELECT * FROM contratos";
$result = $mysqli->query($query);

?>
<div class="container">              
  <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Identidad</th>
        <th>Exportar</th>
      </tr>
    </thead>
    <tbody>
<?php
foreach ($result as $fila){?>
      <tr>
        <td><?php echo $fila['nombres'] ?></td>
        <td><?php echo $fila['apellidos'] ?></td>
        <td><?php echo $fila['identidad'] ?></td>
        <td><a href="pdf.php?id=<?php echo $fila['id'];?>">Exportar</a></td>
      </tr>
<?php 
}
?>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>

    </tbody>
  </table>
</div>
</body>
</html>
