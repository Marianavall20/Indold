<html>
<head>
    <meta charset="UTF-8">
<title></title>
    
<link rel="stylesheet" href="/css/galeria.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
    
      <div class="container-portada">
        <div class="capa-gradient"></div>
        <div class="container-details">
            <div class="details">
                <h1><b>Recursos Humanos</b></h1>
                <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic necessitatibus reiciendis rem eaque, beatae illum, cumque. Blanditiis natus perferendis animi odio laborum, quidem explicabo quis voluptates dicta nulla fuga quas, nam omnis rerum odit repellat molestias quos minus inventore repudiandae!</p>
              
     

            
         <!-- Trigger the modal with a button -->
  <button type="button1" class="btn btn-default btn-lg" id="myBtn1">Iniciar sesión</button>

 

 <!-- Modal Iniciar sesion -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button1" class="close" data-dismiss="modal">&times;</button>
          <strong><span class="glyphicon glyphicon-lock"></span> Iniciar sesión</strong>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          
            <link rel="stylesheet" type="text/css" href="Index/PHP/estilos.css">
<form action="Index/PHP/validar.php" method="post">
<input type="text" placeholder="&#128477; Ingrese usuario" name="usuario" required>
<input type="password" placeholder="&#128477;Ingrese su contraseña" name="contrasenia" required>

<input type="submit" value="ingresar">
</form>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn1").click(function(){
        $("#myModal1").modal();
    });
});
</script> 
</div>
  </div>
    </div>

</body>
</html>