<!DOCTYPE html>
<html>
<head>
	<title>Les formulaire en php</title>
	<meta charset="utf-8">
	<style type="text/css">
		input
		{
			position: absolute;
			left:200px ;
		}
	</style>
</head>
<body>
	<form method="Post" action="traitement.php">
		<label for="prenom">Entrer votre prenom :</label>
		<input type="text" name="prenom" id="prenom"><br><br>
		<label for="nom">Entrer votre nom:</label>
		<input type="text" name="nom" id="nom"> <br><br>
		<label for="user">Entrer votre user:</label>
		<input type="text" name="user" id="user"> <br><br>

		<input type="submit" value="Send" >
	</form>
</body>
</html>