<!DOCTYPE html>
<html>
<head>
	<title>Les conditions en PhP</title>
	<meta charset="utf-8">
</head>
<body>
	<?PhP
		$nombre1 = 32 ; 
		$choix  = 2; 
		$chaine = "kaire" ; 

		if ($nombre1>50) {
			print("le nombre en question est superieur a 50<br>"); 
		}
		else{print("le nombre est inferieur a 50<br>");}

		if ($chaine < "mor") {
			echo "la chaine entree est inferieur a mor<br>";
		}
		else{
			echo "La chiane est supeieur a mor <br> ";
		}
		switch ($choix) {
			case 1:
				echo "Vous avez choisit de menu 1 <br>";
				break;
			case 2:
				echo "Vous avez choisit le menu 2 <br>";	
				break ;	
			default:
				echo "Ce n'est ni le premier ni le deuxieme choix <br> ";
				break;
		}

		// $paire = ($nombre1%2==0)? true : false;
		// if ($paire) {
		// 	echo "le nombre est paire ";
		$paire = ($nombre1%2==0)? "nombre est paire" : "nombre impaire" ;
		echo $paire ;
		
	?>
</body>
</html>