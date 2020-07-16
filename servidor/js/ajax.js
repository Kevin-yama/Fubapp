var liga = "http://localhost:82/proyecto_final/servidor/php";
		$("#submit1").on('click', function(e){
		  e.preventDefault();		  
          var formData = new FormData(document.getElementById("formulario"));
					var url = liga+"/base_datos/consultas.php";
					$.ajax({
						type:'POST',
						url:url,
						data:formData,
            			contentType:false,
            			processData:false,
            			cache:false,		
						success:function(data){							
							if(data == 1){
								alert('bienvenido');
								window.location="../php/inicio.php";
							}else{
								alert(data);							
							}
							
							
						}
					});
					return false;
			});    