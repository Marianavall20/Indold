<!DOCTYPE html>
<html lang="en" >
 
<head>
  <meta charset="UTF-8"> 
  <title>Regístrese</title>
   
  <link rel="stylesheet" type="text/css" href="../css/index1.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="../css/registrese.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/prototype.js"></script>
  <script type="text/javascript" src="../js/validar.js"></script>
  <script src="../js/jquery-3.0.0validar.js"></script>
   <script src="../js/jquery.validate.js"></script>
  
  <script type="text/javascript">
    function openVentana(){
      $(".ventana").slideDown("slow"); 
    }
    function closeVentana(){
      $(".ventana").slideUp("fast");
    }
  </script> 
  

</head>
 
<body>

<div class="fondo">
	<div class="men" >
	<img src="../images/logo.jpeg" class="logo">
		<div class="posm">
			<ul id="menu">
				<li><a href="../index.php"> Inicio </a></li>
				<li><a href="../index.php#nosotros"> Nosotros </a></li>
				<li><a href=""> Productos </a> 
                <ul>
                <li><a href="../aguacate/aguacate.php">Aguacate</a>
                 
                 <ul class="aguacate">
                 <li><a href="../aguacate/choquette.php"> Choquette </a> </li>
              	 <li><a href="../aguacate/colling.php"> Colling </a> </li>
              	 <li><a href="../aguacate/collingreed.php"> Colling Redd </a> </li>
              	 <li><a href="../aguacate/hass.php"> Hass </a> </li>
              	 <li><a href="../aguacate/lorena.php"> Lorena </a> </li>
              	 <li><a href="../aguacate/papelillo.php"> Papelillo </a> </li>
              	 <li><a href="../aguacate/redd.php"> Redd </a> </li>
                </ul>
                </li>
                <li><a href="../cafe/cafe.php">Café</a>
                 <ul class="cafe">
                  <li> <a href="../cafe/castillo.php"> Castillo </a></li>
              	  <li> <a href="../cafe/cenicafe1.php"> Cenicafé 1 </a></li>
              	  <li> <a href="../cafe/costarica.php"> Costa Rica </a></li>
              	  
                 </ul>
                </li>
                <li><a href="../ornamentales/flor.php">Ornamentales</a>
                 <ul class="ornamentales">
                 <li><a href="../ornamentales/avedelparaiso.php">Ave del paraíso</a></li>
              	 <li><a href="../ornamentales/duranta.php">Duranta</a></li>
              	 <li><a href="../ornamentales/hortensia.php">Hortensia</a></li>
              	 <li><a href="../ornamentales/sanjoaquin.php">San Joaquín</a></li>
              	 <li><a href="../ornamentales/veraneras.php">Veraneras</a></li>
                 </ul>
                </li>
                </ul>
				</li>
				<li><a href=""> Regístrese </a></li>
				<li ><a href="javascript:openVentana();">Ingresar</a></li>
        <div class="ventana">
  <div class="cerrar"><a href="javascript:closeVentana();">X</a> </div>
  <div class="form">
  
  <h1>Inicia Sesión</h1>
  <br><br>
  <hr>
    <table>
    <form method="POST" action="../conexiones/validar.php">
      <tr>
        <td class="item"><b>Correo :</b> </td>
        <td><input type="text" placeholder="Ingresa tu correo electrónico" name="usuario"></td>
      </tr>
      <tr>
        <td class="item"><b>Contraseña :</b> </td>
        <td><input type="password" placeholder="Ingresa tu contraseña" name="clave"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="INGRESAR" class="bot"></td>
      </tr>
      </form>
    </table>
  </div>
</div>
			</ul>
		</div>
	</div>
</div>

<form method="POST" action="../conexiones/registrese.php" id="formCheckPassword">

<div class="login-wrap">
	<div class="login-html">
		<h2 align="center"><input class="sign-up"><label class="tab">Regístrate</label></h2>
		<p class="obligatorio"><strong>Los campos indicados con asterisco * son obligatorios.</strong></p> <p>
		<div class="login-form">
			<div>
				<div class="group">
					<label>nombres: <span class="obligatorio">*</span></label>
					<input type="text" class="input" name="nombres" required="">
				</div>
				<div class="group">
					<label>apellidos: <span class="obligatorio">*</span></label>
					<input type="text" class="input" name="apellidos" required="">
				</div>
				<div class="group">
					<label>teléfono: <span class="obligatorio" required="">*</span></label>
					<input type="text" class="input" name="telefono">
				</div>
				<div class="group">
					<label>correo electrónico: <span class="obligatorio">*</span></label>
					<input type="email" class="input" name="correo" required="" onblur="validarcorreo(this);">
					<span id="comprobarusuario"></span>
				</div>
				<div class="form-group">
					<label for="txt_contrasenha" class="form-label">crea una contraseña: <span class="obligatorio">*</span></label>
					<input type="password" class="input" name="txt_contrasenha"  id="txt_contrasenha" required="" onblur="validarcontrasena(this);"> 
					<span id="comprobarcontrasena"></span>
				</div>
				<div class="form-group">
					<label>confirma tu contraseña: <span class="obligatorio">*</span></label>
					<input type="password" class="input" name="txt_confirmar" required="" id="txt_confirmar">
						<span id="error"></span>
				</div>
				<div class="group">
					<input type="submit" class="button1" value="Guardar" name="registrarse">
				</div>
			</div>
		</div>
	</div>
</div>
</form>

<script type="text/javascript">
	function validarcorreo (correo)
	{
		var url = '../js/validarcorreo.php';
		var parametros = 'correo='+correo.value;
		var ajax = new Ajax.Updater('comprobarusuario', url, {method: 'get', parameters: parametros});
	}
</script>
<script type="text/javascript">

	function validarcontrasena (contrasena)
	{
		var url = '../js/validarcontrasena.php';
		var parametros = 'contrasena='+contrasena.value;
		var ajax = new Ajax.Updater('comprobarcontrasena', url, {method: 'get', parameters: parametros});
	}
</script>

<footer>
	<section>
		<article>
			<img src="../images/logo.jpeg">
		</article>
	</section>

	<section>

		<article class="Tel">
			<span class="icon-phone"></span>
			3136956671
		</article>
	</section>

	<section>
		<article class="arti"><span class="icon-location"></span>
		<p id="Ub">
			Finca "la trilladora", <br> Vereda "Los pantanos", </br>
			Sector "Los chorritos"
		</p>
		</article>
	</section>

	<section>
		<article class="articulo">

			hugoferney1977@hotmail.com
		</article>
	</section>
	<section> 
		<article class="arti">
			
				<table> 
				<tr>
				<td class="redes">
				 <a href="https://www.facebook.com/"><span class="icon-facebook2" ></span></a>
				</td> 
				<td class="redes">
			     <a href="https:/twitter.com/"> <span class="icon-twitter" ></span></a>
			     </td>
			     </tr>
			     <tr>
			     <td class="redes">	
			      <a href="https://mail.google.com"><span class="icon-mail"></span></a>
			     </td>
			     <td class="redes">	
			      <a href="https://www.instagram.com/"><span class="icon-instagram"></span></a>
			      </td>
			      </tr>	

			</table>
				
		</article>
	</section>
</footer>  
<script type="text/javascript">
    		$("#formCheckPassword").validate({
           rules: {
               txt_contrasenha: { 
                 required: true,
                    minlength: 6,
                    maxlength: 10,

               } , 

                   txt_confirmar: { 
                    equalTo: "#txt_contrasenha",
                     minlength: 6,
                     maxlength: 10
               }
           },
     messages:{
         txt_contrasenha: { 
                 required:"Password Requerido",
                 minlength: "Minimo 6 caracteres",
                 maxlength: "Maximo 10 caracteres"
               },
       txt_confirmar: { 
         equalTo: "El password debe ser igual al anterior",
         minlength: "Minimo 6 caracteres",
         maxlength: "Maximo 10 caracteres"
       }
     }

});
    	</script>
</body>

</html>

