<?php
	session_start();
	require_once("connexion.php");
	$id =$_GET['id'];
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
 	$username = $_POST['username'];
 	$pwd = md5($_POST['pwd']);
 	$date = $_POST['date'];
 	$filiere = $_POST['filiere'];
 	$niveau = $_POST['niveau'];
 	$sexe = $_POST['sexe'];
	$req = "update etudiants set niveau='$niveau' where id=$id";
	$result = mysqli_query($conn,$req);
	if ($result){
 		header("Location: afficher.php");
	}
	else {
		echo "Erreur";
	}
?>
