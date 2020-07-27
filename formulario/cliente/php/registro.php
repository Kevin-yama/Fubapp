<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../css/estilo.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>  
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script
  		src="https://code.jquery.com/jquery-3.3.1.js"
  		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  		crossorigin="anonymous">
  	</script>
</head>
<body>
<form class="form" id="formulario" method="POST">
  <h2>INGRESE SUS DATOS </h2>
  <p><input type="text"  id="nombre" name="nombre" placeholder="Nombre" style="margin-top: 10px;margin-bottom: 10px;"></p>
  <p><input type="text"  id="celular" name="celular"placeholder="celular"style="margin-top: 10px;margin-bottom: 10px;"></p>					
  <p><input type="text"  id="usuario" name="usuario"placeholder="usuario"style="margin-top: 10px;margin-bottom: 10px;">	</p>				
  <p><input type="password"  id="password" name="password"placeholder="password "style="margin-top: 10px;margin-bottom: 10px;"></p>
  <p><input type="text"  id="nom_equipo" name="nom_equipo"placeholder="nombre del equipo"style="margin-top: 10px;margin-bottom: 10px;"></p>

  <p type='FOTO'><input type="file" class="input" name="img" id="img" placeholder = "Fotografia" style="margin-top: 10px;margin-bottom: 10px;"/> </p>					
  <button class="btn btn-primary" id="registrarNuevo">Registrar</button>
  <a href="../index.html">Regresar</a>
</form>
											
</body>
</html>

<script type="text/javascript">
	var liga = "http://localhost/formulario/cliente/";
		$("#registrarNuevo").on('click', function(e){
		  e.preventDefault();		  
          var formData = new FormData(document.getElementById("formulario"));
					var url = liga+"php/add_jugador.php";
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
								$('#frmRegistro')[0].reset;								
							}
							
						}
					});
					return false;
			});    

</script>

