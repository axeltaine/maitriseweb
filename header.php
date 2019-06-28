<style>

.dropbtn {
    text-align: center;
    color: white !important;
    background-color: #1E2022 !important;
    border: none;
    line-height: 2.7em;
    margin-top: 0.3em;
  }

  .dropbtn:focus{
    outline: none;
  }

  .dropdown {
    position: relative;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    z-index: 1;
    transition: 2s;
    margin-top: 1%;
    z-index: 600;
  }

  #drop {
    color: #eee!important;
    font-size: 16px;
    padding: 12px 34px;
    text-decoration: none;
    display: block;
    z-index: 600;
  }

  #drop:hover {
    background-color: rgb(52, 54, 56) !important;
    color: white;
    transition: 0.5s;
  }

  .dropdown:hover .dropdown-content {
    display: block;
    background-color: #1E2022 !important;
  }

  nav.black .dropbtn {
      line-height: 2em;
  }

  @media only screen and (max-width: 990px) {

    .dropbtn {
    margin: -2% 0 0 4%;
  }

  nav.black .dropbtn {
      margin: 0 0 -6px 15px;
  }
}

</style>


<nav class="navbar navbar-custom navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
        style="outline: none;">
        <span style="font-size: 2em; color: #eee;">
            <i class="fas fa-bars"></i>
        </span>
    </button>
    <h2 class="nav-title" style="color:#eee">Maitrise WEB</h2>
    <a class="navbar-brand2" href="index.php">
        <h1 style="margin: 0!important"><img class="logo2" src="img/logo_transpa.png" alt="logo"></h1>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item hvr-grow-shadow hvr-underline-from-center">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
<li class="nav-item">
            <div class="dropdown">
      <button class="dropbtn hvr-grow-shadow hvr-underline-from-center">Présentation</button>
      <div class="dropdown-content">
        <a id="drop" href="presentation.php">Site vitrine</a>
        <a id="drop" href="presentation.php?#services1">Site E-commerce</a>
        <a id="drop" href="presentation.php?#services2">Application interne</a>
        <a id="drop" href="presentation.php?#services3">Identité visuelle</a>
      </div>
    </div>
</li>
            <a class="navbar-brand" href="index.php">
                <h1><img class="logo" src="img/logo_transpa.png" alt="logo"></h1>
            </a>
            <li class="nav-item hvr-grow-shadow hvr-underline-from-center">
                <a class="nav-link" href="portfolio.php">Réalisations</a>
            </li>
            <li class="nav-item hvr-grow-shadow hvr-underline-from-center">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>