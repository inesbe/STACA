<?php
session_start();
$id=$_SESSION['tool'];
$host='localhost';
$user2='root';
$pass='';
$db='staca';
echo $id;
$adresse=$_POST['adress'];
$email=$_POST ['email'];
$nomproduit=$_POST['nomprod'];
$tel=$_POST['telephone'];
$prix=$_POST['prix'];
$co = new PDO("mysql:host=$host;dbname=$db", $user2, $pass);
$sql = "UPDATE commande SET  adresse='$adresse', email='$email', telephone='$tel'  ,nomproduit='$nomproduit' , prix='$prix'  WHERE idc='$id'";
$query=$co->prepare($sql);
$query->execute();
header('location: commande.php');



?>