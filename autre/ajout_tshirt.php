<!DOCTYPE html>
<html>
<head>
	<title>Ajout Produit</title>
</head>
<body>
	<form method="post" action="ajout_tshirt_post.php" enctype="multipart/form-data">
		<label>Type du produit :
			<select name="type">
				<option value="tshirt">tshirt</option>
				<option value="sweat">sweat</option>
		    </select><br/>
	    </label>
		<label>Nom du produit :
			<input type="text" name="nom">
		</label><br/>
		<label>Univers du produit :
			<input type="text" name="univers">
		</label><br/>
		<label>Prix du produit :
			<input type="number" name="prix">
		</label><br/>
		<label>
			<input type="file" name="photo">
		</label><br/>
		<input type="submit" name="envoyer">
		
	</form>
</body>
</html>