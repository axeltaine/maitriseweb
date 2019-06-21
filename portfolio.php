<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>MAitrise Web - Portfolio</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/portfolio.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
</head>

<body>

	<?php include ('header.php'); ?>
	
	<header>
		<h1>MAitrise Web <br> <span>[ Portfolio ]</span></h1>
	</header>

	<div id="top"></div>
	<section class="gallery">
		<div class="row mx-auto">
			<ul>
				<a href="#" class="close"><i class="fas fa-times fa-2x" style="color: #2C3034 !important;"></i></a>
				<li>
					<a href="#item02">
						<img src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
					</a>
				</li>

				<li>
					<a href="#item02">
						<img src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
					</a>
				</li>

				<li>
					<a href="#item02">
						<img src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
					</a>
				</li>
				<li>
					<a class="image" href="#item01">
						<img src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
					</a>
				</li>
				<li>
					<a class="image" href="#item02">
						<img src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
					</a>
				</li>
				<li>
					<a class="image" href="#item01">
						<img src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
					</a>
				</li>
				<li>
					<a class="image" href="#item01">
						<img src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
					</a>
				</li>
				<li>
					<a class="image" href="#item01">
						<img src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
					</a>
				</li>
			</ul>
		</div> <!-- / row -->

		<!-- Item 01 -->
		<div id="item01" class="port">

			<div class="row">
				<div class="description">
					<h1>Item 01</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis libero erat. Integer ac
						purus est. Proin erat mi, pulvinar ut magna eget, consectetur auctor turpis.</p>
				</div>
				<div class="col-6">
					<img src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
				</div>
			</div>

			<div class="row text-align-center mx-auto mt-5">
				<div class="col-3">
					<img src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
				</div>
				<div class="col-3">
					<img src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
				</div>
				<div class="col-6 mt-5" style="text-align:center!important;">
					<a class="btn btn-primary btn-lg hvr-grow-shadow hvr-underline-from-center" href="#"
						role="button">Visiter le site</a>
				</div>
			</div>
			<!-- / row -->

		</div> <!-- / Item 02 -->

		<!-- Item 02 -->
		<div id="item02" class="port">

				<div class="row">
						<div class="description">
							<h1>Item 01</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis libero erat. Integer ac
								purus est. Proin erat mi, pulvinar ut magna eget, consectetur auctor turpis.</p>
						</div>
						<div class="col-6">
							<img src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
						</div>
					</div>
		
					<div class="row text-align-center mx-auto mt-5">
						<div class="col-3">
							<img src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
						</div>
						<div class="col-3">
							<img src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
						</div>
						<div class="col-6 mt-5" style="text-align:center!important;">
							<a class="btn btn-primary btn-lg hvr-grow-shadow hvr-underline-from-center" href="#"
								role="button">Visiter le site</a>
						</div>
					</div> <!-- / row -->

		</div> <!-- / Item 02 -->

	</section> <!-- / projects -->

	<footer><?php include ('footer.html'); ?></footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/portfolio.js"></script>
	<script type="text/javascript" src="js/header.js"></script>

</body>

</html>