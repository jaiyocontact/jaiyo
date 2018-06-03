<?php 

try{
$bdd=new PDO ('mysql:host=localhost;dbname=jaiyo;charset=utf8','root','');
}
catch (Exception $e){
	die('Erreur : '. $e->getMessage());
}

if (isset($_POST['mdp1']) AND isset($_POST['mdp2'])) {
	echo "2 set \n";
	if ($_POST['mdp1']==$_POST['mdp2']) {
		echo "ok";
	}
	else{
		echo "pas ok";
	}
}

 ?>