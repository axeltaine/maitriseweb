<?php include ('requete/connect.php'); ?>
<div id="top" style="margin-bottom: 80px;"></div>
<hr>
<h2 style="text-align: center; text-transform: uppercase; margin: 2% 0;">NOS PROJETS & CREATIONS</h2>
<hr>
<section class="gallery">
	<div class="container-fluid mini-gallery">
		<div class="row">
			<div class="col-sm-12">
				<ul class="filter font-alt" id="filters">
					<li><a class="current wow fadeInUp" href="#" data-filter="*"
							style="visibility: visible; animation-name: fadeInUp;">TOUT</a></li>
					<li><a class="wow fadeInUp" href="#" data-filter=".illustration" data-wow-delay="0.2s"
							style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Site
							Web</a></li>
					<li><a class="wow fadeInUp" href="#" data-filter=".marketing" data-wow-delay="0.4s"
							style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Flyer</a>
					</li>
					<li><a class="wow fadeInUp" href="#" data-filter=".photography" data-wow-delay="0.6s"
							style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Identité
							visuelle</a></li>
					<li><a class="wow fadeInUp" href="#" data-filter=".webdesign" data-wow-delay="0.6s"
							style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Projet en
							Cours</a></li>
				</ul>
			</div>
			<div class="col-12 drop">
				<div class="dropdown">

					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Catégories
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						<button class="dropdown-item" type="button">Site Web</button>
						<button class="dropdown-item" type="button">Flyer</button>
						<button class="dropdown-item" type="button">Identité visuelle</button>
						<button class="dropdown-item" type="button">Projet en Cours</button>
					</div>
				</div>
			</div>
			
			<a href="#" class="close" id="cross"><i class="fas fa-times fa-2x"
					style="color: #2C3034 !important;"></i></a>
					<?php
              $stmt = $bdd->prepare('SELECT * FROM PROJET');
              $stmt->execute();
 
                 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                 {
                   extract($row);
  
                     ?>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 site">
			
				<a href="#item01<?php echo $id_projet ; ?>" >
					<h3 class="site-title" id="<?php echo $id_projet; ?>"><?php echo $nom ; ?></h3>
					<img src="<?php echo $image?>" alt="">
				</a>
				
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 site">
				<a class="suite" href="./portfolio.php">
					<p class="voirplus">+ tout voir</p>
				</a>
			</div>
			
			<div id="item01<?php echo $id_projet ; ?>" class="port" style="margin-top: -120px;">

				<div class="row" >
					<div class="col-12 col-md-6">

						<h1><?php echo $nom ; ?></h1>
						<p><?php echo $description ; ?></p>

					</div>
					<div class="col-12 col-md-6"><img src="<?php echo $image?>" alt="">
					</div>
				</div>
				<div class="row text-align-center mx-auto ">
					<div class="col-3"> <img src="<?php echo $image?>" class="wow flipInY animated"
							data-wow-duration="1000ms" data-wow-delay="300ms"
							style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;"
							alt="">
						</a>
					</div>
					<div class="col-3"> <img src="<?php echo $image?>" class="wow flipInY animated"
							data-wow-duration="1000ms" data-wow-delay="300ms"
							style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;"
							alt="">
						</a>
					</div>
					<div class="col-6 mt-5" style="text-align:center!important;"><a
							class="btn btn-primary btn-lg hvr-grow-shadow hvr-underline-from-center" href="#"
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

		
	
	</div>
	


</section>
<script src="js/portfolio.js"></script>r-grow-shadow hvr-underline-from-center" href="#"
							role="button">Visiter le site</a>
						<a class="btn btn-primary btn-lg hvr-grow-shadow hvr-underline-from-center close" href="#"
							role="button" style="margin-left: 5%;">Fermer</a></div>
				</div>
				<!-- / row -->
			</div>
			<!-- / Item 02 -->
			<!-- Item 02 -->
			<div id="item02" class="port"  style="margin-top: -120px;">
				<div class="row">
					<div class="col-12 col-md-6">

						<h1>Item 01</h1>
						<p>Lorem ipsum dolor sit amet,
							consectetur adipiscing elit. Vivamus quis libero erat. Integer ac purus est.
							Proin erat mi,
							pulvinar ut magna eget,
							consectetur auctor turpis. </p>

					</div>
					<div class="col-12 col-md-6"><img src="img/37775430_1508245949277055_4923942506057433088_o.jpg"
							alt=""></div>
				</div>
				<div class="row text-align-center mx-auto mt-5">
					<div class="col-3"> <img src="img/37775430_1508245949277055_4923942506057433088_o.jpg"
							class="wow flipInY animated" data-wow-duration="1000ms" data-wow-delay="300ms"
							style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;"
							alt="">
						</a></div>
					<div class="col-3"> <img src="img/37775430_1508245949277055_4923942506057433088_o.jpg"
							class="wow flipInY animated" data-wow-duration="1000ms" data-wow-delay="300ms"
							style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;"
							alt="">
						</a></div>
					<div class="col-6 mt-5 boutons" style="text-align:center!important;"><a
							class="btn btn-primary btn-lg hvr-grow-shadow hvr-underline-from-center" href="#"
							role="button">Visiter le site</a>
						<a class="btn btn-primary btn-lg hvr-grow-shadow hvr-underline-from-center close" href="#"
							role="button" style="margin-left: 5%;">Fermer</a></div>
				</div>
				<!-- / row -->
			</div>
		</div>		
	</div>	
</section>
<script src="js/portfolio.js"></script>