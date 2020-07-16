<?php
require('conexion.php');
// cambia los datos de la base de datos  para el administrador 

 function datos_admin()
{
    $consulta = "SELECT *  FROM `admin`";
    $result = $conn->query($consulta);
        
    while($row = $result->fetch_assoc()){
        $arr[]=$row;            
    }

    $result->free();
    $conn->close();
    echo json_encode($arr);

}


?>