<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="contact.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
</head>

<body>
    <header><?php include ('header.php'); ?> </header>
    <div class="header ">
        <h1>MAitrise Web <br><span>[ Contact ]</span></h1>
    </div>
    <div id="top"></div>
    <main class="global">
        <div class="container_fluide" id="section2">
            <div class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Une question ?</h1><br>
                        <h1 class="jumbotron-heading">Un projet ?</h1><br>
                </div>
            </div>
        </div>
        <section id="contact">
            <div id="contact-us">
                <div class="container">
                    <div class="row">
                        <div class="heading text-center col-sm-12 col-sm-offset-2  fadeInUp" data-wow-duration="1000ms"
                            data-wow-delay="300ms">

                            <p>Envoyer nous un message.</p>
                        </div>
                    </div>
                    <div class="contact-form  fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="row">
                            <div class="col-sm-12">
                                <form id="main-contact-form" name="contact-form" method="post" action="#">
                                    <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
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
                                        <textarea name="message" id="message" class="form-control" rows="4"
                                            placeholder="Enter your message" required="required"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn-submit">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="adresse">
            <div id="contact-us">
                <div class="container">
                    <div class="row">
                        <div class="heading text-center col-sm-12 col-sm-offset-2  fadeInUp" data-wow-duration="1000ms"
                            data-wow-delay="300ms">
                            <p>Notre agence est là pour vous</p>
                        </div>
                    </div>
                    <div class="contact-form  fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="row">
                            <div class="col-sm-12">
                                <form id="main-contact-form" name="contact-form" method="post" action="#">
                                    <div class="row   fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                            <address class="contact-address">
                            <span class="contactAddress-title">PARTOUT AILLEURS</span><br>
                            18 A Avenue bleleldlel
                            <span class="contact-address-city">
                                08000 Charleville-Mézières
                            </span>
                        </address>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2576.9561940697363!2d4.720275315706772!3d49.768080979387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea0e062e03d7e9%3A0xc5cc5f6ee91f2b25!2sCCI+des+Ardennes!5e0!3m2!1sfr!2sfr!4v1553546933236"
                                                    width="100%" height="300" frameborder="0" style="border:0"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <img class="img-fluid" alt="Responsive image" src="img/1624.jpg">
        </div>
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