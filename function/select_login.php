
<?php

$req = $conn->prepare('SELECT * FROM `ADMIN` WHERE Name_admin = :Name_admin AND Mdp_admin = :Mdp_admin');
?>