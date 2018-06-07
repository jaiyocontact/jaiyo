<?php 

$name_file=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$type=$_POST['type'];
$nom=$_POST['nom'];
$prix=$_POST['prix'];
$univers=$_POST['univers'];
$localisation='img/'.$type.'/'.$_FILES['photo']['name'];

//echo $name_file.' '.$tmp_name.' '.$type.' '.$nom.' '.$prix.' '.$univers.' '.$localisation;

$bdd=new PDO('mysql:host=localhost;dbname=jaiyo;charset=utf8','root','root');
//prepare la requete pour ajouter tshirt dans la bdd

$req=$bdd->prepare('INSERT INTO tshirt (nom,univers,prix,localisation) VALUES (?,?,?,?) ');

$req->execute(array($nom,$univers,$prix,$localisation));
move_uploaded_file($tmp_name, $localisation);

header('Location: ../accueil.php');
?>