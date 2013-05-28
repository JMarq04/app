<?php 
	include("conexion.php");
 ?>

<!DOCTYPE html>

<meta charset="utf8">
<html>
	<head>
		<title>Lista de anuncios FIT</title>
		<style type="text/css">
			* {
				font-family:sans-serif;
				border:none;
				margin:0;
				padding:0;
			}
			body{
				width:700px;
				margin:0 auto;
				margin-top:30px;
			}
			input{
				border:1px solid #C4C4C4;
				padding:3px;
				float:right;
				color:#414141;
			}
			.submit{
				display:block;
				float:none;
				margin:0 auto;
			}
			label{
				display:block;
			}
			ol li{
				margin-left:20px;
				margin-bottom:10px;
			}
			ol li small{
				color:#AEAEAE;
			}
			h1{
				/*color:#D07E2C;*/
				color: rgb(13, 19, 158);
				font-weight:normal;
				margin-bottom:22px;
			}
			.agregar{
				float:left;
				margin-bottom:40px;
				margin-right:50px;
			}
			
			.eliminar{
				color: red;
				font-size:12px;
				font-weight:bold;
				text-decoration:none;
				float:right;
				position:relative;
				top:4px;
			}
			.eliminar:hover{
				color:#AA1010;
			}
		</style>


		<script language="JavaScript">
			function preguntar(id){
				var x = confirm("¿Realmente deseas eliminar este anuncio?");
				if (!x) {
					return false;
				}
				else {
					document.location = "eliminar.php?id="+id;
					return true;
				}
			}
		</script>
	</head>
	
	<body>
		<div class="agregar">
			<h1>Agregar Anuncio FIT</h1>

			<fieldset>
				<form action="agregar.php" method="POST">
					<label>
						Anuncio:
					</label>
						<textarea name="anuncio" cols="30" rows="10" placeholder="Redacta el anuncio aquí"></textarea>
					<br>
					<input type="submit" value="Agregar" class="submit" name='submitted' >
				</form>
			</fieldset>
		</div>


		<div class="listar">
			<h1>Lista de Anuncios</h1>

			<ol>
				<?php 
				$result = mysql_query("SELECT * FROM `anuncios` ORDER BY id DESC") or trigger_error(mysql_error());
				while ($row = mysql_fetch_array($result)){ ?>

				<li>
					<?php echo $row['nombre']; ?><small>
					<?php echo $row['fecha'];?></small>				
					<a href="javascript:preguntar(<?php echo $row['id']; ?>)" class="eliminar">X</a>
				</li>


				<?php 
				}
				 ?>
			</ol>
		</div>

	</body>
</html>