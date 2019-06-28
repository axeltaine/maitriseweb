<style>
  .cadre {
    height: 26em;
    transform: translateY(15%);
    margin: 0 15%;
    background-color: #eee;
    opacity: 0.6;
    border-radius: 5px;
  }

  .para-title {
    color: black;
    font-size: 36px;
    line-height: 2.8em;
    font-weight: 600;
  }

  .para-text {
    font-size: 22px;
    color: black;
  }

  .icon-text {
    color: black;
    font-size: 22px;
    margin: 15% 1%;
    text-transform: uppercase;
  }

  .icon {
    text-align: center;
  }

  .icon-rang {
    transform: translateY(30%);
  }

  .parallax-window {
    text-align: center;
    min-height: 530px;
  }

  #parallax-mobile {
    display: none;
  }

  @media only screen and (max-width: 767px) {
    #parallax-mobile {
      display: block;
    }

    #parallax {
      display: none;
    }

    .para-title {
      font-size: 24px;
      line-height: 2.4em;
    }

    .para-text {
      font-size: 18px;
    }

    .icon {
      margin-top: 1.8rem;
    }

    .icon-rang {
      transform: translateY(3%);
    }

    .icon-text {
      font-size: 12px;
      margin: 10% 2%;
    }
  }
</style>

<div class="container_fluide">
  <section id="parallax">
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/para-flou.jpg">
      <div class="cadre">
        <span class="para-title">NOS PETITS PLUS</span><br>
        <span class="para-text">C'est en communiquant qu'on avance</span>
        <div class="row text-align-center icon-rang">
          <div class="col-6 col-md-3 icon"><img src="img/graphic-design.png" alt="">
            <p class="icon-text">designs & interfaces</p>
            </i>
          </div>
          <div class="col-6 col-md-3 icon"><img src="img/speed-test.png" alt="">
            <p class="icon-text">optimisation de la vitesse</p>
            </i>
          </div>
          <div class="col-6 col-md-3 icon"><img src="img/responsive.png" alt="">
            <p class="icon-text">responsive design</p>
            </i>
          </div>
          <div class="col-6 col-md-3 icon"><img src="img/consultant.png" alt="">
            <p class="icon-text">support dédié</p>
            </i>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="parallax-mobile">
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/para-flou.jpg">
      <div class="cadre">
        <span class="para-title">NOS PETITS PLUS</span><br>
        <span class="para-text">C'est en communiquant qu'on avance</span>
        <div class="row text-align-center icon-rang">
          <div class="col-6 col-md-3 icon"><img src="img/graphic-design.png" style="height:45px" alt="">
            <p class="icon-text">designs & interfaces</p>
            </i>
          </div>
          <div class="col-6 col-md-3 icon"><img src="img/speed-test.png" style="height:45px" alt="">
            <p class="icon-text">optimisation de la vitesse</p>
            </i>
          </div>
          <div class="col-6 col-md-3 icon"><img src="img/responsive.png" style="height:45px" alt="">
            <p class="icon-text">responsive design</p>
            </i>
          </div>
          <div class="col-6 col-md-3 icon"><img src="img/consultant.png" style="height:45px" alt="">
            <p class="icon-text">support dédié</p>
            </i>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>