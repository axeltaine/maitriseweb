<?php
/*
    $current_id=$_GET['id'];
    $sql=$conn->prepare("SELECT * FROM films WHERE id=$current_id");
    $sql->execute();
    $article=$sql->fetch();
*/

$current_id=$_GET['id'];
$sql=$conn->prepare("SELECT * FROM projet WHERE Id_projet=$current_id");
$sql->execute();
$article=$sql->fetch();
?>
   