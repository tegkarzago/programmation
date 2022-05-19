<?php
	session_start();
	require_once("connexion.php");
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
 	$username = $_POST['username'];
 	$pwd = md5($_POST['pwd']);
 	$date = $_POST['date'];
 	$filiere = $_POST['filiere'];
 	$niveau = $_POST['niveau'];
 	$sexe = $_POST['sexe'];
	$req = "select * from etudiants where username='$username'";
	$res = mysqli_query($conn,$req);
	$rows= mysqli_fetch_assoc($res);
	if($username == $rows['username']){

		header("Location: formu.php");
	}
	else {
		$req = "insert into etudiants(prenom,nom,username,pwd,date,niveau,filiere,sexe) values('$prenom', '$nom', '$username', '$pwd', '$date', '$niveau', '$filiere', '$sexe')";
		$result = mysqli_query($conn,$req);
		if ($result){
 			header("Location: logger.php");
		}
		else {
			echo "Erreur";
		}
	}
?>
