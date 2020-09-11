<!DOCTYPE html>
<html>
<head>
	<title>les boucles en php</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		echo "Dans cette partie nous allons voir les differentes boucles qui exitent en php <br> Nous avons les trois boucles standard a savoir le while , do while et la boucle for <br> et la boucle specififique a PhP qui est les foreach<br>";
		$nombre = 1 ; 
		while ($nombre <= 10) {
			echo "le nombre est : $nombre  <br>" ; 
			$nombre++ ;
		}
		do
		{
			echo 'le nombre est : ' .$nombre.'<br>';
			$nombre++ ; 
		}while($nombre<=20) ; 

		for ($nombre=20; $nombre<=30 ; $nombre++) { 
			echo 'le nombre est : ' .$nombre.'<br>';
		}
	?>
</body>
</html>