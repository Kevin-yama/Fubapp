<?php
// concection de bases de Datos 
$Chost = 'localhost';
$Cuser = 'root';
$Cpass = '';
$Cdb = 'fubapp';

$con = new mysqli($Chost,$Cuser,$Cpass,$Cdb);

if ($con->connect_errno) {
	die("ha ocurrido un error");
}/* else{
	die('base de datos conectada');
} */
?>