<html><body>
<style>
fieldset
{
background-color : #89C8FE;
max-width : 600px;
padding : 5px;
margin-left : 400px;
}
a
{
color : #ffff;
font-family : "Arial";
}
button
{
background-color : #7601FF;
color : #89C8FE;
padding : 10px 25px;
margin-bottom : 3px;
margin-left : 16px;
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
<fieldset>
<div class="legend">
<?php
/*$conn=mysqli_connect("127.0.0.1", "kbd", "passer", "KBD_School");
$req="select *from etudiants";
$result=mysqli_query($conn,$req);
$tab=mysqli_fetch_all($result);
*/
session_start();
echo("<button><a href='plateforme.php'>ACCUEIL</a></button>");
echo("<button><a href='formu.php'>AJOUTER</a></button>");
echo("<button><a href='afficher.php'>AFFICHER</a></button>");
echo("<button><a href='deconnexion.php'>DECONNEXION</a></button>");
?>

