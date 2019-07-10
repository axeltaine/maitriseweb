
<?php

    $servername = "localhost";
 /*   $username = "Jules";              
    $password = "fefe8cb08";              */
    
    try{
    $conn = new PDO("mysql:host=$servername;dbname=maitriseweb;charset=utf8mb4", "root", "" /*$username, $password*/);
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