<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    
</head>

<body>

    <form  method="post" class="form-signin">
        <h1 class="text-center text-light">ALLOCINE<strong>MET</strong><h1>
        <h1 class="h3 mb-3 text-light text-center font-weight-normal">Connectez vous !</h1>
        <label for="nom" class="sr-only">Nom</label>
        <input type="text" name="nom" id="inputUserName" class="form-control" placeholder="Votre nom" required
            autofocus>
        <label for="mdp" class="sr-only">Password</label>
        <input type="mdp" name="mdp" id="mdp" class="form-control" placeholder="Votre mot de passe"
            required>
        <div class="checkbox mb-3">
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Se connecter</button>
        <p class="mt-5 mb-3 text-light text-center">&copy; Allocinemet 2019</p>
    </form>

    <?php
    include '../function/co.php';
    include '../function/select_login.php';
   
 
    if(isset($_POST['submit'])){
        $req->execute([
            'nom' => $_POST['nom'],
            'mdp' => $_POST['mdp']
            ]);
            $user = $req->fetch();
        if ($user){
            $_SESSION['admin'] = $_POST['nom'];
            ob_start();
            header('location:index.php');
            exit;
            ob_end_flush();
        }else{
            echo "<div class='alert alert-light fixed-top col-8 offset-2 mt-5 text-center' role='alert'>
            identifiants incorrects !
          </div>";
        }
    }

?>

</body>

</html>
