<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	$title = $_GET['title'];

	$location = "http://query.yahooapis.com/v1/public/yql?q=";
	//$location .= urlencode("select * from feed where url='"'http://feeds.feedburner.com/danielgc'"");
	$location .= urlencode("select * from feed where url='http://feeds.feedburner.com/FacultadDeIngenieraYTecnologa' and title='".$title."'");
	$location .= "&format=json";

	$rss = file_get_contents($location, true);
	$rss = json_decode($rss);	
	//$rss = xmlrpc_decode($rss);

	include("../includes/header.php");
?>


<body>
	<div data-role="page" id="detail">
		<div data-role="header">
				<a href="noticias.php" data-icon="arrow-l" data-rel="back">Atrás</a>
				<h1>Noticias</h1>
			</div>
		
		<div data-role="content">			
		 	<?php 
				$content = $rss->query->results->item->encoded;	

				echo "<h1>$title</h1>";
				echo "<p>$content</p>";	
			 ?>
		</div>
	 </div>

</body>