<?php
$req = $conn->query("SELECT * FROM PROJET");
     $articles = $req->fetchAll();
?>