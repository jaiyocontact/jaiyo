<?php 

//connexion a la BDD
try{
$bdd=new PDO ('mysql:host=localhost;dbname=jaiyo;charset=utf8','root','root');
}
catch (Exception $e){
	die('Erreur : '. $e->getMessage());
}

//test pour les mdp
if (isset($_POST['mdp1']) AND isset($_POST['mdp2'])) {

	if (($_POST['mdp1']==$_POST['mdp2']) AND strlen($_POST['mdp1'])>4) {
		echo "ok";
		header('Location: accueil.php');
	}
	else{
		echo "pas ok";
		$_POST['vmdp']='false';

		header('Location: signup.php');
	}
}

 ?>