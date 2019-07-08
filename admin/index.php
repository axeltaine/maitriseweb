<?php session_start();
include '../function/verif_co.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maitrise Web - Admin </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../css/style_pages_cont_real_act.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

</head>

<body style="font-family:'Roboto Condensed">

    <?php   
    echo"<h1 class='text-center mt-5'>Bienvenue <span class='text-info'>".$_SESSION['admin']."</span></h1>";
    include '../function/co.php';?>
    <div class="container-fluid text-center">
        <a href="create.php" class="mt-5 mb-3 btn btn-success "><i class="fas fa-plus-square"></i> Ajouter un projet</a>
        <a href="create_user.php" class="mt-5 mb-3 ml-3 btn btn-primary"><i class="fas fa-user"></i> Gestion des
            comptes</a>
    </div>
    <hr>
    <div id="contain" class="container-fluid mt-5 pb-5">
        <div class="row mx-auto">
            <?php
            include '../function/select_all.php';
     
            foreach($articles as $article){
            echo '
            <div class="col-4 block">
                <img src="'.$article["image"].'" class="card-img-top " style="max-height:350px; width="100px" alt="'.$article["nom"].'">
                <div class="card-body">
                  <h5 class="card-title">'.$article["nom"].'</h5>
                  <p class="card-subtitle">'.$article["description"].'</p>
                  <div class="card-text mt-4">
                    <a target="_blank" class"text-info ml-4" href="../portfolio.php?id='.$article['id_projet'].'"><i style="font-size:2em; color:white;" class="fas fa-eye"></i></a>
                    <a class="text-danger ml-3 " href="../function/delete.php?id='.$article['id_projet'].'"><i style="font-size:2em; color:white;" class="fas fa-trash-alt"></i></a>
                    <a  class="text-warning ml-3" href="modif.php?id='.$article['id_projet'].'"><i style="font-size:2em; color:white;" class="fas fa-pencil-alt"></i></a>
                  </div>
                </div>
            </div>';}
            ?>
        </div>
    </div>
    <hr>
</body>

</html>