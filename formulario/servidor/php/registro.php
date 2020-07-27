<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>  
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script
  		src="https://code.jquery.com/jquery-3.3.1.js"
  		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  		crossorigin="anonymous">
  	</script>
</head>
<body>
<form class="login-form" id="formulario" style="display: grid;" enctype="multipart/form-data">
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
	<input type="text" class="form-control input-sm" id="nombre" name="nombre" placeholder="Nombre" style="margin-top: 10px;margin-bottom: 10px;">					
	<input type="text" class="form-control input-sm" id="correo" name="correo"placeholder="Correo"style="margin-top: 10px;margin-bottom: 10px;">					
	<input type="text" class="form-control input-sm" id="celular" name="celular"placeholder="celular"style="margin-top: 10px;margin-bottom: 10px;">					
	<input type="text" class="form-control input-sm" id="usuario" name="usuario"placeholder="usuario"style="margin-top: 10px;margin-bottom: 10px;">					
	<input type="password" class="form-control input-sm" id="pass" name="pass"placeholder="password"style="margin-top: 10px;margin-bottom: 10px;">
	<p></p>
	<button class="btn btn-primary" id="registrarNuevo">Registrar</button>				
	<a href="../index.html" class="btn btn-default">Regresar</a>      

</form>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>												
</body>
</html>

<script type="text/javascript">
	var liga = "http://localhost/formulario/servidor/";
		$("#registrarNuevo").on('click', function(e){
		  e.preventDefault();		  
          var formData = new FormData(document.getElementById("formulario"));
					var url = liga+"php/add_admin.php";
					$.ajax({
						type:'POST',
						url:url,
						data:formData,
            			contentType:false,
            			processData:false,
            			cache:false,		
						success:function(data){												
							alert(data);							
							if(data == 'registro exitoso'){
								$('#formulario')[0].reset;								
							}
							
						}
					});
					return false;
			});    

</script>

