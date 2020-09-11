<!DOCTYPE html>
<html>
<head>
	<title>Les variables super gloabales en php</title>
</head>
<body>
	<?php
	$nombre = 10 ; 
	function carre($nombr)
	{
		return $GLOBALS['nombre'] ; 
	}
	echo carre(12). '<br>';

	echo $_SERVER['PHP_SELF']. '<br>' ; 
	echo $_SERVER['SERVER_ADDR']. '<br>' ;
	echo $_SERVER['SERVER_NAME']. '<br>' ;
	echo $_SERVER['HTTP_HOST']. '<br>' ;
	echo $_SERVER['SCRIPT_NAME']. '<br>' ;

	setcookie("kaire") ; 
	?>
</body>
</html>