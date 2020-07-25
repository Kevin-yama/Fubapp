<?php
session_start();
// retorna la hora y minutos de la fecha que se le pasa 
function fecha($fecha) {
	$e1 = explode("-", $fecha);
	$e2 = explode(" ", $e1[2]);
	$e3 = explode(":", $e2[1]);

	$hora = $e3[0];
	$min = $e3[1];

	return $hora.":".$min;
	
}
// informacion de un solo usuario 

function usuario ($id) {
	require "config/config.php";

	$Ru = $con->query("SELECT usuario FROM admin WHERE usuario= '$id'");
	$Rs = $Ru->fetch_array();

	return $Rs['usuario'];
}
// toda la informacion de un usuario 
function usuarios($id,$campo) {
	require "config/config.php";

	$eee = $con->query("SELECT * FROM admin WHERE usuario = '$id'");
	$aaa = $eee->fetch_array();

	return $aaa[$campo];
}
function len_usuarios(){
	require "config/config.php";
	$eee = $con->query("SELECT * FROM admin WHERE usuario = '$id'");
	return $eee->num_rows;
}
?>