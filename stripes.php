<style>
    .stripes-card {
        height: 100vh;
        padding: 0;
        margin: 3% 0;
        display: flex;
    }

    .stripes-card-mobile {
        height: 50vh;
        padding: 0;
        display: flex;
    }

    .stripes {
        height: 100%;
        width: 25%;
        padding: 0;
        overflow: hidden
    }

    .stripes-mobile {
        height: 50vh;
        width: 50%;
        padding: 0;
        overflow: hidden
    }

    .stripes-content {
        height: 100%;
        overflow: hidden;
    }

    .stripes-title {
        position: absolute;
        margin-top: -600px;
        z-index: 300;
        display: block;
        left: 10em;
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em;
    }

    .stripes-img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .stripes-content:hover {
        transform: scale(1.2);
        transition: all 5s ease;
    }

    .stripes-content a{
        display: block;
        position: relative;
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        line-height: 0;
    }

    .stripes-content:before{
        position: absolute;
        width: 100px;
        height: 100px;
        top: 20%;
        left: 39%;
        margin: -50px 0 0 -16px;
        background: url(img/logo_transpa.png) no-repeat;
        content: "";
        opacity: 0;
        z-index: 110;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s linear;
        transition: all 0.3s linear;
    }

    .stripes-content:hover:before{
        top: 50%;
        opacity: 0.8;
    }

    .stripes-content:after{
        position: absolute;
        width: 100%;
        top: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        content: "";
        opacity: 0;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s linear;
        transition: all 0.3s linear;
        z-index: 111;
        margin: 0;
    }

    .stripes-content:hover:after{
        opacity: 1;
    }

    .stripes-card-mobile {
        display: none;
    }


    @media only screen and (max-width: 990px) {

        .stripes-card {
            display: none;
        }

        .stripes-card-mobile {
            display: flex;
        }

        .stripes-mobile {
            width: 50%;
        }
    }
</style>


<h2 style="text-align: center; text-transform: uppercase; margin: 2% 0;">créations</h2>

<div class="stripes-card">
    <div class="stripes">
        <div class="stripes-content">
            <a href="presentation.php#services1">
                <img class="stripes-img" src="img/38018499_1520923464675970_2235721715281821696_o.jpg" alt="">
                <span class="stripes-title">SITES VITRINES</span>
            </a>
        </div>
    </div>
    <div class="stripes">
        <div class="stripes-content">
            <a href="presentation.php#services2">
                <img class="stripes-img" src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
                <span class="stripes-title">SITES E-COMMERCE</span>
            </a>
        </div>
    </div>
    <div class="stripes">
        <div class="stripes-content">
            <a href="presentation.php#services3">
                <img class="stripes-img" src="img/37854358_1508245979277052_1686911270940311552_o.jpg" alt="">
                <span class="stripes-title">APPLICATION INTERNE</span>
            </a>
        </div>
    </div>
    <div class="stripes">
        <div class="stripes-content">
            <a href="presentation.php#services4">
                <img class="stripes-img" src="img/49608100_1716725738429074_4809086061131071488_o.jpg" alt="">
                <span class="stripes-title">IDENTITÉE VISUEL</span>
            </a>
        </div>
    </div>
</div>


<div class="stripes-card-mobile">
    <div class="stripes-mobile">
        <div class="stripes-content">
            <a href="presentation.php#services1">
                <img class="stripes-img" src="img/38018499_1520923464675970_2235721715281821696_o.jpg" alt="">
                <span class="stripes-title">SITES VITRINES</span>
            </a>
        </div>
    </div>
    <div class="stripes-mobile">
        <div class="stripes-content">
            <a href="presentation.php#services2">
                <img class="stripes-img" src="img/37775430_1508245949277055_4923942506057433088_o.jpg" alt="">
                <span class="stripes-title">SITES VITRINES</span>
            </a>
        </div>
    </div>
</div>
<div class="stripes-card-mobile">
    <div class="stripes-mobile">
        <div class="stripes-content">
            <a href="presentation.php#services3">
                <img class="stripes-img" src="img/37854358_1508245979277052_1686911270940311552_o.jpg" alt="">
                <span class="stripes-title">SITES VITRINES</span>
            </a>
        </div>
    </div>
    <div class="stripes-mobile">
        <div class="stripes-content">
            <a href="presentation.php#services4">
                <img class="stripes-img" src="img/49608100_1716725738429074_4809086061131071488_o.jpg" alt="">
                <span class="stripes-title">SITES VITRINES</span>
            </a>
        </div>
    </div>
</div>