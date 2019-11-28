<?php

$host='localhost';
$user2='root';
$pass='';
$db='staca';

$co = new PDO("mysql:host=$host;dbname=$db", $user2, $pass);
if( $_POST['submit']=='supprimer')
{

$id=$_POST['idtest'];

$sql = "DELETE FROM commande  WHERE idc=$id";
$query=$co->prepare($sql);
$query->execute();
header("location: commande.php");

}
if($_POST['submit']=='modifier')
{
session_start();
$_SESSION['tool']=$_POST['idtest'];
header("location: modifiercommande.html");
	
}






?>