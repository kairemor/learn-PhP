<!DOCTYPE html>
<html>
<head>
	<title>pages de traitement de notre formulaire</title>
</head>
<body>
	<?php
	$prenom = $nom = $user = ""; 
	function secure($data)
	{
		$data = trim($data) ; 
		$data = stripslashes($data) ;
		$data = htmlspecialchars($data) ;
		return $data ; 
	}
	$prenom = secure($_POST['prenom']) ; 
	$nom = secure($_POST['nom']) ; 
	$user = secure($_POST['user']) ; 

	echo 'Votre prenom est : ' .$prenom. '<br> Votre nom est : ' .$nom. '<br> Votre user est : '.$user. '<Br>' ;

	echo "Si Erreur de saisie clique <a href = les_formulaires.php >ici </a> pour entrer encore vos infos ";
	?>
</body>
</html>