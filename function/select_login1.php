<?php

/*
$req = $conn->prepare('SELECT * FROM users WHERE login = :email AND mdp = :passsword');
*/
$req = $conn->prepare('SELECT * FROM `admin` WHERE Name_admin = :Name_admin AND Mdp_admin = :Mdp_admin');

?>