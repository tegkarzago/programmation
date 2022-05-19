<?php
session_start();


?>
<form action="ajouter.php" method="POST">
	<br><input type="text" name="prenom" placeholder="Votre prenom" require/><br>
	<br><input type="text" name="nom"placeholder="Votre nom" require/><br>
	<br><input type="text" name="username"placeholder="Votre login" require/><br>
	<br><input type="password" name="pwd"placeholder="Votre mot de passe" require/><br>
	<br><input type="date" name="date"placeholder="Votre date de naissance" require/><br>
	<br><input type="text" name="niveau"placeholder="Votre niveau" require/><br>
	<br><input type="text" name="filiere"placeholder="Votre filiere" require/><br>
	<br><input type="text" name="sexe"placeholder="Votre sexe" require/><br>
	<br><input type="submit" value="ajouter">
</form>
