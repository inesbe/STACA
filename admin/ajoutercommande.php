<?php

$host='localhost';
$user2='root';
$pass='';
$db='staca';
$adresse=$_POST['adresse'];
$email=$_POST ['email'];
$nomproduit=$_POST['nomprod'];
$tel=$_POST['telephone'];
$prix=$_POST['prix'];
$co = new PDO("mysql:host=$host;dbname=$db", $user2, $pass);
$nb=rand(100,900);
$holy=" INSERT INTO commande (idc,adresse,email,telephone,nomproduit,prix) values ('$nb','$adresse','$email','$tel','$nomproduit','$prix')";
$query=$co->prepare($holy);
$query=$co->query($holy);
header("location: commande.php");


?>