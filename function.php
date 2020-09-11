<!DOCTYPE html>
<html>
<head>
	<title>Les fonction en php</title>
</head>
<body>
	<?php
		#procedure o fontion ne retournant  rien 
		function bonjour()
		{
			echo "Bonjour la vie est pour un lapse de temps <br>" ;
		}
		bonjour() ; 

		//declaration d'un fonction avec une valeur de retour 

		function somme($nb1 , $nb2)
		{
			return $nb1 + $nb2 ; 
		}

		echo somme(12 , 43);
	?>
</body>
</html>