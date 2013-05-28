<?php
	
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	
	try {
		//echo "probando PHP 1";
		$location = "http://query.yahooapis.com/v1/public/yql?q=";
		$location .= urlencode("select * from feed where url='http://feeds.feedburner.com/FacultadDeIngenieraYTecnologa'");
		$location .= "&format=json";
		
		$rss = file_get_contents($location, true);
		$rss = json_decode($rss);	
		//echo $rss;
		//$rss = xmlrpc_decode($rss);
		//echo "probando fin PHP 1";	
	} catch (Exception $e) {
		$e->getMessage();
	}

	include("../includes/header.php");
?>

<body>
	<div data-role="page" id="home">

		<header data-role="header">
			<a href="../index.php" data-icon="arrow-l" data-rel="back">Atrás</a>
			<h1>Noticias</h1>
			<a href="" onclick="setTimeout('location.reload(true);',0)" data-icon="refresh" data-iconpos="notext"></a>
			<!--
			<a href="" onclick="javascript:recargar()" data-icon="refresh" data-iconpos="notext"></a>
			<a href="" onclick="document.location.href = document.location.href" data-icon="home" data-iconpos="notext"></a>
			<a href="" onclick="history.go(0)" data-icon="search" data-iconpos="notext"></a>					
			-->
		</header>

		<div data-role="content">
			<ul data-role="listview">
				<?php 
					try {

						foreach ($rss->query->results->item as $post){
							$title = $post->title;
							$link  = $post->link;
							$desc  = $post->description;
							$img   = $post->enclosure->url;
							$content = $post->guid->content;

							//echo "<li><a href=\"detail.php?title=$title&desc=$desc\" rel=\"external\"> <img src=\"$img\"/> <h3>$title</h3><p>$desc</p></a></li>";						
							echo "<li><a href=\"detail.php?title=$title&cont=$content\" rel=\"external\"> <img src=\"$img\"/> <h3>$title</h3><p>$desc</p></a></li>";
							//echo "<li><a href=\"detail.php?title=$title&cont=$content\" rel=\"external\"> <h3>$title</h3><p>$desc</p></a></li>";
						}
					} catch (Notice $e) {
						$e->getMessage();
						echo "<p>Ocurrió un error, intente recargar la página</p>";
					}
					
				 ?>
			</ul>
		</div>
<?php 
    include("../includes/footer.php");
 ?>