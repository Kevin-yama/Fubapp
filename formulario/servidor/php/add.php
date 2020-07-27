
<?php
    require 'base.php';    
    $estado    = $_POST['estado'] ;  
    $imagen   =$_FILES['img']['name'];           

    
    if ( $estado==""|| $imagen==""  ) {
        echo "Parece que hay valores vacios";
    }else{
        
        $ruta     = $_FILES['img']['tmp_name'];
        $url = ".../formulario/servidor/fotos/".$imagen;
        $destino  ="../../fotos/".$imagen;
        copy($ruta,$destino);   
        //echo ($ruta.$destino);
        //$sqlInsertar= "INSERT INTO `autos` (`placa`, `nombre`, `apellido`, `color`, `fecha`, `imagen`) 
        //VALUES ('$placa', '$nombre', '$apellido', '$color', '$fecha', '$destino');";
        $sqlInsertar = "INSERT INTO cancha (estado, img)VALUES('$estado','$destino');";
        $resultado = $conn-> query($sqlInsertar);
    
        if ($resultado) {
            echo "La inserción fue exitosa";
        }else{
            echo "No se pudo realizar la inserción";
            printf("Errormessage: %s\n", $conn->error);
        }
        
    }
       

    $conn->close();
    

   
    
?>
