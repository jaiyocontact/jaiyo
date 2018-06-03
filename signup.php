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
		<label for="mail">Adresse email : </label><br/><input type="text" name="mail" id="mail"><br/><br/>
		<label for="mdp1">Mot de passe : </label> <br/><input type="password" name="mdp1" id="mdp1"><br/><br/>
		<label for="mdp2">Confirmez votre mot de passe : </label> <br/><input type="password" name="mdp2" id="mdp2"><br/>
		<input type="submit" name="envoyer">
		
	</form>
</body>
</html>