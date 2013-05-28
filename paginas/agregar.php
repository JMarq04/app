<?php 
include('conexion.php');
if (isset($_POST['submitted'])) { 	
	$hoy = date("m.d.y"); 
	//$hoy = date("F j, Y, g:i a");

	$sql = "INSERT INTO `anuncios` ( `nombre` ,  `fecha`  ) VALUES(  '{$_POST['anuncio']}' ,  '$hoy'  ) "; 
	mysql_query($sql) or die(mysql_error()); 
?>		
	<script type="text/javascript">window.location = "anuncios_alta.php"</script>
<?php
	}
?>