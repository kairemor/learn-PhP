<!DOCTYPE html>
<html>
<head>
	<title>Les constantes en php</title>
</head>
<body>
	<?php
		define('PI' , 3.14) ; 
		echo 'la valeur de la constante est :' .PI. '<br>'  ; 

		//Les constantes magiques

		echo __FILE__ . '<br>';
		echo __DIR__ . '<br>';
		function essai()
		{
			echo __FUNCTION__ . '<br>' ; 
		}
		echo __LINE__. '<br>' ; 
	?>
</body>
</html>