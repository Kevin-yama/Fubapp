var liga = "http://localhost/formulario/cliente/php";
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
								alert('Bienvenido');
								window.location="http://localhost/formulario/cliente/php/inicio.php";
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
									window.location="../index.html";
								}else{
									alert(data);							
								}
								
								
							}
						});
						return false;
				});  