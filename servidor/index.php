<?php
include "config/config.php";
include "config/functions.php";

if(!isset($p)) {
	$p = "inicio";
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>
  <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<!-- 
<?php
/*  registra al usuario  */
if(isset($_POST['btn-reg'])) {	
  $Nombre   =  $_POST['Nombre'];
  $Email    =  $_POST['Email'];
  $Celular  =  $_POST['Celular'];
  $Usuario  =  $_POST['Usuario'];
  $Password =  md5($_POST['Password']);


	$c = $con->query("SELECT usuario FROM admin WHERE usuario = '$user'");
	if($c->num_rows > 0) {
		echo "Ya existe un usuario con este nombre";
	} else {
		$s = $con->query("INSERT INTO admin (Nombre,Email,Celular,Usuario,Password) VALUES ('$Nombre','$Email','$Celular','$Usuario','$Password')");
		$use = $con->query("SELECT Usuario FROM admin WHERE Usuario = '$user'");
		$uss = $use->fetch_array();		
		if($s) {
			echo "Se ha registrado correctamente";
		}
	}
}

if(isset($_POST['btn-log'])) {
	$user = $_POST['user'];
	$pass = md5($_POST['password']);

	$q = $con->query("SELECT * FROM admin WHERE usuario = '$user' AND password = '$pass'");
	if($q->num_rows > 0) {
		$r = $q->fetch_array();
		$_SESSION['usuario'] = $r['usuario'];
		header("Location: index.php");
	}
}
?> -->

<?php

if(isset($_SESSION['id'])) {
?>
<h1> bienvenido </h1>


<a href="modules/logout.php" style="color:#fff; size">Salir</a><img src="./img/can.gif" style="width="150px" height="80px"">

<?php
if(file_exists("modules/".$p.".php")) {
	include "modules/".$p.".php";
	} else {
		echo "Este módulo no existe";
	}

}else {  
?>

<?php 
if(isset($_GET['p'])!='registro') { ?>
<!-- partial:index.partial.html -->
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Ingreso</div>
      <div class="eula">Escriba sus Datos correctamente</div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <form class="form" id="formulario">
        <label for="email">Usuario</label>
        <input type="text" name="user" class="user">
        <label for="password">Password</label>
        <input type="password" name="password">
        <input type="submit" id="submit1" class="btn" value="Ingresar">
        <a href="?p=registro" style="color:#fff; size">    
        <button type="submit" id="submit2" class="btn" name='btn-log' style="margin-top: 25px;" value="Registrar">Registrar        
        </button></a>
        </form>
        
    </div>
  </div>
</div>


<?php } else {
  // regstrarce 
?>
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Ingreso</div>
      <div class="eula">Escriba sus Datos correctamente</div>
    </div>
    <div class="right">
      <!-- <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg> -->
      <form class="form" id="formulario">
        <label for="email">Nombre</label>
        <input type="text" name="Nombre" class="user">
        

        <label for="email">Email</label>
        <input type="text" name="Email" class="user">

        <label for="password">Celular</label>
        <input type="text" name="Celular">

        <label for="password">Usuario</label>
        <input type="text" name="Usuario">

        <label for="password">Password</label>
        <input type="password" name="password">

        <a href="?p=inicio.php" style="color:#fff; size">    
        <input type="submit" id="submit1" class="btn" name='btn-reg' value="Registrar"></a>        
        </form>
        
    </div>
  </div>
</div>
  
<?php
}}
?>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script>
  <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>  
  <script  src="./ajax/script.js"></script>
  <script  src="./ajax/ajax.js"></script>

</body>
</html>