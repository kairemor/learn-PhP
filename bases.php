<!DOCTYPE html>
<html>
<head>
	<title>LEs bases en PhP</title>
	<meta charset="utf-8">
</head>
<body>
	<?PhP
		echo "ceci est note premier programme en Php <br> Nous allons y essayer quelques pricipes de bases du php <br> comment ecrire <br> la creation des variables <br> la concatenation <br> les operations de bases<br> ";
		$nombre1 = 343 ;
		$nombre2 = 233;
		$chaine = "serigne mor kaire" ;
		$numero = 773999004; 
		$email = "kairemor@gmail.com" ;

		echo "premiere facon de concatener une chaine et une variable <br>" ;
		echo "c'est de mettre toute la chaine a affiche entre les doubles  codes<br> ";
		echo "mon nom est : $chaine <br> mon numero est : $numero <br> mon email est : $email <br>" ;

		echo "La deuxieme maniere de faire la concatenation est de sortir les variables dans les chianes qui sont elles entre les guillemets et chaque variable et separe de la chaine qui la suit et orecede par un point <br>"; 
		echo 'mon nom est : ' .$chaine. ' <br> mon email est : '.$email.'<br>' ;
		echo "la somme des deux nombres a savoir $nombre1 et $nombre2 est :" ;echo($nombre1 + $nombre2);
		echo "<br>leur produit est :";
		echo ($nombre1*$nombre2);
		echo "<br> la division du premier par le deuxieme ";echo ($nombre1/$nombre2);
	?>	
</body>
</html>