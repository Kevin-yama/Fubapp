
<?php
    require 'base.php';    
    $nombre= $_POST["nombre"];
    $celular= $_POST["celular"];
    $usuario=$_POST["usuario"];
    $nom_equipo=$_POST["nom_equipo"];
    $pass=sha1($_POST["password"]);
    $imagen   =$_FILES['img']['name'];
    function buscaRepetido($user,$pass,$conexion){
        $sql="SELECT * from jugador 
            where usuario='$user' and password='$pass'";
        $result=$conexion->query($sql);

        if($result->num_rows> 0){
            return 1;
        }else{
            return 0;
        }
        $result->free();
    }
    if ($nombre=="" || $celular=="" || $usuario=="" || $nom_equipo=="" || $pass=="" || $imagen=="") {
        echo "Hay valores vacios";
    }else{               

        if(buscaRepetido($usuario,$pass,$conn)==1){
			echo "Usuario repetido";
		}else{
            $ruta     = $_FILES['img']['tmp_name'];
            $destino  ="../../fotos/".$imagen;
            copy($ruta,$destino);             

            $sqlInsertar = "INSERT INTO jugador (nombre, celular, usuario, password, foto, nom_equipo)
            VALUES('$nombre','$celular','$usuario','$pass','$destino','$nom_equipo');";
            $resultado = $conn-> query($sqlInsertar);
        
            if ($resultado) {
                echo "La inserción fue exitosa";
            }else{
                echo "No se pudo realizar la inserción";
                echo $conn ->error;
            }
            
            
		}
    $conn->close();
    }
    
    
?>
