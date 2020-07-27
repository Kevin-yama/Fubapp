
<?php
    require 'base.php';
    $cancha    = $_POST["cancha"];    
    $hora     = $_POST["hora"];
    $fecha = $_POST['fecha'];
               

    
    if ($cancha=="" || $hora=="" || $fecha=="") {
        echo "Parece que hay valores vacios";
    }else{
        $sql="SELECT * from cancha where `cancha`.`Id_cancha`='$cancha'";
        
        $resultado = $conn -> query($sql);
        $num = $resultado->num_rows;
        if($num > 0){            
            $sqlcon ="UPDATE `cancha` SET `estado` = 'OCUPADO' WHERE `cancha`.`Id_cancha` = '$cancha';";
            $val = $conn-> query($sqlcon);        
            
                $sqlInsertar = "INSERT INTO turnos (cancha, hora, fecha)
                VALUES('$cancha','$hora','$fecha');";
                $resultado = $conn-> query($sqlInsertar);
            
                if ($resultado) {
                    echo "cancha reservada";
                }else{
                    echo "No se pudo realizar la inserción";
                    echo $conn ->error;
                }                                                    
        }else {
            echo ('la cancha no existe');
        }        
        
        
        
    }
       

    $conn->close();
    

   
    
?>
