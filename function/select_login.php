
<?php

/*
$req = $conn->prepare('SELECT * FROM utilisateurs WHERE email = :email AND mot_de_passe = :passsword');
*/


$req = $conn->prepare('SELECT * FROM user WHERE nom = :nom AND mdp = :mdp');
?>