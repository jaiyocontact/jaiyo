<!DOCTYPE html>
<?php
	$bdd=new PDO('mysql:host=localhost;dbname=jaiyo;charset=utf8','root','root');
	/*$req=$bdd->query('SELECT COUNT(*) AS nbinstance FROM tshirt');
	$donnees=$req->fetch();
	echo $donnees['nbinstance'];
	$req->closeCursor();*/

	$req=$bdd->query('SELECT * FROM tshirt');
	$donnees=$req->fetch();

?>
<html>
<head>
	<title>Affiche Produit</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="affiche_produit.css">
</head>
<body>

</body>
</html>
<p>
	<figure>
		<img src=<?php echo 'autre/'.$donnees['localisation']  ;?> alt=<?php echo $donnees['nom']  ?> ><br/>
		<figcaption>
			<?php echo $donnees['nom'] .' '. $donnees['prix']   ?>
		</figcaption>
	</figure>
</p>
<?php

$req->fetch();
?>