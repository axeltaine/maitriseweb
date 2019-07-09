<?php include ('requete/connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Maitrise Web - Portfolio</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/portfolio.css">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/header.css" rel="stylesheet">
	<link href="css/hover-min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
</head>

<body>

	<header><?php include ('header.php');?> </header>
	<div class="header ">
		<h1>MAitrise Web <br><span>[ Portfolio]</span></h1>
	</div>
	<div id="top" style="margin-bottom: 40px;"></div>
	<hr>
	<h2 style="text-align: center; text-transform: uppercase; margin: 2% 0;">NOS PROJETS & CREATIONS</h2>
	<hr>
	<section class="gallery" style="height: 100vh;">
	<div class="container-fluid mini-gallery">
		<div class="row">
			<div class="portfolioFilter col-sm-12" id="myBtnContainer">
			<center>
  <button class="btn active" onclick="filterSelection('all')"> Tout</button>
  <button class="btn" onclick="filterSelection('Site_vitrine')"> Site vitrine</button>
  <button class="btn" onclick="filterSelection('Site_e-commerce')"> Site e-commerce</button>
  <button class="btn" onclick="filterSelection('Application_interne')"> Application interne</button>
  <button class="btn" onclick="filterSelection('Identité_visuelle')"> Identité visuelle</button>
</center>
			</div>
			<div class="col-12 drop">
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Catégories
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						<button class="dropdown-item" type="button">Site vitrine</button>
						<button class="dropdown-item" type="button">Site e-commerce</button>
						<button class="dropdown-item" type="button">Application interne</button>
						<button class="dropdown-item" type="button">Identité visuelle</button>
					</div>
				</div>
			</div>
			<a href="#" class="close" id="cross"><i class="fas fa-times fa-2x"
					style="color: #2C3034 !important;"></i></a>
					<?php
              $stmt = $bdd->prepare('SELECT * FROM projet');
              $stmt->execute();
 
                 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                 {
                   extract($row);
  
                     ?>
			<div class="column<?php echo $Type_projet ; ?> col-12 col-sm-6 col-md-4 col-lg-3 site">
			
				<a href="#item01<?php echo $Id_projet ; ?>" class=" zoomIn animated">
					<h3 class="site-title" id="<?php echo $Id_projet; ?>"><?php echo $Name_projet ; ?></h3>
					<img src="<?php echo $Img1?>" alt="">
				</a>
			</div>
				 
			<div id="item01<?php echo $Id_projet ; ?>" class="port" style="margin-top: -120px;">
				<div class="row" >
					<div class="col-12 col-md-6">
						<h1><?php echo $Name_projet ; ?></h1>
						<p><?php echo $Description ; ?></p>
					</div>
					<div class="col-12 col-md-6"><img src="<?php echo $Img1?>" alt="">
					</div>
				</div>
				<div class="row text-align-center mx-auto ">
					<div class="col-3"> <img src="<?php echo $Img2?>" class="wow flipInY animated"
							data-wow-duration="1000ms" data-wow-delay="300ms"
							style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;"
							alt="">
						</a>
					</div>
					<div class="col-3"> <img src="<?php echo $Img3?>" class="wow flipInY animated"
							data-wow-duration="1000ms" data-wow-delay="300ms"
							style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;"
							alt="">
						</a>
					</div>
					<div class="col-6 mt-5" style="text-align:center!important;"><a
							class="btn btn-primary btn-lg hvr-grow-shadow hvr-underline-from-center" href="<?php echo $Url?>"
							role="button">Visiter le site</a>
						<a class="btn btn-primary btn-lg hvr-grow-shadow hvr-underline-from-center close" href="#"
							role="button" style="margin-left: 5%;">Fermer</a></div>
				</div>
				<!-- / row -->
			</div>
	<?php
      
    }
    ?>
			<!-- / Item 01 -->
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 site">
				<a class="suite" href="./portfolio.php">
					<p class="voirplus zoomIn animated">+ tout voir</p>
				</a>
			</div>
	</div>
</section>
	<!-- / projects -->
	<div class="container_fluide" id="section4">
		<div class="jumbotron text-center">
			<div class="container">

				<p class="lead text-muted">VOUS AVEZ UN PROJET WEB ?</p>
				<p class="lead">
					<a class="btn btn-primary btn-lg hvr-grow-shadow hvr-underline-from-center" href="contact.php"
						role="button">PARLONS-EN !</a>
				</p>

			</div>
		</div>
	</div>
	<footer><?php include ('footer.php');?></footer>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="js/header.js"></script>
	<script src="js/portfolio.js"></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/filter.js"></script>
</body>

</html>