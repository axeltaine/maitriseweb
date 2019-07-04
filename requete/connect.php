<?php
  try
  {
  	// On se connecte à MySQL
  	$bdd = new PDO('mysql:host=#######;dbname=######;charset=utf8', "####", "####");
  }
  catch(PDOException $e)
  {
  	// En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
  }
?>