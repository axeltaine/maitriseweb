<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAitrise Web</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/portfolio.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">

    <!-- LOAD JQUERY LIBRARY -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

    <!-- LOADING FONTS AND ICONS -->
    <link href="http://fonts.googleapis.com/css?family=Poppins:700" rel="stylesheet" property="stylesheet"
        type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="slider/revolution/fonts/font-awesome/css/font-awesome.css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="slider/revolution/css/settings.css">

    <!-- FONT AND STYLE FOR BASIC DOCUMENTS, NO NEED FOR FURTHER USAGE IN YOUR PROJECTS-->
    <link href="http://fonts.googleapis.com/css?family=Roboto%3A700%2C300" rel="stylesheet" property="stylesheet"
        type="text/css" media="all" />


    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="slider/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- PARTICLES ADD-ON FILES -->
    <link rel='stylesheet' href='slider/revolution-addons/particles/css/revolution.addon.particles.css?ver=1.0.3'
        type='text/css' media='all' />
    <script type='text/javascript'
        src='slider/revolution-addons/particles/js/revolution.addon.particles.min.js?ver=1.0.3'></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.navigation.min.js">
    </script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.slideanims.min.js">
    </script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <style>
        .truc:hover {
            transform: scale(1.1);
            transition: 0.5s ease;
    </style>
        }
</head>

<body>

    <header><?php include ('header.php'); ?> </header>

    <main class="global">
        <div class="vide" id="section1" style="height:60px"></div>
        <div id="app">
            <div class="sections-menu">
                <span class="menu-point" v-bind:class="{active: activeSection == index}"
                    v-on:click="scrollToSection(index)" v-for="(offset, index) in offsets" v-bind:key="index">
                </span>
            </div>
        </div>
        <div class="container_fluide"><?php include ('slider.html'); ?></div>



        <div class="bidule" style="height: 100vh; padding: 0; margin: 3% 0; display: flex; overflow: hidden ">

            <div class="truc" style="height: 100%; width: 25%; padding: 0; cursor: pointer;"><img
                    style="height: 100%; width: 100%; overflow: hidden;     object-fit: cover;"
                    src="img/38018499_1520923464675970_2235721715281821696_o.jpg" alt=""></div>
            <div class="truc" style="height: 100%; width: 25%; padding: 0; cursor: pointer;"><img
                    style="height: 100%; width: 100%; overflow: hidden;     object-fit: cover;"
                    src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt=""></div>
            <div class="truc" style="height: 100%; width: 25%; padding: 0; cursor: pointer;"><img
                    style="height: 100%; width: 100%; overflow: hidden;     object-fit: cover;"
                    src="img/37854358_1508245979277052_1686911270940311552_o.jpg" alt=""></div>
            <div class="truc" style="height: 100%; width: 25%; padding: 0; cursor: pointer;"><img
                    style="height: 100%; width: 100%; overflow: hidden;     object-fit: cover;"
                    src="img/49608100_1716725738429074_4809086061131071488_o.jpg" alt=""></div>

        </div>

        <?php include ('parallax.html'); ?>
        <?php include ('gallery.html'); ?>
        <section class="testimonial text-center">
            <div class="container">
                <div class="heading white-heading">
                    Ils nous on fait confiance :
                </div>
                <div id="testimonial4"
                    class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
                    data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="testimonial4_slide">
                                <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <h4>Client 1</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial4_slide">
                                <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <h4>Client 2</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial4_slide">
                                <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <h4>Client 3</h4>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </section>
        <div class="container_fluide" id="section4">
            <div class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">CONTACT</h1>
                    <p class="lead text-muted">Un projet en tête ? venez nous en faire part. MAITRISE WEB répondra a vos
                        besoins en vous écoutant.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg hvr-grow-shadow hvr-underline-from-center" href="contact.php"
                            role="button">CONTACTEZ NOUS</a>
                    </p>

                </div>
            </div>
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
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="slider/assets/warning.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <script src="js/parallax.min.js"></script>
</body>

</html>