<?php

$valor = $_POST['valor'];
if ($valor == '1') {
    ver_canchas();
} else if($valor == '2') {
    ver_jugadores();
}
function ver_canchas(){
    require 'base.php';
    $consulta = "SELECT * FROM cancha";
    $result = $conn->query($consulta);
        
    while($row = $result->fetch_assoc()){
        $arr[]=$row;            
    }
    
    $result->free();
    $conn->close();
    echo json_encode($arr);
}

function ver_jugadores(){
    require 'base.php';
    $consulta = "SELECT *  FROM jugador";
    $result = $conn->query($consulta);
        
    while($row = $result->fetch_assoc()){
        $arr[]=$row;            
    }
    
    $result->free();
    $conn->close();
    echo json_encode($arr);
}



?>