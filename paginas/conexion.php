<?php 
$host = "10.4.254.1";
$usuario = "appdeveloper";
$pass = "..app..";

$conn = mysql_connect($host, $usuario, $pass) or die ('Error conectando a la base de datos');

$bdnombre = "app";
mysql_select_db($bdnombre);

 ?>