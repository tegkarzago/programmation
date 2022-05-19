<html><body>
<style>
fieldset
{
background-color : #89C8FE;
max-width : 400px;
padding : 7px;
}
a
{
color : #ffff;
font-family : "Arial";
}
button
{
background-color : #89C8FE;
color : #fff;
padding : 10px 10px;
margin-bottom : 1px;
max-width : 400px;
}
table
{
background-color : #7601FF;
color : #fff;
padding : 25px 50px;
margin-bottom : 3px;
margin-left : 5px;
max-width : 400px;

}
h2
{
font-family : "Arial";
}
h1
{
font-family : "Karumbi";
text-align : center;
font-size : 40px;
}

body
{
background-image : url("skbd1.jpg");
background-size : cover;
margin-left : 16px;
font-family : "Arial";
}
</style>

<?php
echo("<button><a href='plateforme.php'>ACCUEIL</a></button>");
echo("<button><a href='formu.php'>AJOUTER</a></button>");
//$conn=mysqli_connect("127.0.0.1", "kbd", "passer", "KBD_School");
session_start();
require_once("connexion.php");
$req="select *from etudiants";
$result=mysqli_query($conn,$req);
$tab=mysqli_fetch_all($result);
$chaine="<table border='1px'><tr><td>id</td><td>prenom</td><td>nom</td><td>username</td><td>date</td><td>niveau</td><td>filiere</td><td>sexe</td><td colspan=2>action</td></tr>";
foreach($tab as $ligne )
{
	$chaine=$chaine."<tr><td>$ligne[0]</td><td>$ligne[1]</td><td>$ligne[2]</td><td>$ligne[3]</td><td>$ligne[5]</td><td>$ligne[6]</td><td>$ligne[7]</td><td>$ligne[8]</td><td><button><a href='delete.php?id=$ligne[0]'>Supprimer</a></button></td><td><button><a href='update.php?id=$ligne[0]'>Modifier</a></button></tr>";
}
$chaine=$chaine."</table>";
echo $chaine;
?>
</table>
</div>
</fieldset>
</body></html>




