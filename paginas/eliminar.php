<?php 
include('conexion.php');
$id =  $_GET['id']; 
mysql_query("DELETE FROM `anuncios` WHERE `id` = '$id' ") ; 
?> 
<script type="text/javascript">window.location = "anuncios_alta.php"</script>