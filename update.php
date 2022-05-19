<?php
session_start();
require_once("connexion.php");
$id = $_GET['id'];
$req = "select * from etudiants where id=$id";
$result = mysqli_query($conn,$req);
$rows = mysqli_fetch_array($result);


?>
<form action="modifier.php?id='$id'" method="POST">
	<br><input type="text" name="prenom" value="<?php echo $rows[1]; ?>" readonly /><br>
	<br><input type="text" name="nom"  value="<?php echo $rows[2]; ?>" readonly/><br>
	<br><input type="text" name="username"  value="<?php echo $rows[3]; ?>" readonly /><br>
	<br><input type="password" name="pwd"  value="<?php echo $rows[4]; ?>" readonly /><br>
	<br><input type="date" name="date"  value="<?php echo $rows[5]; ?>" readonly /><br>
	<br><input type="text" name="niveau"  value="<?php echo $rows[6]; ?>"/><br>
	<br><input type="text" name="filiere"  value="<?php echo $rows[7]; ?>" readonly /><br>
	<br><input type="text" name="sexe"  value="<?php echo $rows[8]; ?>" readonly /><br>
	<br><input type="submit" value="ajouter">
</form>
