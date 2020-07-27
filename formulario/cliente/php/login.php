<?php    
    session_start();
    require 'base.php';
    if (!is_null($_POST['iduser']) && !is_null($_POST['idpass'])) {
        $user = $_POST['iduser'];
        $password = sha1($_POST['idpass']); 
        $sql="SELECT * from jugador where usuario='$user' and password='$password'";
        
        $resultado = $conn -> query($sql);
        $num = $resultado->num_rows;
        if($num > 0){
            $_SESSION['user']=$user;
            echo 1;        
        }else {
            echo 'No esta registrado';
        }
        
    }else{
        echo 'Llene todo los campos';
    }

?>