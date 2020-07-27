<?php

  session_start();
  
  if(isset($_SESSION['user'])){

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>FUBAPP</title>    
  <link href='https://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/estilos.css" type='text/css'>  
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script
  		src="https://code.jquery.com/jquery-3.3.1.js"
  		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  		crossorigin="anonymous">
            
  	</script>
</head>
<body>
<!-- partial:index.partial.html -->
<h1> &#9917 FUBAPP &#9917;</h1>  
<section class="container">
     <div id="fade-box">
       <div class="forceColor">
        <div class="form">          
          <form  id="formulario" method="POST"  enctype="multipart/form-data" >
           <h3> RESERVAR CANCHA </h3>
                   <div class="topbar" >        
                   <!-- <input type="text" class="input" name="idcancha"    placeholder = "&#9917  id" /> -->
                   <input type="text" class="input" name="cancha" style="color:white;"  placeholder = "&#9917   cancha" />
                   <input type="text" class="input" name="hora" style="color:white;" id="hora" placeholder = "&#8986 hora" />
                   <input type="date" class="input" name="fecha"  placeholder = "&#9917   fecha" />
                   <!--<input type="date" class="input" name="fecha" placeholder = "Fecha" />-->                      
                  </div>                      
                  <button class="enviar"  id='enviar'>RESERVAR</button>   
                  
                </form>
                <button id="btn4"  class="btn" style="top: 68%;" onclick="redireccionar()">Cerrar Sesion </button>
              </div>  
      </div>  
      <div class="forceColor"> 
        <div class="informacion">
          <div class="info-cancha">
            <h3>CANCHAS DISPONIBLES </h3>
            <div id='resp'>                  
              
              </div>
              <form id="bt2" method="POST"  enctype="multipart/form-data" >
              <input style ='display:none' value ='1' name= 'valor'>
              <button id="btn2" class="btn">Actualizar</button> </form>
              
              
            </div>
          </div>
          
          <br>
          
         
        </sectiom>
</body>
<script type="text/javascript">
    

     var liga = "http://localhost/formulario/cliente/";
     function redireccionar(){
        window.location=liga+"php/salir.php";
    }
     
		$("#enviar").on('click', function(e){
          e.preventDefault();          
          var formData = new FormData(document.getElementById("formulario"));
					var url = liga+"php/add.php";
					$.ajax({
						type:'POST',
						url:url,
						data:formData,            
            contentType:false,
            processData:false,
            cache:false,
						success:function(data){
							alert(data);
						}
					});
					return false;
      });  

      $("#btn2").on('click', function(e){
          e.preventDefault();                    
          var url = liga+"php/consulta.php";          
          var parametros = new FormData(document.getElementById("bt2"));
					$.ajax({            
            type: "POST",            
						url:url,	
            data: parametros,            
            contentType:false,
            processData:false,
            cache:false,
						success:function(data){				
              var js = JSON.parse(data);                  
              var tabla="";                 
              for (let i = 0; i < js.length; i++) {                
               tabla += `<label >&#9917 N°cancha: ${js[i].Id_cancha}</label> <br> <label> Estado: ${js[i].estado}</label>
               <img src= ${js[i].img}  width=200 heigth=200 style="margin-left: 50px;"><br>`                        
              }
              
              $('#resp').html(tabla); 
						}
					}); 
					return false;
			});

      
 	</script>

</html>
<?php
} else {  
	header("location:../index.html");
	}
 ?>