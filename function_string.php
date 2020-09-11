<!DOCTYPE html>
<html>
<head>
	<title>LEs fonction de la classe string</title>
</head>
<body>
	<?php
		$chaine = " chaque jour est une vie " ; 
		$chaine1 = "<strong> KAire mor </strong>" ;
		 strlen($chaine); // longueur de la chaine de caractere
		 strtolower($chaine) ; //chaine toute en miniscule
		 strtoupper($chaine) ; // toute la chaine en majuscule 
		 str_replace('chaque', 'Chaque', $chaine) ; //replace chaue par Chaque dans la chaine 
		$subchaine = substr($chaine,20 , 25 )  ; // extraire une sous chaine a partir denotre chaine de base 
		$nombre_de_mot = str_word_count($chaine); 
		strpos($chaine, "vie") ; 

		echo 'la chaine avant la fonction html : ' .$chaine1;
		$changed =  htmlspecialchars($chaine1);
		echo "La chaine avec la fonction html : $changed";
		$decode = htmlspecialchars_decode($chaine) ; 
		echo "La chaine  apres la fonction decode : $decode";

		echo "LA chaine extraite est : $subchaine";

		$liste = explode(" ", $chaine) ;
		print_r($liste);  print("<br><br><br>") ;
		$liste1 = str_split($chaine) ;
		print_r($liste1);
		print_r($liste);  print("<br><br><br>") ;
		$chaine_join = join($liste , " ") ;  // join($liste1) only
		echo $chaine_join ;

	?>
</body>
</html>