<?php
session_start();
$username = $_REQUEST['username'];
$pwd = md5($_REQUEST['pwd']);
$_SESSION['username']=$username;
$login = $_SESSION['username'];
$conn = mysqli_connect("localhost","kbd","passer","KBD_School");
$req = "select * from etudiants where username='$username' && pwd='$pwd'";
$result = mysqli_query($conn,$req);
if(mysqli_num_rows($result)==1){
while($rows = mysqli_fetch_array($result)){
	header("Location: plateforme.php");
	echo $login;
}
}
else {
	 header("Location: formu.php");
}
?>
