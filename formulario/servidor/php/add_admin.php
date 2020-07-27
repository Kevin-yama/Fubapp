
<?php
    require 'base.php';    
    $nombre= $_POST["nombre"];
    $correo=$_POST["correo"];
    $celular= $_POST["celular"];
    $usuario=$_POST["usuario"];
    $password=sha1($_POST["pass"]);
    
    function buscaRepetido($user,$pass,$conexion){
        $sql="SELECT * from administrador where usuario='$user' and pass='$pass'";
        $result=$conexion->query($sql);

        if($result->num_rows> 0){
            return 1;
        }else{
            return 0;
        }
        $result->free();
    }
    if ($nombre=="" || $celular=="" || $usuario=="" || $correo=="" || $password=="") {
        echo "Hay valores vacios";
    }else{               

        if(buscaRepetido($usuario,$password,$conn)==1){
			echo "Usuario repetido";
		}else{	
            $sqlInsertar = "INSERT INTO administrador (Nombre, email, celular, usuario, pass) 
            VALUES('$nombre','$correo','$celular','$usuario','$password');";		
            $result=$conn->query($sqlInsertar); 
            if ($result) {                
                echo "registro exitoso";
            }else{
                echo "No se pudo realizar la inserción";
                printf("Errormessage: %s\n", $conn->error);
                
            }  
            
		}
    $conn->close();
    }
    
    
?>
