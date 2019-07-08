<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/style_pages_cont_real_act.css">
    <!--  pour la police des titres  -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!-- pour les autres textes -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <style>

[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

/* ---------- GENERAL ---------- */

* {
  box-sizing: border-box;

}

body {

  font: 87.5%/1.5em 'Open Sans', sans-serif;
  background: #0264d6; /* Old browsers */
background: -moz-radial-gradient(center, ellipse cover,  #0264d6 1%, #1c2b5a 100%); /* FF3.6+ */
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(1%,#0264d6), color-stop(100%,#1c2b5a)); /* Chrome,Safari4+ */
background: -webkit-radial-gradient(center, ellipse cover,  #0264d6 1%,#1c2b5a 100%); /* Chrome10+,Safari5.1+ */
background: -o-radial-gradient(center, ellipse cover,  #0264d6 1%,#1c2b5a 100%); /* Opera 12+ */
background: -ms-radial-gradient(center, ellipse cover,  #0264d6 1%,#1c2b5a 100%); /* IE10+ */
background: radial-gradient(ellipse at center,  #0264d6 1%,#1c2b5a 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0264d6', endColorstr='#1c2b5a',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
height:calc(100vh);
width:100%;
}

#contain{
    margin-top: 20px;
}

    .block{
        color: white;
        text-align: center;
    }

    
hr {
  border: 0;
  height: 1px;
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}
    </style>
</head>

<body style="font-family:'Roboto Condensed">

    <div class="row">
    <a class="btn mx-auto btn-primary mt-5 mb-5" href="index.php"><?=$_SESSION['admin']?></a>
    </div>
    <?php 

    if(!isset($_SESSION['admin'])){
        header('location:login.php');
    }

    include '../function/co.php';

    include '../function/select.php';
        
    @$test = $_POST['nom'];
    @$test1 = $_POST['description'];
    @$test2= $_POST['image']; 
    @$test3 = $_POST['url'];
    @$test4= $_POST['fullscreen']; 
    @$test5 = $_POST['image2'];
    @$test6= $_POST['image3']; 

        if(isset($_POST['submit'])){
            $sql1 = $conn->query("UPDATE `projet` SET `nom` = '$test', `description` = '$test1', `image` = '$test2', `url` = '$test3', `fullscreen` = '$test4', `image2`='$test5', `image3`='$test6' WHERE `projet`.`id_projet`=$current_id");
            header('location:index.php');
        }
    ?>

    <div class="container-fluid text-center">
    <h2 class="mx-auto">Modifier le film :</h2>
        <div class="row mx-auto ">
            <div class="col-md-12">
                <div class="well well-sm ">
                    <form class="form-horizontal offset-3" method="post">
                        <fieldset>                            
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="nom" type="text" placeholder="nom" value="<?= $article['nom']?>" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="description" type="text" placeholder="description" value="<?= $article['description']?>" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="image" type="text" placeholder="image" value="<?= $article['image']?>" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="url" type="text" placeholder="url" value="<?= $article['url']?>" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="fullscreen" placeholder="fullscreen" value="<?= $article['fullscreen']?>" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input id="image2" name="image2" placeholder="image 2" type="text" value="<?= $article['image2']?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input name="image3" placeholder="image 3" value="<?= $article['image3']?>" type="text" class="form-control" >
                                 
                                    </div>
                                </div>
                                <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="id_type" type="text" placeholder="vitrine = 1, e-commerce = 2, appli = 3, id. visu = 4" class="form-control">
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 mt-4 mb-4 text-center">
                                        <button type="submit" name="submit"
                                            class="btn btn-primary btn-lg">Modifier</button>
                                    </div>
                                </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
