<?php 
	

	/*
	OTRA MANERA DE HACER UN REFRESH

	$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
	header("refresh:300; url=$self"); //Refrescamos cada 300 segundos
	*/
	//include("../includes/header_refresh.php");
	include("conexion.php");
	include("../includes/header.php");
 ?>

<body> 

<div data-role="page" id="page">
	<div data-role="header">
		<a href="../index.php" class="ui-btn-left" data-icon="arrow-l" data-rel="back">Atrás</a>
		<h1>Anuncios</h1>
		<a href="" class="ui-btn-right" onclick="setTimeout('location.reload(true);',0)" data-icon="refresh" data-iconpos="notext"></a>
	</div>
    
    
	<div data-role="content">	

		<div class="listar">

			<ul data-role="listview">
				<?php 
				$result = mysql_query("SELECT * FROM `anuncios` ORDER BY id DESC") or trigger_error(mysql_error());
				while ($row = mysql_fetch_array($result)){ ?>

				<li>
					
					<!--<a href="detail.php?anuncio=&fecha=''">-->
					<img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-ash4/397784_569445173089061_1253412411_n.jpg"/>					
					<h3 class="textoCompleto">
						<?php echo $row['nombre']; ?>
					</h3>
					<p>
						Fecha: <?php echo $row['fecha']; ?>
					</p>
				</li>

				<?php 
				}
				 ?>
				 
			</ul>
		</div>	
	</div>
    
    
<?php 
    include("../includes/footer.php");
 ?>

		