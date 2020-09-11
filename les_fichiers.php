<!DOCTYPE html>
<html>
<head>
	<title>la Gestion des fichiers en php</title>
</head>
<body>
	<?php
		$fichier = fopen("file.txt", "a+") ; 
		fwrite($fichier, "Cettvie chaine est ecrite grace a la gestion des fichiers du langage php \n");
		fclose($fichier); 

		$fichier = fopen("file.txt", "r") ;
		$contenu = fgets($fichier) ;
		echo  'le contenu de la chaine est : '.$contenu. '<br>'; 

		//pour deplacer le curseur on use la fonction fssek() comme em lanagage c

		fseek($fichier, 100) ; 
		$contenu1 = fgets($fichier); 
		echo "le contenu de la seconde variable de lecture : $contenu1";

	?>
</body>
</html>