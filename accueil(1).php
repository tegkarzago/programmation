<?php
$username = $_REQUEST['username'];
$pwd = $_REQUEST['pwd'];
$conn = mysqli_connect("localhost","kbd","passer","KBD_School");
$req = "select * from etudiants where username='$username' && pwd='$pwd'";
$result = mysqli_query($conn,$req);
if(mysqli_num_rows($result)==1){
while($rows = mysqli_fetch_array($result)){
	header("Location: plateforme.php");
}
}
else {
	 header("Location: formu.php");
}
?>
