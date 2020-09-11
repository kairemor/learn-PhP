<!DOCTYPE html>
<html>
<head>
	<title>Les tableaux en PhP</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		print("Dans cette partie nous allons voir les tableaux en php ") ; 
		echo "Nous avons trois types de tableaux <br> Les tableaux numerotes , les tableaux indexes ou associatives et les tableaux multidimensionnels";

		echo "Declaratione et utilissation des tableaux numerotes <br>";
		#declarationvavec indexation automatique
		$prenom = array("Mor" , "Lamine" , "cheikh");
		//declaration avec indexation manuelle
		$prenom1[0] = "Modou" ; 
		$prenom1[1] = "Mouha" ;
		$prenom1[2] = "Daima" ; 

		//affichage avec la boucle for

		for ($i=0; $i<=2 ; $i++) { 
			echo 'Le prenom ' .$i. ' est ' .$prenom[$i].'<br><br>';
		}
		//avec la boucle foreach
		foreach ($prenom1 as $liste) {
			echo "Le prenom est  $liste <br><br>";
		}

		echo "Declaration et utilisation des tableaux indexes ou associatives <BR> <BR>"; 

		$age = array('Mor' =>20 ,"Lamine" => 21 , 'Cheikh' => 'not define yet' );
		$age1["Modou"] = 12 ; 
		$age1["Mouha"] = 11 ;
		$age1["Diama"] = 10 ; 

		//affichage avec uniquement la boucle foreach

		foreach ($age as $key => $value) {
			echo "L'age de $key est $value <br>";
		}
		echo "<br>";
		foreach ($age1 as $key => $value) {
			echo "L'age de $key est $value <br>";
		}

		echo "Les tableaux multidimensionnels<br> <br>";

		//declaration 
		$membre = array(
			array("Mor" , 23 , "kairmor@gmail.com") ,
			array("Lamine" , 22 ,"lamzo@gmail.com") , 
			array("Cheikkh" , 21 , "xeuuss@gmail.com") ,
		) ;


		for($i=0;$i<=2 ; $i++) 
		{ 
			$number_membre = $i+1 ; 
			echo "Le membre $number_membre est : <br>";
			echo "<ul>";
			for($j=0; $j<3 ; $j++) 
			{ 
				echo "<li>";
				echo $membre[$i][$j];
				echo "</li>";
			}
			echo "</ul>";
		}

	?>
</body>
</html>