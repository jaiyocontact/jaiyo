<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="signup.css">
	<title>Jaiyo</title>
	<link rel="icon" href="sign-check-icon.png">
</head>
<body>

	<form method="post" action="signup_post.php">

		<label for="mail">Adresse mail : </label><br/><input type="email" name="mail" id="mail" required="required" pattern='^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$' ><br/><br/>

		<label for="mdp1">Mot de passe : </label> <br/><input type="password" name="mdp1" id="mdp1" required="required"><br/><br/>

		<label for="mdp2">Confirmez votre mot de passe : </label> <br/><input type="password" name="mdp2" id="mdp2" required="required"><br/>

		<?php
			if($_POST['mdp1'] == $_POST['mdp2'])
			{
			   // Enregistre
			}
			else
			{
			   echo 'mots de passes pas identiques';
			}
		?>

		<input type="submit" name="envoyer">
		
	</form>
</body>
</html>