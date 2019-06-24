<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="css/contact.css" rel="stylesheet">
        <link href="css/membre.css" rel="stylesheet">
        
    <link href="css/style.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
</head>

<body>
    <header><?php include ('header.php'); ?> </header>
    <div class="header">
		<h1>MAitrise Web <br><span>[ Contact ]</span></h1>
	</div>
    <div id="top"></div>
    <main class="global">
        <div class="membre">
        <div class="container_fluide" id="section2">
            <div class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Notre équipe de dev :</h1>
                </div>
            </div>
        </div>
        <div class="container m-t-md">
     
  <!-- First row -->
  <div class="row">
    <div class="col-xs-12 col-md-4">
      <!-- Card -->
      <article class="card animated fadeInLeft">
        <img class="card-img-top img-responsive" src="img/19105875_10211933330962903_8610926667809294383_n.jpg" style="max-height: 10em; "alt="Deer in nature" />
        <div class="card-block">
          <h4 class="card-title">Animal Farm</h4>
          <p class="card-text">Tired of their servitude to man, a group of farm animals revolt and establish their own society, only to be betrayed into worse servitude by their leaders, the pigs. This satire addresses the communist philosophy the Soviet Union.</p>
          
        </div>
      </article><!-- .end Card -->
    </div>
    <div class="col-xs-12 col-md-4">
      <!-- Card -->
      <article class="card animated fadeInUp">
        <img class="card-img-top img-responsive" src="img/19105875_10211933330962903_8610926667809294383_n.jpg" style="max-height: 10em; " alt="Deer in nature" />
        <div class="card-block">
          <h4 class="card-title">Animal Farm</h4>
          <p class="card-text">Tired of their servitude to man, a group of farm animals revolt and establish their own society, only to be betrayed into worse servitude by their leaders, the pigs. This satire addresses the communist philosophy the Soviet Union.</p>
          
        </div>
      </article>
      <!-- .end Card -->
    </div>
    <div class="col-xs-12 col-md-4">
      <!-- Card -->
      <article class="card animated fadeInRight">
        <img class="card-img-top img-responsive" src="img/19105875_10211933330962903_8610926667809294383_n.jpg" style="max-height: 10em; " alt="Deer in nature" />
        <div class="card-block">
          <h4 class="card-title">Animal Farm</h4>
          <p class="card-text">Tired of their servitude to man, a group of farm animals revolt and establish their own society, only to be betrayed into worse servitude by their leaders, the pigs. This satire addresses the communist philosophy the Soviet Union.</p>
          
        </div>
      </article>
      <!-- .end Card -->
    </div>
  </div><!-- .end First row -->
</div><!-- .end First row -->
</div>
        <section id="contact">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2576.9561940697363!2d4.720275315706772!3d49.768080979387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea0e062e03d7e9%3A0xc5cc5f6ee91f2b25!2sCCI+des+Ardennes!5e0!3m2!1sfr!2sfr!4v1553546933236"
                width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div id="contact-us" class="parallax">
                <div class="container">
                    <div class="row">
                        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp"
                            data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h2>Contact</h2>
                            <p>Envoyer nous un message.</p>
                        </div>
                    </div>
                    <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="row">
                            <div class="col-sm-6">
                                <form id="main-contact-form" name="contact-form" method="post" action="#">
                                    <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Name"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Email Address" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject"
                                            required="required">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="4"
                                            placeholder="Enter your message" required="required"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn-submit">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <div class="contact-info wow fadeInUp" data-wow-duration="1000ms"
                                    data-wow-delay="300ms">
                                    <ul class="address">
                                        <li><i class="fa fa-map-marker"></i> <span> Address:</span> 18 A Avenue Georges
                                            Corneau, 08000
                                            Charleville-Mézières </li>
                                        <li><i class="fa fa-phone"></i> <span> Phone:</span> 06.51.47.16.78 </li>
                                        <li><i class="fa fa-envelope"></i> <span> Email:</span><a
                                                href="a.taine@simplon-charleville.fr">
                                                a.taine@simplon-charleville.fr</a></li>
                                        <li><i class="fa fa-globe"></i> <span> Website:</span> <a
                                                href="#">www.taine.simplon-charleville.fr</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer><?php include ('footer.html'); ?></footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
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

</body>

</html>