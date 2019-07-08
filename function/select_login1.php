<?php

/*
$req = $conn->prepare('SELECT * FROM users WHERE login = :email AND mdp = :passsword');
*/
$req = $conn->prepare('SELECT * FROM user WHERE nom = :nom AND mdp = :mdp');

?>