var liga = "http://localhost/proyecto_final/servidor/php";



		$("#submit1").on('click', function(e){			
		  e.preventDefault();		  
          var formData = new FormData(document.getElementById("formulario"));
					var url = liga+"/login.php";
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
			
			$("#btn-enviar").on('click', function(e){
				
			  e.preventDefault();		  
			  var formData = new FormData(document.getElementById("form-registro"));
			  
						var url = liga+"/registro/registro.php";
						console.log(url);
						$.ajax({
							type:'POST',
							url:url,
							data:formData,							
							contentType:false,
							processData:false,
							cache:false,		
							success:function(data){							
								if(data == 1){
									alert('Registro Exitoso');
									window.location="../../";
								}else{
									alert(data);							
								}
								
								
							}
						});
						return false;
				});  