
<?php

$username = 'dbo776287041';              
$password = '5sjm92q49';              

try{
$conn = new PDO('mysql:host=db776287041.hosting-data.io;port=3306;dbname=db776287041;charset=utf8', $username, $password /*$username, $password*/);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
    catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}




?>



<?php
/*

  try
  {
  	// On se connecte à MySQL
  	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', "root", "");
  }
  catch(PDOException $e)
  {
  	// En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
  }

  */
?>