<?php
$servername = "localhost";
$database="fubapp";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password,$database);
$conn -> set_charset("utf8");

?>